<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CatalogController extends Controller
{
    public function index () {
        $userData = Auth::user();

        return view('catalog', compact('userData'));
    }
}
