<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Services\CartService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CartController extends Controller
{

    protected $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }



    public function addToCart(Request $request)
    {

        $validated_data = $request->validate([
            'course_id' => 'required|exists:courses,id', // Check if course_id exists in the courses table
            'quantity' => 'nullable|integer|min:1', // Optional quantity
        ]);

        $course_id = $validated_data['course_id'];

        return $this->cartService->createCart($course_id, $request);
    }

    public function cartAll(Request $request)
    {

        $cart =  $this->cartService->viewCart($request);

         // Total Amount (discounted বা selling price) হিসাব করা
         $subTotal = $cart->sum(function ($cartItem) {
            $price = $cartItem->course->discount_price ?? $cartItem->course->selling_price;
            return $cartItem->quantity * ($price ?? 0);
        });

        $html = view('frontend.pages.home.partials.cart', compact('cart', 'subTotal'))->render();

        return response()->json([
            'status' => 'success',
            'html' => $html,
        ]);
    }

   
}
