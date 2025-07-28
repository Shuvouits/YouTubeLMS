<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiteInfoRequest extends FormRequest
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

            'meta_title' => 'nullable|string|max:255',
            'copyright' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'logo' => 'nullable',
            'favicon' => 'nullable',
            'address' => 'nullable|string|max:255',
            'phone' => 'nullable|string',
            'mail' => 'nullable|email|max:255',
            'facebook' => 'nullable|string|url|max:255',
            'twitter' => 'nullable|string|url|max:255',
            'instagram' => 'nullable|string|url|max:255',
            'linkedin' => 'nullable|string|url|max:255',
        ];
    }
}
