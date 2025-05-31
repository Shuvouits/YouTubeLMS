<?php

namespace App\Repositories;

use Stripe\StripeClient;

class StripeRepository
{
    public function handlePayment(array $data)
    {
        $stripe = new StripeClient(config('stripe.stripe_sk'));

        // Prepare line items for Stripe Checkout
        $lineItems = [];
        foreach ($data['course_id'] as $index => $courseId) {
            $lineItems[] = [
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => $data['course_name'][$index],
                        'images' => [$data['course_image'][$index]],
                    ],
                    'unit_amount' => (int) $data['course_price'][$index] * 100,
                ],
                'quantity' => 1,
            ];
        }

        // Create a Stripe Checkout session
        $session = $stripe->checkout->sessions->create([
            'line_items' => $lineItems,
            'mode' => 'payment',
            'success_url' => route('success') . '?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('cancel'),
            'customer_email' => $data['email'],
        ]);

        return redirect($session->url);
    }
}
