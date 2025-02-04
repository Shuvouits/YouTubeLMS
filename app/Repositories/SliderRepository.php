<?php


namespace App\Repositories;

use App\Models\Slider;
use App\Traits\FileUploadTrait; // Import the FileUploadTrait

class SliderRepository
{
    use FileUploadTrait; // Use the FileUploadTrait



    public function saveSlider($data, $photo)
    {
       $slider = new Slider();

        // Handle file uploads manually
        if ($photo) {
            $data['image'] = $this->uploadFile($photo, 'slider', $slider->photo);
        }


        // Save the intro
        $slider->create($data);

        return $slider;
    }

    public function updateSlider($data, $photo, $id)
    {
       $slider = Slider::find($id);
        // Handle file uploads manually
        if ($photo) {
            $data['image'] = $this->uploadFile($photo, 'slider', $slider->photo);
        }

         // Save the intro
         $slider->update($data);

         return $slider;


    }
}
