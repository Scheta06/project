<?php

namespace App\Http\Controllers\Admin;

use App\Models\Processor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewProductController extends Controller
{
    protected $typeOfComponents = [
        'processor'           => 'Процессор',
        'motherboard'         => 'Материнская плата',
        'cooler'              => 'Кулер',
        'storage'             => 'Хранилище',
        'random_access_memory' => 'Оперативная память',
        'videocard'           => 'Видеокарта',
        'psu'                  => 'Блок питания',
        'case'                => 'Корпус',
    ];

    public function index() {
        return view('admin.create', ['typeOfComponents' => $this->typeOfComponents]);
    }

    public function show() {
        return view('admin.show');
    }

    public function create(Request $request, $type) {
        $data = [];
        switch($type) {
            case 'processors':
                $data = $request->validate([
                    'title',
                    'description',
                    
                ]);
                Processor::create($data);
                break;
        }
    }
}
