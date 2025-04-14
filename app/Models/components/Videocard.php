<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Videocard extends Model
{
    protected $fillable = [
        'id',
        'title',
        'description',
        'max_frequency',
    ];

    protected $hidden = [
        'microarchitecture_id',
        'express_version_id',
        'size_of_memory_id',
        'type_of_memory',
        'vendor_id',
    ];

    public function configuration() {
        return $this->hasMany(Configuration::class, 'videocard_id');
    }

    public function microarchitecture() {
        return $this->belogsTo(Microarchitecture::class);
    }

    public function expressVersion() {
        return $this->belongsTo(ExpressVersion::class);
    }

    public function sizeOfVideoсard() {
        return $this->belongsTo(SizeOfVideoсard::class);
    }

    public function typeOfMemory() {
        return $this->belongsTo(TypeOfMemory::class);
    }

    public function vendor() {
        return $this->belogsTo(Vendor::class);
    }
}
