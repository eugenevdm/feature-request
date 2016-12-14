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
                                <td>Completed</td><td><input type="checkbox"></td>
                            </tr>

                        </table>

                        {{--<example></example>--}}
                        {{--<example></example>--}}

                        {{--<div id="example-1">--}}
                            {{--<button v-on:click="counter += 1">Add 1</button>--}}
                            {{--<p>The button above has been clicked @{{ counter }} times.</p>--}}
                        {{--</div>--}}

                        {{--<div id="example">--}}
                            {{--@{{ message }}--}}
                        {{--</div>--}}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
