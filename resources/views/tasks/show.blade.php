@extends('layouts.app')

@section('content')

    @if (Auth::user()->id == $task->user_id)
<h1>id ={{ $task->id }} のタスクリスト詳細ページ</h1>

     
      <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>status</th>
            <td>{{ $task->status }}</td>
        </tr>
        <tr>
            <th>tasks</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>
 {!! link_to_route('tasks.edit', 'Edit', ['id' => $task->id],['class' => 'btn btn-default']) !!}

  {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('delete', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
    
     @else
        {{ print('<h2 class="alert alert-danger"><span class="glyphicon glyphicon-ban-circle" aria-hidden="true"></span>You are not authorized for that action!</h2>')}}
    @endif

@endsection

