<?php

namespace App\Http\Controllers\Components;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProcessorController extends Controller
{
    public function index() {
        $userData = Auth::user();

        return view('layouts.components', compact('userData'));
    }
}
