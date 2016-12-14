@extends('layouts.app')

@section('title','Edit feature')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit feature request</div>
                    <div class="panel-body">

                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/feature', $feature->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('put') }}
                            @include('feature._partials.form')
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
