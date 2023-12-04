<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
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

    public function my_account_action(UpdateProfileRequest $request)
    {
        $data = $request->only(['name', 'email', 'state_id']);
        $stateRegister = State::find($data['state_id']);

        if (!$stateRegister) {
            return redirect('/');
        }

        $user = auth()->user();
        $user->update($data);

        return redirect()->route('my_account');
    }
}
