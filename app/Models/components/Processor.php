<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Processor extends Model
{
    protected $fillable = [
        'id',
        'title',
        'description',
        'count_of_cores',
        'count_of_streams',
        'tdp',
        
    ];

    protected $guarded = [
        'socket_id',
        'frequency_of_processor_id',
        'vendor_id',
    ];

    public function configurations() {
        return $this->hasMany(Configurations::class, 'processor_id');
    }

    public function socket() {
        return $this->belongsTo(Socket::class);
    }

    public function frequencyOfProccessor() {
        return $this->belongsTo(FrequencyOfProccessor::class);
    }

    public function vendor() {
        return $this->belongsTo(Vendor::class);
    }
}
