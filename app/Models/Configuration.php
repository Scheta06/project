<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Configuration extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'description',
    ];

    protected $guarded = [
        'processor_id',
        'motherboard_id',
        'cooler_id',
        'random_access_memory_id',
        'storage_id',
        'videocard_id',
        'power_supply_id',
        'case_id',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function proccessor() {
        return $this->belongsTo(Processor::class);
    }

    public function motherboard() {
        return $this->belongsTo(Motherboard::class);
    }

    public function randomAccessMemory() {
        return $this->belongsTo(RandomAccessMemory::class);
    }

    public function storage() {
        return $this->belongsTo(Storage::class);
    }

    public function cooler() {
        return $this->belongsTo(Cooler::class);
    }

    public function videocard() {
        return $this->belongsTo(Videocard::class);
    }

    public function powerSupply() {
        return $this->belongsTo(PowerSupply::class);
    }

    public function casing() {
        return $this->belongsTo(Casing::class);
    }
}
