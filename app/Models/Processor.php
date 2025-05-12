<?php

namespace App\Models;

use App\Models\Configuration;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Processor extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'base_frequency',
        'max_frequency',
        'count_of_cores',
        'count_of_streams',
        'tdp',
        'socket_id',
        'vendor_id',
        'processor_generation_id',
    ];

    protected $guarded = [
        'id',
    ];

    public function configuration()
    {
        return $this->hasMany(Configuration::class, 'processor_id');
    }

    public function socket()
    {
        return $this->belongsTo(Socket::class);
    }

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

    public function processorGeneration()
    {
        return $this->belongsTo(ProcessorGeneration::class);
    }
}
