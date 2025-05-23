<?php

namespace App\Models;

use App\Models\Configuration;
use Illuminate\Database\Eloquent\Model;

class PowerSupply extends Model
{
    protected $fillable = [
        'title',
        'description',
        'power',
        'form_factor_id',
        'vendor_id',
    ];

    protected $hidden = [
        'id'
    ];

    public function configuration()
    {
        return $this->hasMany(Configuration::class, 'motherboard_id');
    }

    public function formFactor()
    {
        return $this->belongsTo(FormFactor::class);
    }

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }
}
