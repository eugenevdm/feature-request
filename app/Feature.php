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
        return $query->orderBy('votes')->orderBy('active', 'desc')->orderBy('updated_at','desc');
    }

    public function increaseVotes() {
        $this->votes++;
        $this->save();
        return $this->votes;
    }

    public function decreaseVotes() {
        $this->votes--;
        $this->save();
        return $this->votes;
    }

}
