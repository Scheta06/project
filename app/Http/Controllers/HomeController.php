<?php

namespace App\Http\Controllers;

use App\Models\Processor;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends BaseController
{
    public function index()
    {
        $userData = Auth::user();

        $typeOfComponents = config('constants.typeOfComponents');

        return view('index', compact('userData', 'typeOfComponents'));
    }
}
