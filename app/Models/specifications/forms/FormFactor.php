<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormFactor extends Model
{
    protected $fillable = [
        'title',
        'type'
    ];

    public function casing() {
        return $this->hasMany(Casing::class, 'form_factor_id');
    }

    public function motherboard() {
        return $this->hasMany(Motherboard::class, 'form_factor_id');
    }

    public function powerSupply() {
        return $this->hasMany(PowerSupply::class, 'form_factor_id');
    }
}
