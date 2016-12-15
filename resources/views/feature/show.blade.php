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
                                <td align="right"><strong>Description</strong></td>
                                <td colspan="2">{{ $feature->description }}</td>
                            </tr>
                            <tr>
                                <td align="right"><strong>Updated</strong></td>
                                <td>{{ $feature->updated_at->diffForHumans() }}</td>
                            </tr>

                            <tr>
                                <td align="right"><strong>Completed</strong></td>
                                <td colspan="2">
                                    <input type="checkbox" {{ $feature->active ? 'checked' : '' }} title="">
                                </td>
                            </tr>

                            <tr>
                                <td align="right"><strong>Votes</strong></td>
                                <td>
                                    <span id="votes">{{ $feature->votes ?? 'No votes yet!' }}</span>
                                    <input type="hidden" id="id" value="{{ $feature->id }}">

                                </td>

                                <td>
                                    <span class="vote-up-off"></span>
                                    <span class="vote-down-off"></span>
                                </td>

                            </tr>

                        </table>

                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
