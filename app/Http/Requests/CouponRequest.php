<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CouponRequest extends FormRequest
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
       $couponId = $this->route('coupon');
        return [
            //'instructor_id' => 'required|integer',
            'coupon_name' => "required|string|max:255|unique:coupons,coupon_name,{$couponId}",
            'coupon_discount' => 'required|numeric|min:0|max:10000',
            'coupon_validity' => 'required|date|after_or_equal:today',
            'status' => 'nullable|integer|in:0,1',
        ];
    }
}
