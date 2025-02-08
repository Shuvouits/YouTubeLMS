<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontendDashboardController extends Controller
{
    public function home(){

        $all_sliders = Slider::all();

        return view('frontend.pages.home.index', compact('all_sliders'));
    }
}
