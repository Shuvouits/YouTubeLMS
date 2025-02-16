<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminInstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_instructors = User::where('role', 'instructor')->latest()->get();
        return view('backend.admin.instructor.index', compact('all_instructors'));
    }


    public function updateStatus(Request $request)
    {
        $user = User::find($request->user_id);
        if ($user) {
            $user->status = $request->status;
            $user->save();

            return response()->json(['success' => true, 'message' => 'User status updated successfully!']);
        }

        return response()->json(['success' => false, 'message' => 'User not found!']);
    }

    public function instructorActive(Request $request){
        $active_instructor = User::where('status', '1')->where('role', 'instructor')->latest()->get();
        return view('backend.admin.instructor.active', compact('active_instructor'));
    }


}
