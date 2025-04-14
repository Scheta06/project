<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
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
