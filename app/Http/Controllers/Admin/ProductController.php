<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;

class ProductController extends BaseController
{
    public function index() {
        return view('admin.allProduct.index');
    }
}
