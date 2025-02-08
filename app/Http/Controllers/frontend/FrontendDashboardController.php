<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\InfoBox;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontendDashboardController extends Controller
{
    public function home(){

        $all_sliders = Slider::all();
        $all_info = InfoBox::all();

        return view('frontend.pages.home.index', compact('all_sliders', 'all_info'));
    }
}
