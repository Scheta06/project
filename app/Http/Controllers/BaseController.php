<?php

namespace App\Http\Controllers;

use App\Models\Casing;
use App\Models\Cooler;
use App\Models\Storage;
use App\Models\Processor;
use App\Models\Videocard;
use App\Models\Motherboard;
use App\Models\PowerSupply;
use App\Models\RandomAccessMemory;

abstract class BaseController
{
    protected $processorsData;
    protected $motherboardsData;
    protected $coolersData;
    protected $storageData;
    protected $ramData;
    protected $videocardsData;
    protected $psuData;
    protected $casesData;

    public function __construct()
    {
        $this->processorsData   = Processor::with(['processorGeneration', 'vendor', 'socket']);
        $this->motherboardsData = Motherboard::with(['configuration', 'socket', 'chipset', 'formFactor', 'expressVersion', 'typeOfMemory', 'vendor']);
        $this->coolersData      = Cooler::with(['configuration', 'vendor']);
        $this->storageData      = Storage::with(['sizeOfStorage', 'vendor']);
        $this->ramData          = RandomAccessMemory::with(['configuration', 'frequencyOfRandomAccessMemory', 'typeOfRandomAccessMemory', 'vendor']);
        $this->videocardsData   = Videocard::with(['configuration', 'microarchitecture', 'expressVersion', 'sizeOfVideoсard', 'typeOfMemory', 'vendor']);
        $this->psuData          = PowerSupply::with(['configuration', 'formFactor', 'vendor']);
        $this->casesData        = Casing::with(['configuration', 'formFactor', 'vendor']);
    }
}
