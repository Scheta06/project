<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Motherboard;
use App\Models\Processor;
use Illuminate\Http\Request;

class NewProductController extends Controller
{
    protected $typeOfComponents = [

        'processor'   => 'Процессор',
        'motherboard' => 'Материнская плата',
        'cooler'      => 'Кулер',
        'storage'     => 'Хранилище',
        'ram'         => 'Оперативная память',
        'videocard'   => 'Видеокарта',
        'psu'         => 'Блок питания',
        'case'        => 'Корпус',
    ];

    public function index()
    {
        return view('admin.createProduct.index', ['typeOfComponents' => $this->typeOfComponents]);
    }


    public function show($type)
    {
        return view('admin.createProduct.show', compact('type'));
    }
    
    public function create(Request $request, $type)
    {
        $data = null;

        switch ($type) {
            case 'processor':
                $data = $request->validate([
                    'title' => 'required|string|min:8',
                ]);
                Processor::create($data);
                break;
            case 'motherboard':
                $data = $request->validate([
                    'title',
                ]);
                Motherboard::create($data);
                break;
        }
    }
}
