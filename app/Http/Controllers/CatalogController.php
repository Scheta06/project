<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class CatalogController extends BaseController
{
    protected $configData;

    public function __construct()
    {
        parent::__construct();
        $this->configData = config('constants.typeOfComponents');
    }

    public function index()
    {
        $userData = Auth::user();

        $typeOfComponents = $this->configData;

        return view('category', compact('userData', 'typeOfComponents'));
    }

    public function show($value)
    {
        $userData = Auth::user();

        $componentData = $this->configData[$value];

        $componentModel = [];

        $type = '';

        switch ($value) {
            case 'processors':
                $type           = 'processors';
                $componentModel = $this->processorsData->paginate(10);
                break;
            case 'motherboards':
                $type           = 'motherboards';
                $componentModel = $this->motherboardsData->paginate(10);
                break;
            case 'coolers':
                $type           = 'coolers';
                $componentModel = $this->coolersData->paginate(10);
                break;
            case 'storages':
                $type           = 'storages';
                $componentModel = $this->storageData->paginate(10);
                break;
            case 'random_access_memory':
                $type           = 'random_access_memory';
                $componentModel = $this->ramData->paginate(10);
                break;
            case 'videocards':
                $type           = 'videocards';
                $componentModel = $this->videocardsData->paginate(10);
                break;
            case 'psu':
                $type           = 'psu';
                $componentModel = $this->psuData->paginate(10);
                break;
            case 'cases':
                $type           = 'cases';
                $componentModel = $this->casesData->paginate(10);
                break;
            default:
                abort(404);
                break;
        }

        return view('all-products', compact('userData', 'componentData', 'componentModel', 'type'));
    }

    public function showProduct($type, $id)
    {
        $userData = Auth::user();

        $data = null;

        switch ($type) {
            case 'processors':
                $data = $this->processorsData->findOrFail($id);
                break;
            case 'motherboards':
                $data = $this->motherboardsData->findOrFail($id);
                break;
            case 'coolers':
                $data = $this->coolersData->findOrFail($id);
                break;
            case 'storages':
                $data = $this->storageData->findOrFail($id);
                break;
            case 'random_access_memory':
                $data = $this->ramData->findOrFail($id);
                break;
            case 'videocards':
                $data = $this->videocardsData->findOrFail($id);
                break;
            case 'psu':
                $data = $this->psuData->findOrFail($id);
                break;
            case 'cases':
                $data = $this->casesData->findOrFail($id);
                break;
        }

        return view('product-card', compact('userData', 'data', 'type'));
    }
}
