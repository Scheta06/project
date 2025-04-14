<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index () {
        return view('auth.register');
    }

    public function register(Request $request) {
        $data = $request->validate([
            'name' => 'string|max:255|required',
            'email' => 'string|email|max:255|unique:users|required',
            'password' => 'string|min:8|required'
        ]);

        $data['password'] = Hash::make($data['password']);

        User::create($data);

        return redirect()->route('login')->with('status', 'Регистрация прошла успешно');
    }
}
