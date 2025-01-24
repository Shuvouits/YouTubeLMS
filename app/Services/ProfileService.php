<?php

namespace App\Services;

use App\Repositories\ProfileRepository;

class ProfileService
{


    protected $profileRepository;

    public function __construct(ProfileRepository $profileRepository)
    {
        $this->profileRepository = $profileRepository;
    }


    public function saveProfile(array $data, $photo = null)
    {
        return $this->profileRepository->createOrUpdateProfile($data, $photo);


    }


}
