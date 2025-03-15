<?php

use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


/* Instructor Approved via admin */

if (!function_exists('isApprovedUser')) {
    function isApprovedUser()
    {
        $user_id = Auth::id();
        return User::where('role', 'instructor')
            ->where('status', '1')
            ->where('id', $user_id)
            ->first();
    }
}



/* Global Use in category  */

if (!function_exists('getCategories')) {
    function getCategories() {

         return Category::with('subcategory')->get();

    }
}


if (!function_exists('getCourseCategories')) {
    function getCourseCategories() {
        return Category::with('course', 'course.user', 'course.course_goal')->get();
    }
}


/** set admin sidebar active */

if (!function_exists('setSidebar')) {
    function setSidebar(array $routes): ?String
    {
        foreach ($routes as $route) {
            if (request()->routeIs($route)) {
                return 'mm-active';
            }
        }
        return null;
    }
}
