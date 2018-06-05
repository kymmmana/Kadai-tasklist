@extends('layouts.app')

@section('content')

<h1>Task-List一覧</h1>

@if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>status</th>
                    <th>tasklist</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                        <td>{{ $task->status }}</td>
                        <td>{{ $task->content }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

  {!! link_to_route('tasks.create', 'post', null, ['class' => 'btn btn-primary']) !!}
@endsection
