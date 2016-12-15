<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('feature', 'FeatureController');

Route::get('upvote/{feature}', 'VoteController@upvote');
Route::get('downvote/{feature}', 'VoteController@downvote');
