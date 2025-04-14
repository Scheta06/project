<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Socket extends Model
{
    protected $fillable = [
        'id',
        'title'
    ];

    protected $guarded = [];

    public function proccessor() {
        return $this->hasMany(Proccessor::class, 'socket_id');
    }

    public function motherboard() {
        return $this->hasMany(Motherboard::class, 'socket_id');
    }
}
