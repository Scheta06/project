<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExpressVersion extends Model
{
    protected $fillable = [
        'title'
    ];

    protected $guarded = [

    ];

    public function videocard() {
        return $this->hasMany(Videocard::class, 'express_version_id');
    }
}
