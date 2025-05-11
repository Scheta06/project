<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;

class NewProductController extends BaseController
{
    protected $configData;

    public function __construct()
    {
        $this->configData = config('constants.typeOfComponents');
    }

    public function index()
    {
        return view('admin.createProduct.index', ['typeOfComponents' => $this->configData]);
    }

    public function show($type)
    {
        $ArrayOfData = config('constants.dataOfComponents');

        $data = $ArrayOfData[$type];

        return view('admin.createProduct.show', compact('type', 'data'));
    }

    public function create(Request $request, $type)
    {

    }
}
