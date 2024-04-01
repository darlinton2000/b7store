<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use App\Models\State;
use Illuminate\Support\Facades\Auth;

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
        $user = auth()->user();
        $user->update($data);

        return redirect()->route('my_account')->with('success', 'Perfil atualizado com sucesso');
    }

    public function my_ads()
    {
        $user = Auth::user();

        $advertises = $user->advertises;

        return view('dashboard.my_ads', compact('advertises'));
    }
}
