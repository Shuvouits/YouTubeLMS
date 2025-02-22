<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
        $courseId = $this->route('course');
        return [
            'category_id' => 'required|integer|exists:categories,id',
            'subcategory_id' => 'required|integer|exists:sub_categories,id',
            'instructor_id' => 'required|integer|exists:users,id', // Assuming instructors are stored in users table
            'course_image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', // Max 2MB
            'course_title' => 'required|string',
            'course_name' => 'required|string',
            'course_name_slug' => "nullable|string|unique:courses,course_name_slug,{$courseId}", // Update conditionally
            'description' => 'required|string',
            'video_url' => 'required|url',
            'label' => 'nullable|string|max:100',

            'resources' => 'nullable|string|max:255',
            'certificate' => 'nullable|string|max:100',
            'selling_price' => 'required|integer|min:0',
            'discount_price' => 'nullable|integer|min:0|lte:selling_price', // Discount should not exceed selling price
            'prerequisites' => 'nullable|string|max:10000',
            'bestseller' => 'nullable|in:yes,no',
            'featured' => 'nullable|in:yes,no',
            'highestrated' => 'nullable|in:yes,no',
            'course_goals.*' => 'nullable'

        ];
    }
}
