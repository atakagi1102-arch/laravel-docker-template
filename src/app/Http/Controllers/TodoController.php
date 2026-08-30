<?php

namespace App\Http\Controllers;

// 追加
use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todo = new Todo();
        $todos = $todo->all();

        return view('todo.index', ['todos' => $todos]); // 修正

    }

    public function create()
    {

        return view('todo.create');
    }

    public function store(Request $request) // 追記
    {
        $inputs = $request->all(); // 追記
        $todo = new Todo();
        $todo->fill($inputs);
        $todo->save();
        return redirect()->route('todo.index'); // 追記
    }

    public function show($id)
{
     $model = new Todo();
     $todo = $model->find($id);

     return view('todo.show', ['todo' => $todo]);
}
}
