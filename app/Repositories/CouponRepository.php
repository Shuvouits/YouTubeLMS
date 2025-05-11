<?php


namespace App\Repositories;

use App\Models\Coupon;
use Illuminate\Support\Facades\Auth;

class CouponRepository
{



    public function saveCoupon($data)
    {
        $data['instructor_id'] = Auth::user()->id;

        return Coupon::create($data);

    }

    public function updateCoupon($data, $id){

        $coupon = Coupon::find($id);
        $coupon->update($data);
        return $coupon;

    }






}


