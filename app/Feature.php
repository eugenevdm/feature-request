<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    protected $fillable = [
        'name',
        'description',
        'url',
        'active',
    ];

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }

    public function scopeLatest($query)
    {
        return $query->orderBy('active', 'desc')->orderBy('updated_at','desc');
    }

}
