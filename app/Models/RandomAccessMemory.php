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
        return $this->belogsTo(MemoryCapacity::class);
    }

    public function frequencyOfRandomAccessMemory() {
        return $this->belogsTo(FrequencyOfRandomAccessMemory::class);
    }

    public function typeOfRandomAccessMemory() {
        return $this->belogsTo(TypeOfMemory::class);
    }

    public function vendor() {
        return $this->belogsTo(Vendor::class);
    }
}
