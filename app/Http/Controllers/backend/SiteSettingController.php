<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\SiteInfoRequest;
use App\Models\SiteInfo;
use App\Services\SiteService;
use Illuminate\Http\Request;

class SiteSettingController extends Controller
{


     protected $siteService;

    public function __construct(SiteService $siteService)
    {
        $this->siteService = $siteService;
    }

    public function index()
    {
        $site_data = SiteInfo::first();
        return view('backend.admin.site-setting.index', compact('site_data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SiteInfoRequest $request)
    {
         // Pass data and files to the service
         $this->siteService->saveSiteService($request->validated(), $request->file('logo'), $request->file('favicon'));
         return redirect()->back()->with('success', 'Site information updated');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
