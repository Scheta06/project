<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FrequencyOfRandomAccessMemory extends Model
{
    protected $fillable = [
        'title',
        'base_frequency',
        'max_frequency',
    ];

    protected $hidden = [];

    public function processor() {
        return $this->hasMany(Processor::class, 'frequency_of_processor_id');
    }
}
