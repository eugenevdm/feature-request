<?php

namespace App\Http\Controllers;

use App\Feature;

class VotingController extends Controller
{

    public function upvote($id) {
        return Feature::find($id)->increaseVotes();
    }

    public function downvote($id) {
        return Feature::find($id)->decreaseVotes();
    }
}
