@extends('layouts.app')

@section('title','All Features')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">List of all feature requests</div>

                    <div class="panel-body">

                        <table class="table">

                            <tr>
                                <th>Feature</th>
                                <th>Tags</th>
                                <th>Updated</th>
                            </tr>

                            @foreach($features as $feature)
                                <tr>
                                    <td>
                                        @if (!$feature->active)<strike>@endif
                                        <a href="{{ url('feature', $feature->id) . '/edit'}}">{{ $feature->name }}</a>
                                            @if ($feature->active)<strike>@endif
                                    </td>
                                    <td>
                                        @foreach($feature->tags as $tag)
                                            <span class="label label-default {{ $tag->name }}">{{ $tag->name }}</span>
                                        @endforeach
                                    </td>
                                    <td>
                                        {{ $feature->updated_at->diffForHumans() }}
                                    </td>
                                    {{--<td>{{ $feature->tags() }}</td>--}}
                                </tr>
                            @endforeach

                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
