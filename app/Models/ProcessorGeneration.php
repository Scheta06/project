<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProcessorGeneration extends Model
{
    protected $fillable =[
        'title',
        'type'
    ];

    public function processor() {
        return $this->hasMany(Processor::class, 'processor_generation_id');
    }
}
