@extends('todo.header')

@include('todo.navbar',['logined'=>false])

@section('main_content')

	<div class="container">
		
		<div class="home-content">
        	<h1>To Do</h1>
        	<p class="lead">Never forget another task. Ever.</p>
		</div>
			{!! Form::open(['url'=>'login']) !!}
			@include('errors.listerrors')
			<div class="form-group row tm5">
				<div class="col-xs-2 col-md-offset-4">
					{!! Form::label('User name','User name: ') !!}
				</div>
				<div class="col-xs-6">
					{!! Form::email('userName') !!}
				</div>
			</div>

			<div class="form-group row tm5">
				<div class="col-xs-2 col-md-offset-4">
					{!! Form::label('password','Password: ') !!}
				</div>
				<div class="col-xs-6">
					{!! Form::password('password') !!}
				</div>
			</div>

			<div class="row tm5">
                <div class="col-xs-2 col-md-offset-6">
                    {!! Form::submit('Login') !!}                       
                    <a href="{{ url('register') }}">Register</a>
                </div>
            </div>
			{!! Form::close() !!}
	</div>

@stop