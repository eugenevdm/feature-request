<?php

namespace App\Repositories;

use App\Feature;

class FeatureRepository
{

    public function increaseVotes(Feature $feature) {
        $feature->votes++;
        $feature->save();
        return $feature->votes;
    }

    public function decreaseVotes(Feature $feature) {
        $feature->votes--;
        $feature->save();
        return $feature->votes;
    }

}
