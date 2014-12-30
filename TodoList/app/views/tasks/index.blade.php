

@extends('layouts.main')


@section('content')
<div class="col-md-6">
<h1>All Tasks</h1>
<ul class="list-group">
@foreach ($tasks as $task)
{{ $task->name}}

<li class="list-group-item {{ $task->completed ? 'completed' : '' }}">
{{ Form::model($task, ['class' => 'task-update-form', 'method' => 'PATCH', 'route' => ['tasks.update', $task->id]]) }}
{{ Form::checkbox('completed') }}
{{ Form::close() }}
<strong>{{ $task->title }}</strong>
{{ link_to(null, 'Delete', ['class' => 'task-delete btn btn-xs btn-danger', 'data-task-id' => $task->id]) }}
</li>
@endforeach
</ul>
</div>
<div class="col-md-6">
<h3>Add New Task</h3>

</div>
@stop
