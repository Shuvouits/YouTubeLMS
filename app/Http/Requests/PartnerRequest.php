<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartnerRequest extends FormRequest
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

             'name' => 'required|string|max:500', // Name is required, must be a string, and max 500 characters
            'image' => 'required|image|mimes:jpeg,png,jpg,svg, webp', // Image must be required, valid file type, and max size 2MB
        ];
    }
}
