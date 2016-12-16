<?php

namespace App\Http\Controllers;

use Log;
use App\Feature;
use App\Events\PopularFeature;
use App\Repositories\FeatureRepository;
use Illuminate\Notifications\Notifiable;

class VoteController extends Controller
{

    protected $feature;

    use Notifiable;

    public function __construct(FeatureRepository $feature)
    {
//        $this->middleware('auth');
        $this->feature = $feature;
    }

    public function routeNotificationForNexmo()
    {
        return "27823096710";
    }

    public function upvote(Feature $feature) {
        $feature->votes++;
        $feature->save();
        if ($feature->popular) event(new PopularFeature($feature));
//        if ($feature->popular) $this->notify(new \App\Notifications\PopularFeature($feature));
//        if ($feature->popular && $feature->management_notified) event(new PopularFeature($feature));
        return $feature->votes;
    }

    public function downvote(Feature $feature) {
        $feature->votes--;
        $feature->save();
        return $feature->votes;
    }
}
