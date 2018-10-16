@extends('layouts/app')


@section('content')

    <div class="my-2">
        <a href="/" class="btn btn-sm btn-info my-3">back</a>
        <h2>Edit todo</h2>

        {!! Form::open(['action'=>['ToDosController@update', $todo->id], 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}

            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', $todo->title, ['class'=>'form-control', 'required'])}}

            </div>
            <div class="form-group">
                {{Form::label('content', 'Content')}}
                {{Form::textarea('content', $todo->content, ['class'=>'form-control'])}}

            </div>

            <div class="form-group">
                {{Form::label('due', 'Due date')}}
                {{Form::date('due', '', ['class'=>'form-control'])}}

            </div>

            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Submit', ['class'=>'btn btn-success'])}}

        {!! Form::close() !!}

    </div>


@endsection
