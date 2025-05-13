<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Configuration;

class Cooler extends Model
{
    protected $fillable = [
        'title',
        'description',
        'power',
        'min_performance',
        'max_performance',
        'vendor_id',
    ];

    protected $hidden = [
        'id'
    ];

    public function configuration() {
        return $this->hasMany(Configuration::class, 'cooler_id');
    }

    public function vendor() {
        return $this->belongsTo(Vendor::class);
    }
}
