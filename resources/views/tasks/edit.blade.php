@extends('layouts.app')

@section('content')
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
@endsection
