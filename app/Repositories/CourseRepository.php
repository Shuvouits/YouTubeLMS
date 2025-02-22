<?php


namespace App\Repositories;

use App\Models\Course;
use App\Models\CourseGoal;
use App\Traits\FileUploadTrait; // Import the FileUploadTrait

class CourseRepository
{
    use FileUploadTrait; // Use the FileUploadTrait



    public function createCourse($data, $photo)
    {
       $course = new Course();

       // Remove 'course_goals' from the data
       unset($data['course_goals']);

        // Handle file uploads manually
        if ($photo) {
            $data['course_image'] = $this->uploadFile($photo, 'course', $course->course_image);
        }

         return Course::create($data);

    }



    public function createCourseGoals($courseId, array $goals){
        foreach ($goals as $goal) {
            if ($goal) { // শুধু নন-নাল ভ্যালু ইনসার্ট করুন
                CourseGoal::create([
                    'course_id' => $courseId,
                    'goal_name' => $goal,
                ]);
            }
        }
    }








    public function updateCourse($data, $photo, $id)
    {
       $course = Course::find($id);

        // Remove 'course_goals' from the data
        unset($data['course_goals']);

        // Handle file uploads manually
        if ($photo) {
            $data['course_image'] = $this->uploadFile($photo, 'course', $course->course_image);
        }

         $course->update($data);

         return $course->fresh();


    }



    public function updateCourseGoals($courseId, array $goals){

        CourseGoal::where('course_id', $courseId)->delete();

        foreach ($goals as $goal) {
            if ($goal) { // শুধু নন-নাল ভ্যালু ইনসার্ট করুন
                CourseGoal::create([
                    'course_id' => $courseId,
                    'goal_name' => $goal,
                ]);
            }
        }
    }
}


