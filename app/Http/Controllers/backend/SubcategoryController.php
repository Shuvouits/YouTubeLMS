<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubCategoryRequest;
use App\Models\Category;
use App\Models\SubCategory;
use App\Services\SubCategoryService;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{

    protected $subCategoryService;

    public function __construct(SubCategoryService $subCategoryService)
    {
        $this->subCategoryService = $subCategoryService;
    }

    public function index()
    {
        $all_subcategories = SubCategory::with('category')->latest()->get();
        return view('backend.admin.subcategory.index', compact('all_subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $all_categories = Category::orderBy('name', 'asc')->get();
        return view('backend.admin.subcategory.create', compact('all_categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SubCategoryRequest $request)
    {
        // Pass data and files to the service
        $this->subCategoryService->saveSubCategory($request->validated());
        return redirect()->back()->with('success', 'SubCategory Created successfully');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sub_category = SubCategory::find($id);
        $all_categories = Category::latest()->get();
        return view('backend.admin.subcategory.edit', compact('sub_category', 'all_categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SubCategoryRequest $request, string $id)
    {
        $this->subCategoryService->updateSubCategory($request->validated(), $id);
        return redirect()->back()->with('success', 'SubCategory Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        SubCategory::findOrFail($id)->delete();
        return redirect()->route('admin.subcategory.index')->with('success', 'SubCategory deleted successfully.');
    }
}
