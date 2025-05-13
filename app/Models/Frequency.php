<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Frequency extends Model
{
    protected $fillable = [
        'title'
    ];

    public function randomAccessMemory() {
        return $this->hasMany(RandomAccessMemory::class, 'frequency_id');
    }
}
