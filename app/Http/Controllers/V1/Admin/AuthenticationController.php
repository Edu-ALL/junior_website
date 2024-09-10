<?php

namespace App\Http\Controllers\V1\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AuthenticationController extends Controller
{
    public function auth(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $rules = [
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:6',
        ];

        $messages = [
            "email.exists" => "This email has not been registered",
        ];

        $validator = Validator::make($credentials, $rules, $messages);
        if ($validator->fails()) {
            Log::error('Login failed : '.$request->email.' has not been registered');
            return Redirect::back()->withInput()->withErrors($validator->messages());
        }

        if (!Auth::guard('web-admin')->attempt($credentials)) {
            Log::error('Login failed : '.$request->email.', your password is wrong');
            return Redirect::back()->withInput()->withErrors([
                'password' => 'Your password is wrong',
            ]);
        }

        Log::notice('Email : '.Auth::guard('web-admin')->user()->email.' has been successfully logged in');
        return redirect('/admin/dashboard')->withSuccess('Signed in successfully');
    }

    public function logout()
    {
        $user = Auth::guard('web-admin')->user();

        Auth::guard('web-admin')->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        Log::notice('Email : '. $user->email.' has been successfully logged out');
        return redirect('/admin/login');
    }
}
