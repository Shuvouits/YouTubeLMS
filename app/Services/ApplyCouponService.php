<?php

namespace App\Services;

use App\Repositories\ApplyCouponRepository;

class ApplyCouponService
{


    protected $applyCouponRepository;

    public function __construct(ApplyCouponRepository $applyCouponRepository)
    {
        $this->applyCouponRepository = $applyCouponRepository;
    }




    public function applyCoupon($couponName, $courseIds, $instructorIds)
    {

        return $this->applyCouponRepository->applyCoupon($couponName, $courseIds, $instructorIds);
    }







}
