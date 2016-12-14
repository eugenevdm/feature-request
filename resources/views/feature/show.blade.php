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
                                <td></td><th>Name</th><th>{{ $feature->name }}</th>
                            </tr>
                            <tr>
                                <td></td><td>Description</td><td>{{ $feature->description }}</td>
                            </tr>
                            <tr>
                                <td></td><td>Updated</td><td>{{ $feature->updated_at->diffForHumans() }}</td>
                            </tr>

                            <tr>
                                <td></td><td>Completed</td><td><input type="checkbox" {{ $feature->active ? 'checked' : '' }} title=""></td>
                            </tr>

                        </table>

                        <div class="col-md-2">

                            <span class="vote-up-off"> </span>
                            <span class="vote-down-off"></span>

                        </div>
                        
                    </div>
                </div>
            </div>



        </div>
        
    </div>
@endsection
