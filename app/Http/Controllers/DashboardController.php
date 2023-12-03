<?php

namespace App\Http\Controllers;

use App\Models\State;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function my_account()
    {
        $data['user'] = auth()->user();
        $data['states'] = State::all();

        return view('dashboard.my_account', $data);
    }

    public function my_account_action(Request $request)
    {
        return;
    }
}
