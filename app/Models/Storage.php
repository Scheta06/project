<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\components\Configuration;

class Storage extends Model
{
    protected $fillable = [
        'id',
        'title',
        'description',
        'reading_rate',
        'recording_rate',
        'max_resource',
    ];

    protected $hidden = [];

    protected $guarded = [
        'size_id',
        'vendor_id',
    ];


    public function memoryCapacity() {
        return $this->belogsTo(MemoryCapacity::class);
    }

    public function vendor() {
        return $this->belongsTo(Vendor::class);
    }
}
