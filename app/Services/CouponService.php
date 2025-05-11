<?php

namespace App\Services;

use App\Repositories\CouponRepository;

class CouponService
{


    protected $couponRepository;

    public function __construct(CouponRepository $couponRepository)
    {
        $this->couponRepository = $couponRepository;
    }


    public function saveCoupon(array $data)
    {
        return $this->couponRepository->saveCoupon($data);
    }




    public function updateCoupon(array $data, $id)
    {

        return $this->couponRepository->updateCoupon($data, $id);

    }

}
