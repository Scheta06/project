<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MemoryCapacity extends Model
{
    protected $fillable = [
        'capacity'
    ];

    public function randomAccesMemory() {
        return $this->hasMany(RandomAccessMemory::class, 'memory_capacity_id');
    }

    public function storages() {
        return $this->hasMany(Storage1::class);
    }

    public function videocard() {
        return $this->hasMany(Videocard::class, 'memory_capacity_id');
    }
}
