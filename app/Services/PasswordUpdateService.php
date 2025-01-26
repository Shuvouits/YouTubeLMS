<?php

namespace App\Services;

use App\Repositories\PasswordUpdateRepository;

class PasswordUpdateService
{


    protected $passwordUpdateRepository;

    public function __construct(PasswordUpdateRepository $passwordUpdateRepository)
    {
        $this->passwordUpdateRepository = $passwordUpdateRepository;
    }


    public function updatePassword(array $data)
    {
        return $this->passwordUpdateRepository->updatePassword($data);


    }


}
