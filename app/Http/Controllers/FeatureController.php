<?php

namespace App\Http\Controllers;

use App\Feature;

class FeatureController extends Controller
{
    public function create() {
        $url = request('url');
        $button = "Create";
        return view('feature.create', compact('button', 'url'));
    }

    public function store() {
        $feature = Feature::create(request()->input());
        $feature->tags()->attach([1, 2, 3]);
        return redirect('/features');
    }

    public function show(Feature $feature) {
        return view('feature.show', compact('feature'));
    }

    public function edit(Feature $feature) {
        $button = "Update";
        return view('feature.edit', compact('feature', 'button'));
    }

    public function update(Feature $feature) {
        $input = request()->input();
        $feature = Feature::find($feature->id);
        $feature->update($input);
        return redirect('features');
    }

}
