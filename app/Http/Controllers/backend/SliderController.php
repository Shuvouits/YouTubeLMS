<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use App\Services\SliderService;
use Illuminate\Http\Request;

class SliderController extends Controller
{

    protected $sliderService;

    public function __construct(SliderService $sliderService)
    {
        $this->sliderService = $sliderService;
    }

    public function index()
    {
        $slider = Slider::all();
        return view('backend.admin.slider.index', compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SliderRequest $request)
    {
        // Pass data and files to the service
        $this->sliderService->saveSlider($request->validated(), $request->file('image'));
        return redirect()->back()->with('success', 'Slider Created successfully');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $slider = Slider::find($id);
        return view('backend.admin.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SliderRequest $request, string $id)
    {
        $this->sliderService->updateSlider($request->validated(), $request->file('image'), $id);
        return redirect()->back()->with('success', 'Slider Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider = Slider::findOrFail($id);

        // Delete associated image if exists
        // Delete the image file if it exists
        if ($slider->image) {
            $imagePath = public_path(parse_url($slider->image, PHP_URL_PATH));
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $slider->delete();

        return redirect()->route('admin.slider.index')->with('success', 'Slider deleted successfully.');
    }
}
