<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function features() {
        return $this->belongsToMany(Feature::class);
    }
}
