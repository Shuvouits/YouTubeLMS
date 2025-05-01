<?php

namespace App\Services;

use App\Repositories\CartRepository;
use Illuminate\Http\Request;

class CartService
{


    protected $cartRepository;

    public function __construct(CartRepository $cartRepository)
    {
        $this->cartRepository = $cartRepository;
    }




    public function createCart($course_id, $request)
    {

        return $this->cartRepository->createCart($course_id, $request);
    }

    public function viewCart($request)
    {

        return $this->cartRepository->viewCart($request);
    }

   /*


    public function updateLecture(array $data, $video = null,  $id)
    {

        return $this->lectureRepository->updateLecture($data,  $video, $id);

    }  */


}
