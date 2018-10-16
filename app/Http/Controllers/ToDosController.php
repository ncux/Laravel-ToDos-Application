<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ToDo;

class ToDosController extends Controller
{

    public function index()
    {
        // $todos = ToDo::all();
        $todos = ToDo::orderBy('created_at', 'desc')->get();
        return view('todos/all')->with('todos', $todos);
    }




    public function create()
    {
        return view('/todos/create_todo');
    }



    public function store(Request $request)
    {
        $this->validate($request, ['title'=>'required', 'due'=>'required']);
        $todo = new ToDo;
        $todo->title = $request->input('title');
        $todo->content = $request->input('content');
        $todo->due = $request->input('due');
        $todo->save();
        return redirect('/')->with('success', 'New todo was successfully created!');
    }



    public function show($id)
    {
        $todo = ToDo::find($id);
        return view('todos/show_todo')->with('todo', $todo);
    }




    public function edit($id)
    {
        $todo = ToDo::find($id);
        return view('todos/edit_todo')->with('todo', $todo);
    }




    public function update(Request $request, $id)
    {
        $this->validate($request, ['title'=>'required', 'due'=>'required']);
        $todo = ToDo::find($id);
        $todo->title = $request->input('title');
        $todo->content = $request->input('content');
        $todo->due = $request->input('due');
        $todo->save();
        return redirect('/')->with('success', 'New todo was successfully updated!');
    }



    public function destroy($id)
    {
        $todo = ToDo::find($id);
        $todo->delete();
        return redirect('/')->with('success', 'Todo successfully deleted!');
    }
}
