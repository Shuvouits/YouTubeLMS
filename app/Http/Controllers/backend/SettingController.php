<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StripeRequest;
use App\Models\Stripe;
use Illuminate\Http\Request;

class SettingController extends Controller
{

    public function stripeSetting()
    {

        $stripeSettings = Stripe::first();
        return view('backend.admin.setting.stripe.index', compact('stripeSettings'));
    }

    public function updateStripeSettings(StripeRequest $request)
    {
        Stripe::updateOrCreate(['id' => 1], $request->validated());
        return redirect()->back()->with('success', 'Stripe settings updated successfully!');
    }
}
