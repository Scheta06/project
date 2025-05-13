<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeOfMemory extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
    ];

    protected $hidden = [
        'id'
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
