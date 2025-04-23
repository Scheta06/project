<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Microarchitecture extends Model
{
    protected $fillable = [
        'title',
        'description'
    ];

    protected $guarded = [
        
    ];

    public function videocard() {
        return $this->hasMany(Videocard::class, 'microarchitecture_id');
    }
}
