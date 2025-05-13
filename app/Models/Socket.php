<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Processor;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Socket extends Model
{
    use HasFactory;

    protected $fillable = [
        'title'
    ];

    protected $hidden = [
        'id'
    ];


    public function proccessor() {
        return $this->hasMany(Processor::class, 'socket_id');
    }

    public function motherboard() {
        return $this->hasMany(Motherboard::class, 'socket_id');
    }
}
