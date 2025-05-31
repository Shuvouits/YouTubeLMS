<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'address' => 'required|string',
            'payment_type' => 'required|string',
            'course_id' => 'required|array',
            'instructor_id' => 'required|array',
            'course_name' => 'required|array',
            'course_image' => 'required|array',
            'course_price' => 'required|array',
            'total_price' => 'required|numeric',

        ];
    }
}
