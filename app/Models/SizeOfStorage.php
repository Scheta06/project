<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SizeOfStorage extends Model
{
    protected $fillable = [
        'size',
    ];

    protected $hidden = [];

    public function storage() {
        return $this->hasMany(Storage::class, 'size_of_memory_id');
    }
}
