@extends('todo.header')

@include('todo.navbar',['logined'=>true])

@section('main_content')

<div class="container">
    <div class="home-content">
        <h1>Create a To Do Account</h1>
        <p class="lead">Nerver forget another task. Ever.</p>
    </div>
    {!! Form::open(['url'=>'register']) !!}
        @include('errors.listerrors')
        <div class="row tm5">
            <div class="col-xs-2 col-md-offset-4">
                {!! Form::label('firstName','First Name:') !!}
                <br/>
            </div>
            <div class="col-xs-2">
                {!! Form::text('firstName') !!}
            </div>
        </div>
        <div class="row tm5">
            <div class="col-xs-2 col-md-offset-4">
                {!! Form::label('lastName','Last Name:') !!}
                <br/>
            </div>
            <div class="col-xs-2">
                {!! Form::text('lastName') !!}
            </div>
        </div>
        <div class="row tm5">
            <div class="col-xs-2 col-md-offset-4">
                {!! Form::label('email','User Name:') !!}
                <br/>
            </div>
            <div class="col-xs-2">
                {!! Form::text('email') !!}
            </div>
        </div>
        <div class="row tm5">
            <div class="col-xs-2 col-md-offset-4">
                {!! Form::label('password','Password:') !!}
                <br/>
            </div>
            <div class="col-xs-2">
                {!! Form::text('password') !!}
            </div>
        </div>
        <div class="row tm5">
            <div class="col-xs-2 col-md-offset-6">
                {!! Form::submit('Register') !!}
            </div>
        </div>
    {!! Form::close() !!}
</div>

@stop