<?php

namespace App\Models;

use App\Models\Configuration;
use App\Models\MemoryCapacity;
use Illuminate\Database\Eloquent\Model;

class Storage extends Model
{
    protected $fillable = [
        'id',
        'title',
        'description',
        'reading_rate',
        'recording_rate',
        'max_resource',
        'memory_capacity_id',
    ];

    protected $hidden = [];

    protected $guarded = [

        'vendor_id',
    ];

    public function configuration()
    {
        return $this->hasMany(Configuration::class, 'storage_id');
    }

    public function memoryCapacity()
    {
        return $this->belogsTo(MemoryCapacity::class, 'memory_capacity_id');
    }

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }
}
