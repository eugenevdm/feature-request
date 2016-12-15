<?php

namespace App\Http\Controllers;

use App\Feature;
use App\Tag;

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
        $tags = Tag::orderBy('name')->pluck('name','id');
        //dd($tags);
//        dd ($feature->tags->pluck('id')->toArray());
//        dd($feature->tags->pluck('name','id'));
        $button = "Update";
        return view('feature.edit', compact('feature', 'tags', 'button'));
    }

    public function update(Feature $feature) {
        $input = request()->input();
        $feature = Feature::find($feature->id);
        $feature->update($input);
//        dd($input);
        $feature->tags()->sync($input['tag_list']);
        return redirect('feature');
    }

    public function index() {
        $features = Feature::latest()->get();
        return view('feature.index', compact('features'));
    }

}
