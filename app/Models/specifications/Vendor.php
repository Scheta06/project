<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $fillable = [
        'title',
        'description'
    ];

    protected $guarded = [
        
    ];

    public function processor() {
        return $this->hasMany(Proccessor::class, 'vendor_id');
    }

    public function motherboard() {
        return $this->hasMany(Motherboard::class, 'vendor_id');
    }

    public function randomAccessMemory() {
        return $this->hasMany(RandomAccessMemory::class, 'vendor_id');
    }

    public function cooler() {
        return $this->hasMany(Cooler::class, 'vendor_id');
    }

    public function storage() {
        return $this->hasMany(Storage::class, 'vendor_id');
    }

    public function videocard() {
        return $this->hasMany(Videocard::class, 'vendor_id');
    }

    public function powerSupply() {
        return $this->hasMany(PowerSupply::class, 'vendor_id');
    }

    public function casing() {
        return $this->hasMany(Casing::class, 'vendor_id');
    }
}
