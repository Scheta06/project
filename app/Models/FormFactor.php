<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormFactor extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'type',
    ];

    public function casing() {
        return $this->hasMany(Casing::class, 'form_id');
    }

    public function motherboard() {
        return $this->hasMany(Motherboard::class, 'form_id');
    }

    public function powerSupply() {
        return $this->hasMany(PowerSupply::class, 'form_id');
    }
}
