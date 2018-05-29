@extends('layouts.app')

@section('content')

<h1>Task-List一覧</h1>


    
@foreach ($tasks as $task)
 <li>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!} : {{ $task->content }}</li>
 @endforeach
  {!! link_to_route('tasks.create', '新規タスクリストの投稿') !!}
@endsection
