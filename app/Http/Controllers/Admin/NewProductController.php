<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Motherboard;
use App\Models\Processor;
use Illuminate\Http\Request;

class NewProductController extends Controller
{
    protected $typeOfComponents = [
<<<<<<< HEAD
        'processor'   => 'Процессор',
        'motherboard' => 'Материнская плата',
        'cooler'      => 'Кулер',
        'storage'     => 'Хранилище',
        'ram'         => 'Оперативная память',
        'videocard'   => 'Видеокарта',
        'psu'         => 'Блок питания',
        'case'        => 'Корпус',
=======
        'processor'           => 'Процессор',
        'motherboard'         => 'Материнская плата',
        'cooler'              => 'Кулер',
        'storage'             => 'Хранилище',
        'random_access_memory' => 'Оперативная память',
        'videocard'           => 'Видеокарта',
        'psu'                  => 'Блок питания',
        'case'                => 'Корпус',
>>>>>>> 315da151fefd2ad9d4339cad06aa219d5ba498c4
    ];

    public function index()
    {
        return view('admin.createProduct.index', ['typeOfComponents' => $this->typeOfComponents]);
    }

<<<<<<< HEAD
    public function show($type)
    {
        return view('admin.createProduct.show', [
            'type' => $type,
        ]);
=======
    public function show() {
        return view('admin.show');
>>>>>>> 315da151fefd2ad9d4339cad06aa219d5ba498c4
    }

    public function create(Request $request, $type)
    {
        $data = null;

        switch ($type) {
            case 'processor':
                $data = $request->validate([
                    'title',
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
