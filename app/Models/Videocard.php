<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Configuration;

class Videocard extends Model
{
    protected $fillable = [

        'title',
        'description',
        'max_frequency',
        'microarchitecture_id',
        'express_version_id',
        'size_of_memory_id',
        'type_of_memory',
        'vendor_id',
    ];

    protected $hidden = [
        'id',
    ];

    public function configuration() {
        return $this->hasMany(Configuration::class, 'videocard_id');
    }

    public function microarchitecture() {
        return $this->belongsTo(Microarchitecture::class);
    }

    public function expressVersion() {
        return $this->belongsTo(ExpressVersion::class);
    }

    public function memoryCapacity() {
        return $this->belongsTo(MemoryCapacity::class);
    }

    public function typeOfMemory() {
        return $this->belongsTo(TypeOfMemory::class);
    }

    public function vendor() {
        return $this->belongsTo(Vendor::class);
    }
}
