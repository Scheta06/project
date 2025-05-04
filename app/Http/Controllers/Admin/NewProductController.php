<?php

namespace App\Http\Controllers\Admin;

use App\Models\Processor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewProductController extends Controller
{
    protected $typeOfComponents = [
        'processors'           => 'Процессоры',
        'motherboards'         => 'Материнские платы',
        'coolers'              => 'Кулеры',
        'storages'             => 'Хранилища',
        'random_access_memory' => 'Оперативная память',
        'videocards'           => 'Видеокарты',
        'psu'                  => 'Блоки питания',
        'cases'                => 'Корпусы',
    ];

    public function index() {
        return view('admin.create', ['typeOfComponents' => $this->typeOfComponents]);
    }

    public function show() {
        return view();
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
