<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InfoBoxRequest extends FormRequest
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

            'icon' => [
                'required',
                'string',
                'max:5000',
                function ($attribute, $value, $fail) {
                    if (!str_starts_with(trim($value), '<svg')) {
                        $fail('The ' . $attribute . ' must be a valid SVG code.');
                    }
                },
            ],
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:1000',


        ];
    }
}
