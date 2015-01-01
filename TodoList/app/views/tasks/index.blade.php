@extends('layouts.main')

@section('content')

    <h1><span class="label label-default">Manage my tasks</span></h1>

    <h3><span class="label label-info">Create Task</span></h3>

    {{ Form::open(array('route' => 'tasks.store')) }}
        
        {{ Form::label('name', 'Name:') }}
        {{ Form::text('name') }}
           
        {{ Form::submit('Create', array('class' => 'btn btn-xs btn-success')) }}
           
       
    {{ Form::close() }}

    @if ($errors->any())
        <ul>
            {{ implode('', $errors->all('<li class="error">:message</li>')) }}
        </ul>
    @endif

    <div class="row">
        <div class="col-md-6">
            <h3><span class="label label-info">Unfinished tasks</span></h3>
            <ul class="list-group">
                @foreach ($tasks as $task)
                    {{ Form::model($task, ['class' => 'form', 'method' => 'PUT', 'route' => ['tasks.update', $task->id]]) }}

                    @if ($task->completed == 0) 

                        <li class="list-group-item">{{ $task->name}}

                        <input type="submit" name="delete" value="Delete" class="btn btn-xs btn-danger">
                        <input type="submit" name="done" value="Done" class="btn btn-xs btn-primary"></li>
                    @endif

                    {{ Form::close() }}

                @endforeach
            </ul>
        </div>

        <div class="col-md-6">
            <h3><span class="label label-info">Finished tasks</span></h3>
            <ul class="list-group">
                @foreach ($tasks as $task)

                    {{ Form::model($task, ['class' => 'form']) }}

                    @if ($task->completed == 1) 

                        <li class="list-group-item">{{ $task->name}}</li>

                    @endif

                    {{ Form::close() }}

                @endforeach
            </ul>
        </div>
    </div>
@stop
