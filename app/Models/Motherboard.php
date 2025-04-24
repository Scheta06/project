<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Configuration;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Motherboard extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
    ];

    protected $guarded = [
        'socket_id',
        'chipset_id',
        'form_id',
        'express_version_id',
        'type_of_memory_id',
        'vendor_id',
    ];

    public function configuration() {
        return $this->hasMany(Configuration::class, 'motherboard_id');
    }

    public function socket() {
        return $this->belongsTo(Socket::class);
    }

    public function chipset() {
        return $this->belongsTo(Chipset::class);
    }

    public function formFactor() {
        return $this->belongsTo(FormFactor::class);
    }

    public function expressVersion() {
        return $this->belongsTo(ExpressVersion::class);
    }

    public function typeOfMemory() {
        return $this->belongsTo(TypeOfMemory::class);
    }

    public function vendor() {
        return $this->belongsTo(Vendor::class);
    }
}
