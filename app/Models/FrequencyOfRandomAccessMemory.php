<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrequencyOfRandomAccessMemory extends Model
{
    use HasFactory;

    protected $fillable = [
        'base_frequency',
    ];

    public function randomAccessMemory() {
        return $this->hasMany(RandomAccessMemory::class, 'frequency_id');
    }
}
