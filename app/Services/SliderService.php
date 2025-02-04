<?php

namespace App\Services;

use App\Repositories\CategoryRepository;
use App\Repositories\SliderRepository;

class SliderService
{


    protected $sliderRepository;

    public function __construct(SliderRepository $sliderRepository)
    {
        $this->sliderRepository = $sliderRepository;
    }


    public function saveSlider(array $data, $photo = null)
    {
        return $this->sliderRepository->saveSlider($data, $photo);

    }

    public function updateSlider(array $data, $photo = null, $id)
    {
        return $this->sliderRepository->updateSlider($data, $photo, $id);

    }


}
