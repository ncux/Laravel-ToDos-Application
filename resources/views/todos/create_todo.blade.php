@extends('layouts/app')


@section('content')
    <h1 class=" my-3">Create a new todo</h1>

    {!! Form::open(['action'=>'ToDosController@store', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class'=>'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('content', 'Content')}}
            {{Form::textarea('content', '', ['class'=>'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('due', 'Due date')}}
            {{Form::date('due', '', ['class'=>'form-control'])}}

        </div>

        {{Form::submit('Submit', ['class'=>'btn btn-success'])}}

    {!! Form::close() !!}


@endsection
