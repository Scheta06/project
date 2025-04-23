<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Processor;

class Socket extends Model
{
    protected $fillable = [
        'id',
        'title'
    ];

    protected $guarded = [];

    public function proccessor() {
        return $this->hasMany(Processor::class, 'socket_id');
    }

    public function motherboard() {
        return $this->hasMany(Motherboard::class, 'socket_id');
    }
}
