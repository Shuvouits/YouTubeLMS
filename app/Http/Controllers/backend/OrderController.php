<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Payment;
use App\Services\PaymentService;
use Illuminate\Http\Request;
use Stripe\StripeClient;
use Illuminate\Support\Str;

class OrderController extends Controller
{

     protected $paymentService;

    public function __construct(PaymentService $paymentService)
    {
        $this->paymentService = $paymentService;
    }

    public function order(OrderRequest $request)
    {

        session()->put('stripe_data', $request->validated());
        // Call the service to process the payment
        return $this->paymentService->processPayment($request->validated());
    }

     public function success(Request $request)
    {
        // Get the session ID from the query string
        $sessionId = $request->query('session_id');
        $stripe = new StripeClient(config('stripe.stripe_sk'));

        try {
            // Retrieve the Stripe session details
            $session = $stripe->checkout->sessions->retrieve($sessionId);
            $paymentIntent = $stripe->paymentIntents->retrieve($session->payment_intent);

            /*Event start */

            $stripe_data = session()->get('stripe_data');

            $paymentData = $stripe_data;

            // Dispatch event
          //  PaymentSuccessful::dispatch($paymentData);

            /*Event End  */

            // Use request data for specific fields
            $this->createPayment($session, $paymentIntent);

            //delete cart data
            $guestToken = $request->cookie('guest_token') ?? Str::uuid();
            Cart::where('guest_token', $guestToken)->delete();

            //coupon session destroy
            session()->forget('coupon','stripe_data');

            return redirect('/')->with('success', 'Course purchase successfully');


            // return view('frontend.pages.checkout.stripe.success', ['session' => $session]);
        } catch (\Exception $e) {

            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function cancel()
    {

        return view('frontend.pages.checkout.stripe.cancel');
    }


    private function createPayment($session, $paymentIntent)
    {

        // Create payment record using metadata from Stripe
        $payment = Payment::create([
            'transaction_id' => $paymentIntent->id,
            'name' => $session->customer_details->name, // Use customer details for name
            'email' => $session->customer_email, // Customer's email from session

            // 'phone' => $session->customer_phone, // Customer's phone from customer_details
            //'address' => $session->customer_address, // Customer's address from customer_details, encoded as JSON if needed


            'total_amount' => $session->amount_total / 100, // Total price from metadata
            'payment_type' => 'stripe', // Payment type (Stripe in this case)
            'invoice_no' => 'INV-' . strtoupper(uniqid()), // Generate a unique invoice number
            'order_date' => now()->toDateString(),
            'order_month' => now()->format('F'),
            'order_year' => now()->year,
            'status' => 'completed', // Payment status
        ]);

         // Use request data for specific fields
         $this->createOrder($payment->id);

    }

    private function createOrder($paymentId){

         // Retrieve the validated data from the session or request
         $stripeData = session('stripe_data'); // Assuming this is where the order data is stored.
         // Create order records for each course
         foreach ($stripeData['course_id'] as $index => $courseId) {
             Order::create([
                 'payment_id' => $paymentId, // Associate with the created payment record
                 'user_id' => auth()->user()->id, // Assuming user is authenticated
                 'course_id' => $courseId,
                 'instructor_id' => $stripeData['instructor_id'][$index], // Add logic to retrieve instructor ID if needed
                 'course_title' => $stripeData['course_name'][$index],
                 'price' => $stripeData['course_price'][$index],
             ]);
         }

    }


}
