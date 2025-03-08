<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LectureRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            'course_id' => 'required|exists:courses,id', // Optional but must exist in courses table if provided
            'section_id' => 'required|exists:course_sections,id', // Required and must exist in course_sections table
            'lecture_title' => 'required|string|max:255', // Optional, must be a string, max length 255
            'url' => 'nullable|url|max:255', // Optional, must be a valid URL, max length 255
            'content' => 'required|string', // Optional, must be a string
            'video_duration' => 'nullable'

        ];
    }
}
