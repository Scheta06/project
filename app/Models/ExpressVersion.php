<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpressVersion extends Model
{
    use HasFactory;

    protected $fillable = [
        'title'
    ];

    protected $guarded = [

    ];

    public function videocard() {
        return $this->hasMany(Videocard::class, 'express_version_id');
    }

    public function motherboard() {
        return $this->hasMany(Motherboard::class, 'express_version_id');
    }
}
