@extends('layouts.app')

@section('title','Show Feature')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Show Feature</div>

                    <div class="panel-body">
                        
                        <table class="table">

                            <tr>
                                <th>Name</th><th>{{ $feature->name }}</th>
                            </tr>
                            <tr>
                                <td>Description</td><td>{{ $feature->description }}</td>
                            </tr>
                            <tr>
                                <td>Updated</td><td>{{ $feature->updated_at->diffForHumans() }}</td>
                            </tr>

                            <tr>
                                <td>Completed</td><td><input type="checkbox" {{ $feature->active ? 'checked' : '' }} title=""></td>
                            </tr>

                        </table>
                        
                    </div>
                </div>
            </div>

            <div class="col-md-2">
                <div class="vote">
                    <input type="hidden" name="_id_" value="41143856">
                    <a class="vote-up-off vote-up-on" title="This question shows research effort; it is useful and clear (click again to undo)">up vote</a>
                    <span itemprop="upvoteCount" class="vote-count-post " title="View upvote and downvote totals" style="cursor: pointer; opacity: 1;">3</span>
                    <a class="vote-down-off" title="This question does not show any research effort; it is unclear or not useful">down vote</a>

                    <a class="star-off" href="#" title="Click to mark as favorite question (click again to undo)">favorite</a>
                    <div class="favoritecount"><b></b></div>


                </div>
            </div>

        </div>
        
    </div>
@endsection
