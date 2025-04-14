<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FrequencyOfProccessor extends Model
{
    protected $fillable = [
        'title',
        'base_frequency',
        'turbo_frequency',
    ];

    protected $hidden = [];

    public function processor() {
        return $this->hasMany(Processor::class, 'frequency_of_processor_id');
    }
}
