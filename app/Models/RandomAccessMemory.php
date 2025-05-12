<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Configuration;

class RandomAccessMemory extends Model
{
    protected $fillable = [
        'title',
        'description',
        'count_of_modules',
    ];

    protected $guarded = [
        'size_id',
        'base_frequency_id',
        'type_of_memory',
        'vendor_id',
    ];

    public function configuration() {
        return $this->hasMany(Configuration::class, 'random_access_memory_id');
    }

    public function memoryCapacity() {
        return $this->belongsTo(MemoryCapacity::class);
    }

    public function frequency() {
        return $this->belongsTo(FrequencyOfRandomAccessMemory::class);
    }

    public function typeOfMemory() {
        return $this->belongsTo(TypeOfMemory::class);
    }

    public function vendor() {
        return $this->belongsTo(Vendor::class);
    }
}
