<?php

namespace App\Http\Controllers;

use App\Feature;

class FeaturesController extends Controller
{
    public function index() {
        $features = Feature::latest()->get();
        return view('features.index', compact('features'));
    }
}
