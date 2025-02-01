<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
        $categoryId = $this->route('category');
        return [

            'name' => 'required|string|max:255', // Name is required, must be a string, and up to 255 characters
            //'slug' => 'required|string|max:255|unique:categories,slug,{$categoryId}', // Slug is required, unique, and up to 255 characters
            'slug' => "nullable|string|max:255|unique:categories,slug,{$categoryId}", // Update conditionally
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,webp,svg,avif|max:15360',


        ];
    }
}
