<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function auth()
    {
        return view('Auth.auth');
    }

    public function login(Request $request)
    {
        Log::alert(Hash::make($request->password));

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        } else {
            throw new \Exception('User not found or wrong credentials.', 401);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
