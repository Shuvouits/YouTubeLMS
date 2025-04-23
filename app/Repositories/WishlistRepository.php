<?php


namespace App\Repositories;

use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class WishlistRepository
{




    public function createWishlist($course_id)
    {
        try {
            if (!Auth::check()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Please login! You are not authorized'
                ], 401);
            }

            $userId = Auth::id();

            $exists = Wishlist::where('user_id', $userId)
                ->where('course_id', $course_id)
                ->exists();

            if (!$exists) {
                Wishlist::create([
                    'user_id' => $userId,
                    'course_id' => $course_id,
                ]);

                $wishlistCount = Wishlist::where('user_id', $userId)->count(); // Total wishlist count
                $wishlist_course = Wishlist::where('user_id', $userId)->with('course', 'course.user')->get();

                return response()->json([
                    'status' => 'success',
                    'message' => 'Wishlist added successfully',
                    'wishlist_count' => $wishlistCount,
                    'wishlist_course' => $wishlist_course
                ], 200);
            }

            return response()->json([
                'status' => 'error',
                'message' => 'This item is already in your wishlist'
            ], 409);
        } catch (\Exception $error) {
            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong! ' . $error->getMessage()
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
