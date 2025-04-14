<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SizeOfRandomAccessMemory extends Model
{
    protected $fillable = [
        'size',
    ];

    protected $hidden = [];

    public function randomAccessMemory() {
        return $this->hasMany(RandomAccessMemory::class, 'size_of_memory_id');
    }
}
