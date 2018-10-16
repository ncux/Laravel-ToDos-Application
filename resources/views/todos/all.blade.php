@extends('layouts/app')


@section('content')
    <h1 class=" my-3">Todos</h1>
    @if(count($todos) > 0)

        <table class="table table-striped">
            <thead>

            <td>Title</td>   <td>Due</td>

            </thead>
            @foreach($todos as $todo)
                <tr>
                    <td><a href="todos/{{$todo->id}}" target="_blank">{{$todo->title}}</a></td>  <td>{{$todo->due}}</td>
                </tr>
            @endforeach
        </table>


    @endif

@endsection
