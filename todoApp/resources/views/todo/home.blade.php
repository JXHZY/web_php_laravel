@extends('todo.header')

@include('todo.navbar',['logined'=>true])

@section('main_content')
<div class="container">
    {!! Form::open(['url'=>'home']) !!}
        <div class="row" style="margin-top:20px">
            <div class="col-xs-12">
                <h4>New Task</h4>
            </div>                
        </div>
        <div class="clearfix" />
        <div class="row">
            <div class="col-xs-2">
                {!! Form::label('Description') !!}
            </div>
            <div class="col-xs-10">
                {!! Form::text('description',null,['size'=>'100']) !!}
            </div>
        </div>
        <div class="clearfix" />
        <div class="row" style="margin-top: 5px">
            <div class="col-xs-2">
                {!! Form::label('Scheduled Date') !!}
            </div>
            <div class="col-xs-10">
                {!! Form::text('scheduledDate',null) !!}
                {!! Form::submit('Add',['name'=>'action']) !!}
             </div>
        </div>
        <div class="clearfix" />
        <div class="row">&nbsp;</div>
        <div class="clearfix" />
        <div class="row">
            <div class="col-xs-2">&nbsp;</div>
            <div class="col-xs-10">
            @include('errors.listerrors')
            </div>
        </div>
        <div class="clearfix" />
        <div class="row" style="margin-top:20px">
            <div class="col-xs-12">
                <h4>Tasks</h4>
            </div>
        </div>
        <div class="clearfix" />
        <div class="row" style="margin-top:5px">
            <div class="col-xs-12">
                <table>
                    <thead>
                        @if(count($todos)>0)
                            <tr>
                                <th colspan="6">
                                    {!! Form::submit('Edit',['name'=>'action']) !!}
                                    {!! Form::submit('Delete',['name'=>'action']) !!}
                                </th>
                            </tr>
                        @endif
                         <tr>
                            <th>Select</th>
                            <th>Description</th>
                            <th>Published Date</th>
                            <th>Status</th>
                            <th>Scheduled Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($todos) == 0)
                             <tr>
                                <td colspan="6">
                                    No tasks found. Enjoy your day. :)
                                </td>
                            </tr>
                        @else
                            @foreach($todos as $todo)
                                <tr>
                                    <td class="select">
                                        <?php $id = $todo->id;?>
                                        {!! Form::radio('todoId', $id) !!}
                                    </td>
                                    <td class="description">{{$todo->description}}</td>
                                    <td clas="publisheddate">{{$todo->published_date}}</td>
                                    <td class="status">{{$todo->status}}</td>
                                    <td class="date">{{$todo->scheduled_date}}</td>
                                </tr>
                            @endforeach
                        @endif                
                    </tbody>
                </table>
            </div>
        </div>
    {!! Form::close() !!}
</div>