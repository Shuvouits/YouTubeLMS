<?php


namespace App\Repositories;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;

class CartRepository
{




    public function createCart($course_id, $request)
    {
        try {

            // Retrieve or generate guest_token
            $guestToken = $request->cookie('guest_token') ?? Str::uuid();

             // Set the guest_token cookie if not already set
             if (!$request->cookie('guest_token')) {

                Cookie::queue('guest_token', $guestToken, 60 * 24 * 30); // 30 days

            }

             // Check if the course is already in the cart for this guest_token
             $existingCart = Cart::where('guest_token', $guestToken)
             ->where('course_id', $course_id)
             ->first();

             if ($existingCart) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'This course is already in your cart.'
                ], 400);
            }

             // Add course to the cart
             Cart::create([
                'guest_token' => $guestToken,
                'course_id' => $course_id,
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Course added to cart successfully!'
            ]);


        } catch (\Exception $error) {
            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong! ' . $error->getMessage(),
            ], 500);
        }
    }

    public function viewCart($request){

        try{

             // Retrieve or generate guest_token
             $guestToken = $request->cookie('guest_token') ?? Str::uuid();
             $cart = Cart::where('guest_token', $guestToken)->with('course', 'course.user')->get();

             return $cart;

        }catch(\Exception $error){

            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong! ' . $error->getMessage(),
            ], 500);

        }

    }



    /*

    public function updateCourse($data, $photo, $video, $id)
    {
       $course = Course::find($id);

        // Remove 'course_goals' from the data
        unset($data['course_goals']);

        // Handle file uploads manually
        if ($photo) {
            $data['course_image'] = $this->uploadFile($photo, 'course', $course->course_image);
        }

        if ($video) {
            $data['video'] = $this->uploadFile($video, 'video', $course->video);
        }

         $course->update($data);

         return $course->fresh();


    }

    */
}
