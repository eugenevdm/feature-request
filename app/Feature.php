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

    public function getPopularAttribute() {
        if ($this->votes > 5) return true;
    }

//    public function increaseVotes() {
//        $this->votes++;
//        $this->save();
//        return $this->votes;
//    }
//
//    public function decreaseVotes() {
//        $this->votes--;
//        $this->save();
//        return $this->votes;
//    }

}
