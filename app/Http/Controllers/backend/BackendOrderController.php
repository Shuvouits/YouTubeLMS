<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;

class BackendOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_payment = Payment::latest()->get();
        return view('backend.admin.order.index', compact('all_payment'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $payment_info = Payment::where('id', $id)->with('order','order.user', 'order.instructor', 'order.course')->first();
        $user_info = User::where('email', $payment_info->email)->first();
        return view('backend.admin.order.view', compact('payment_info','user_info'));
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
