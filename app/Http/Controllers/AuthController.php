<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Request;

class AuthController extends Controller
{
    public function register() 
    {
        return view('auth.register');
    }

    public function register_action(RegisterRequest $request)
    {
        dd($request);
    }
}
