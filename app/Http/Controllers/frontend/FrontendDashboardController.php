<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\CourseLecture;
use App\Models\CourseSection;
use App\Models\InfoBox;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendDashboardController extends Controller
{
    public function home()
    {

        $all_sliders = Slider::all();
        $all_info = InfoBox::all();

        $all_categories = Category::inRandomOrder()->limit(6)->get();
        $categories = Category::all();
        $course_category = Category::with('course', 'course.user', 'course.course_goal')->get();

        return view('frontend.pages.home.index', compact('all_sliders', 'all_info', 'all_categories', 'categories', 'course_category'));
    }

    public function view($slug)
    {

        $course = Course::where('course_name_slug', $slug)->with('category', 'subcategory', 'user')->first();
        $total_lecture = CourseLecture::where('course_id', $course->id)->count();
        $course_content = CourseSection::where('course_id', $course->id)->with('lecture')->get();

        // Get the currently authenticated user's ID
        $userId = Auth::id();

        // Fetch similar courses but exclude those already ordered by the student
        $similarCourses = Course::where('category_id', $course->category_id)
            ->where('id', '!=', $course->id)->get();

        $all_category = Category::orderBy('name', 'asc')->get();


        return view('frontend.pages.course-details.index', compact('course', 'total_lecture', 'course_content', 'similarCourses', 'all_category'));
    }
}
