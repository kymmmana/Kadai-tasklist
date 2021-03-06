@extends('layouts.app')

@section('content')
@if (Auth::user()->id == $task->user_id)
    <h1>id: {{ $task->id }} のタスクリスト編集ページ</h1>

 <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-lg-offset-3 col-lg-6">
          
            {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
                <div class="form-group">
                    {!! Form::label('status', 'status:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>
        
                <div class="form-group">
                    {!! Form::label('content', 'tasklist:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
        
                {!! Form::submit('update', ['class' => 'btn btn-default']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>
     @else
        {{ print('<h2 class="alert alert-danger"><span class="glyphicon glyphicon-ban-circle" aria-hidden="true"></span>You are not authorized for that action!</h2>')}}
    @endif

@endsection
