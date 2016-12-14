@extends('layouts.app')

@section('title','Add feature')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add a new feature request</div>
                    <div class="panel-body">

                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/feature') }}">
                            {{ csrf_field() }}
                            @include('feature._partials.form')
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
