<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Configuration;

class Casing extends Model
{
    protected $fillable = [
        'title',
        'description',
        'form_id',
        'vendor_id',
    ];

    protected $hidden = [
        'id'
    ];

    public function configuration() {
        return $this->hasMany(Configuration::class, 'case_id');
    }

    public function formFactors() {
        return $this->belongsTo(FormFactor::class);
    }

    public function vendor() {
        return $this->belongsTo(Vendor::class);
    }
}
