<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use App\Services\WishlistService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{

    protected $wishlistService;

    public function __construct(WishlistService $wishlistService)
    {
        $this->wishlistService = $wishlistService;
    }



     // Wishlist এ কোর্স যোগ করা
     public function addToWishlist(Request $request)
     {

         $validated_data = $request->validate([
             'course_id' => 'required|exists:courses,id', // Check if course_id exists in the courses table
         ]);

         $course_id = $validated_data['course_id'];

         return $this->wishlistService->createWishlist($course_id);
    }

    public function allWishlist()
    {

        // Use the global helper to check authentication
        $authResponse = auth_check_json();
        if ($authResponse) {
            return $authResponse; // Return error response if not authenticated
        }

        $user_id = Auth::user()->id;
        $wishlistItems = Wishlist::where('user_id', $user_id)->with('course', 'course.user')->get();
        $html = view('frontend.pages.home.partials.wishlist', compact('wishlistItems'))->render();
        return response()->json([
            'status' => 'success',
            'html' => $html,
        ]);
    }

}
