<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontendDashboardController extends Controller
{
    public function home(){
    
        return view('frontend.pages.home.index');
    }
}
