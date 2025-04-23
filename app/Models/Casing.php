<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Configuration;

class Casing extends Model
{
    protected $fillable = [
        'title',
        'description',
    ];

    protected $guarded = [
        'form_factor_id',
        'vendor_id',
    ];

    public function configuration() {
        return $this->hasMany(Configuration::class, 'case_id');
    }

    public function formFactor() {
        return $this->belongsTo(FormFactor::class);
    }

    public function vendor() {
        return $this->belongsTo(Vendor::class);
    }
}
