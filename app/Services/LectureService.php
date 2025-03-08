<?php

namespace App\Services;

use App\Repositories\LectureRepository;

class LectureService
{


    protected $lectureRepository;

    public function __construct(LectureRepository $lectureRepository)
    {
        $this->lectureRepository = $lectureRepository;
    }


    public function createLecture(array $data)
    {
        return $this->lectureRepository->createLecture($data);
    }




    public function updateLecture(array $data,  $id)
    {

        return $this->lectureRepository->updateLecture($data, $id);

    }


}
