<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BaseController;

class ProfileController extends BaseController
{
    public function index() {
        $userData = Auth::user();
        return view('auth.profile', compact('userData'));
    }

    public function update(Request $request) {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users' . Auth::id(),
        ]);

        $user = Auth::user();

        $user->update($data);

        return redirect()->route('login');
    }
}
