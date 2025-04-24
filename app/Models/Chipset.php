<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chipset extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
    ];

    protected $guarded = [

    ];

    public function motherboard() {
        return $this->hasMany(Motherboard::class, 'chipset_id');
    }
}
