<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\SelectStateRequest;
use App\Models\State;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Exibe a view de registrar
     *
     * @return view
     */
    public function register()
    {
        return view('auth.register');
    }

    /**
     * Recebe o dados do formulário registrar, cria o usuário e redireciona para selecionar o estado
     *
     * @param RegisterRequest $request
     * @return void
     */
    public function register_action(RegisterRequest $request)
    {
        $userData = $request->only(['name', 'email', 'password']);
        $userData['password'] = Hash::make($userData['password']);
        $user = User::create($userData);

        Auth::loginUsingId($user->id);

        return redirect()->route('select-state');
    }

    /**
     * Exibe a view de selecionar o estado
     *
     * @return view
     */
    public function select_state()
    {
        $data['states'] = State::all();

        return view('auth.select-state', $data);
    }

    /**
     * Recebe os dados do formulário, salva o estado do usuário no BD e redireciona para a home
     *
     * @param SelectStateRequest $request
     * @return void
     */
    public function select_state_action(SelectStateRequest $request)
    {
        $data = $request->only(['state']);
        $stateRegister = State::find($data['state']);

        if (!$stateRegister) {
            return redirect('/login');
        }

        $user = Auth::user();
        $user->state_id = $stateRegister->id;
        $user->save();

        return redirect()->route('home');
    }

    /**
     * Recebe os dados o formulário, verifica se o usuário está autênticado e redireciona para a home
     *
     * @param LoginRequest $request
     * @return void
     */
    public function login_action(LoginRequest $request)
    {
        $loginData = $request->only(['email', 'password']);

        if (!Auth::attempt($loginData)) {
            $data['message'] = 'Usuário ou senha inválidos';
            $data['email'] = $loginData['email'];

            return view('auth.login', $data);
        }

        return redirect()->route('home');
    }

    /**
     * Desloga o usuário autênticado
     *
     * @return RedirectResponse
     */
    public function logout(): RedirectResponse
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
