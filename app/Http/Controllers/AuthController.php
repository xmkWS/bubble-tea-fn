<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registerPage() {

        return view('pages.registerPage');

    }

    public function loginPage() {

        return view('pages.loginPage');

    }

    public function register(RegisterRequest $registerRequest) {

        $data = $registerRequest->validated();

        // Если пароль автоматически не хэшируется пропишите это:
        // $data['password'] = Hash::make($data['password']);

        $user = User::query()->create($data);

        auth()->login($user);

        return redirect()->route('index.index');


    }

    public function login(LoginRequest $loginRequest) {

        $data = $loginRequest->validated();

        if(!auth()->attempt($data)) {

            return back()->withInput()->withErrors(['invalid_credentials' => 'Неверный пароль']);

        }

        return redirect()->route('index.index');

    }

    public function logout() {

        auth()->logout();

        return redirect()->route('auth.loginPage');

    }

}