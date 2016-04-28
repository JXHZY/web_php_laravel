@extends('todo.header')

@include('todo.navbar',['logined'=>true])

@section('main_content') 

        <div class="container">
            {!! Form::open(['url'=>'home']) !!}
                <div class="row" style="margin-top:20px">
                    <div class="col-xs-12">
                        <h4>Update Task</h4>
                    </div>                
                </div>
                <div class="clearfix" />
                <div class="row">
                    <div class="col-xs-2">
                        {!! Form::label(null,'Description') !!}
                    </div>
                    <div class="col-xs-10">
                        {!! Form::hidden('id',$todo[0]['id']) !!}
                        {!! Form::text('description',$todo[0]['description'],['size'=>100]) !!}
                    </div>
                </div>
                <div class="clearfix"/>
                <div class="row" style="margin-top:5px">
                    <div class="col-xs-2">
                        {!! Form::label(null,'Status') !!}
                    </div>
                    <div class="col-xs-10">
                        {!! Form::select('status',['Not Started','Started','Mid-Way','Completed'],null,['N','S','M','C']) !!}
                        {!! Form::submit('Update',['name'=>'action']) !!}
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
@stop