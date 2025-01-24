<?php


namespace App\Repositories;

use App\Models\User;
use App\Traits\FileUploadTrait; // Import the FileUploadTrait
use Illuminate\Support\Facades\Auth;

class ProfileRepository
{
    use FileUploadTrait; // Use the FileUploadTrait

    public function findProfile()
    {
        $user_id = Auth::user()->id;
        return User::where('id', $user_id)->first();
    }

    public function createOrUpdateProfile($data, $photo)
    {
        $profile = $this->findProfile();

        // Handle file uploads manually
        if ($photo) {
            $data['photo'] = $this->uploadFile($photo, 'user', $profile->photo);
        }

        // Manually assign other fields from $data
        $profile->update($data);

        return $profile;
    }
}
