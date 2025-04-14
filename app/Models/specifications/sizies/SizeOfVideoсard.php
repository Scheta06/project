<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SizeOfVideoсard extends Model
{
    protected $fillable = [
        'size',
    ];

    protected $hidden = [];

    public function videocard() {
        return $this->hasMany(Videocard::class, 'size_of_memory_id');
    }
}
