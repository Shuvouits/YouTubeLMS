<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function googleLogin()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleAuthentication()
    {
        try {
            // Google থেকে ইউজার তথ্য নিয়ে আসা
            $googleUser = Socialite::driver('google')->user();

            // যদি ব্যবহারকারী ইতোমধ্যে ডাটাবেজে থাকে, তাহলে তাকে সেশন লগইন করানো
            $user = User::where('email', $googleUser->email)->first();

            if (!$user) {
                // নতুন ব্যবহারকারী তৈরি
                $user = User::create([
                    'email' => $googleUser->email,
                    'name' => $googleUser->name,
                    'photo' => $googleUser->avatar,
                    'password' => Hash::make('password@123'),
                    'role' => 'user',
                ]);
            }

            // ব্যবহারকারীকে সেশন লগইন করানো
            Auth::login($user);

            // লগইন সাফল্য হলে রিডিরেক্ট
            return redirect('/user/dashboard');
        } catch (\Exception $e) {
            // এরর হলে ব্যাক করুন
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
}
