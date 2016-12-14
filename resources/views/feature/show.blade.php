@extends('layouts.app')

@section('title','Show Feature')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" align="center">
                        <strong>{{ $feature->name }}
                            <a class="pull-right" href="{{ url('feature', $feature->id) . '/edit' }}">
                                <span class="glyphicon glyphicon-edit" title="edit"></span>
                            </a>
                        </strong></div>

                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <td><span class="vote-up-off"> </span>
                                    <span class="vote-down-off"></span>

                                </td>
                                <td>
                                    <table class="table">

                                        <tr>
                                            <td>Description</td>
                                            <td>{{ $feature->description }}</td>
                                        </tr>
                                        <tr>
                                            <td>Updated</td>
                                            <td>{{ $feature->updated_at->diffForHumans() }}</td>
                                        </tr>

                                        <tr>
                                            <td>Completed</td>
                                            <td><input type="checkbox" {{ $feature->active ? 'checked' : '' }} title="">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Vote</td>
                                            <td>
                                                <span id="votes">{{ $feature->votes }}</span>
                                                <input type="hidden" id="id" value="{{ $feature->id }}">

                                            </td>
                                        </tr>

                                    </table>
                                </td>
                        </table>

                    </div>
                </div>
            </div>


        </div>

    </div>
@endsection
