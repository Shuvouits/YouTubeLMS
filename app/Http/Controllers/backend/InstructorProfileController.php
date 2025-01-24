<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ProfileService;
use App\Http\Requests\ProfileRequest;


class InstructorProfileController extends Controller
{

    protected $profileService;

    public function __construct(ProfileService $profileService)
    {
        $this->profileService = $profileService;

    }

    public function index()
    {
        return view('backend.instructor.profile.index');
    }

    public function store(ProfileRequest $request)
    {

        // Pass data and files to the service
        $this->profileService->saveProfile($request->validated(), $request->file('photo'));
        return redirect()->back()->with('success', 'Profile Updated successfully');
    }

    public function setting()
    {
        return view('backend.instructor.profile.setting');
    }
}
