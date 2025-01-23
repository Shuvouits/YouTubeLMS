<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InstructorProfileController extends Controller
{

    public function index()
    {
        return view('backend.instructor.profile.index');
    }

    public function setting()
    {
        return view('backend.instructor.profile.setting');
    }
}
