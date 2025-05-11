<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BaseController;

class LoginController extends BaseController
{
    public function index () {
        return view('auth.login');
    }

    public function login(Request $request) {
        $data = $request->validate([
            'name' => 'string|required',
            'password' => 'string|required|min:8'
        ]);

        if(Auth::attempt($data)) {
            return redirect()->route('index');
        }

        return back()->withErrors([
            'name' => 'Неверные учетные данные'
        ]);
    }

    public function logout (Request $request) {
        Auth::logout();

        return redirect()->route ('index');
    }
}
