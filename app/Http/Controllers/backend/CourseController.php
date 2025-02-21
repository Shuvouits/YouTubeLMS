<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\CourseService;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     protected $courseService;

     public function __construct(CourseService $courseService)
     {
         $this->courseService = $courseService;
     }




    public function index()
    {
        $instructor_id = Auth::user()->id;
        $all_courses = Course::where('instructor_id', $instructor_id)->with('category', 'subCategory')->latest()->get();
        return view('backend.instructor.course.index', compact('all_courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $all_categories = Category::all();
        return view('backend.instructor.course.create', compact('all_categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CourseRequest $request)
    {



        $validatedData = $request->validated();


        $course = $this->courseService->createCourse($validatedData, $request->file('image'));

        //Manage Course Goal

        /*
        if (!empty($validatedData['course_goals'])) {
            $this->courseService->createCourseGoals($course->id, $validatedData['course_goals']);
        }  */

        return back()->with('success', 'Course created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
