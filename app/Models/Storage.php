<?php

namespace App\Models;

use App\Models\Configuration;
use App\Models\MemoryCapacity;
use Illuminate\Database\Eloquent\Model;

class Storage extends Model
{
    protected $fillable = [
        'title',
        'description',
        'reading_rate',
        'recording_rate',
        'max_resource',
        'memory_capacity_id',
        'vendor_id',
    ];

    protected $hidden = [
        'id',
    ];

    public function configuration()
    {
        return $this->hasMany(Configuration::class, 'storage_id');
    }

    public function memoryCapacity()
    {
        return $this->belongsTo(MemoryCapacity::class, 'memory_capacity_id');
    }

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }
}
