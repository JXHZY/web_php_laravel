@extends('layouts.app')

@section('header')
<link rel="stylesheet" href="/css/app.css">
@endsection

@section('content')
<div class="container">
    <!-- @if(Session::has('status'))
        <h3>{{Session::get('status')}}</h3>
    @endif -->
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
           @include('flash')
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
