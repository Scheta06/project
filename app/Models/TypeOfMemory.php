<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeOfMemory extends Model
{
    protected $fillable = [
        'id',
        'title',
    ];

    protected $guarded = [
        
    ];

    public function motherboard() {
        return $this->hasMany(Motherboard::class, 'type_of_memory_id');
    }

    public function randomAccessMemory() {
        return $this->hasMany(RandomAccessMemory::class, 'type_of_memory_id');
    }

    public function videocard() {
        return $this->hasMany(Videocard::class, 'type_of_memory_id');
    }
}
