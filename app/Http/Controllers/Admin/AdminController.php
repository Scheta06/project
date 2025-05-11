<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BaseController;

class AdminController extends BaseController
{
    public function index() {
        $userData = Auth::user();

        return view('admin.index', compact('userData'));
    }
}
