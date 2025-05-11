<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplyCouponRequest extends FormRequest
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
            'coupon' => [
                'required',
                'string',
                'exists:coupons,coupon_name',
                function ($attribute, $value, $fail) {
                    $coupon = \App\Models\Coupon::where('coupon_name', $value)->first();
                    if ($coupon && \Carbon\Carbon::now()->greaterThan($coupon->coupon_validity)) {
                        $fail('The coupon has expired.');
                    }
                },
            ],
            'course_id' => 'required|array',
            'course_id.*' => 'exists:courses,id', // Validate each course_id
            'instructor_id' => 'required|array',
            'instructor_id.*' => 'exists:users,id', // Validate each instructor_id
        ];
    }
}
