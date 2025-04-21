<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index () {
        $userData = Auth::user();

        return view('catalog', compact('userData'));
    }
}
