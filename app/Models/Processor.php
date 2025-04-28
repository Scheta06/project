<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Configuration;

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
    ];

    protected $guarded = [
        'id',
        'socket_id',
        'vendor_id',
    ];

    public function configurations() {
        return $this->hasMany(Configuration::class, 'processor_id');
    }

    public function socket() {
        return $this->belongsTo(Socket::class);
    }

    public function vendor() {
        return $this->belongsTo(Vendor::class);
    }

    public function processorGeneration() {
        return $this->belongsTo(ProcessorGeneration::class);
    }
}
