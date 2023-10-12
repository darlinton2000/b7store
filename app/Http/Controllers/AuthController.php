<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;

class AuthController extends Controller
{
    public function register() 
    {
        return view('auth.register');
    }

    public function register_action(RegisterRequest $request)
    {
        $userData = $request->only(['name', 'email', 'password']);
        $userData['password'] = Hash::make($userData['password']);
        $user = User::create($userData);

        Auth::loginUsingId($user->id);
        return redirect()->route('select-state');
        
        dd($user);
    }

    public function state_action(Request $request)
    {
        dd($request);
    }
}
