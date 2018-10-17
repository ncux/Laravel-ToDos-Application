@extends('layouts/app')


@section('content')
    <h1 class=" my-3">{{$todo->title}}</h1>
    <small>Created on {{$todo->created_at}}</small>
    <p class="text-danger">Due on {{$todo->due}}</p>
    <p class="lead">
        {{$todo->content}}
    </p>
    <br>


            <a href="/todos/{{$todo->id}}/edit" class="btn btn-info my-3">Edit</a>

            {!! Form::open(['action'=>['ToDosController@destroy', $todo->id], 'method'=>'POST', 'onsubmit'=>'return confirm("Delete this item?")']) !!}

                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}

            {!! Form::close() !!}


@endsection
