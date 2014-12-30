

@extends('layouts.main')


@section('content')


<div class="col-md-6">
<h1>Task Non fini</h1>
<ul class="list-group">
@foreach ($tasks as $task)
{{ Form::model($task, ['class' => 'form', 'method' => 'PUT', 'route' => ['tasks.update', $task->id]]) }}




@if ($task->completed == 0) 

 {{ $task->id}}

 {{ $task->name}}



<strong>{{ $task->title }}</strong>

<input type="submit" name="delete" value="Delete">
<input type="submit" name="done" value="Done">
@endif

 {{ Form::close() }}


@endforeach
</ul>

<h2>Create Project</h2>
 

<h1>Create User</h1>

{{ Form::open(array('route' => 'tasks.store')) }}
    <ul>

        <li>
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name') }}
        </li>

        <li>
            {{ Form::submit('Creer', array('class' => 'btn btn-xs btn-danger')) }}
        </li>
    </ul>
{{ Form::close() }}

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif


<div class="col-md-6">
PRoject Finish

</div>



<div class="col-md-6">
<h1>Task  fini</h1>
<ul class="list-group">
@foreach ($tasks as $task)




@if ($task->completed == 1) 

 {{ $task->id}}

 {{ $task->name}}

@endif



@endforeach
</ul>
@stop
<!--{{ Form::model($task, ['class' => 'form', 'method' => 'PATCH', 'route' => ['tasks.update', $task->id]]) }}-->