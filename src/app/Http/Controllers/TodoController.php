<?php

namespace App\Http\Controllers;

// 追加
use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    private $todo;

    public function index()
    {
        
        $todos = $this->todo->all();

        return view('todo.index', ['todos' => $todos]); // 修正

    }

    public function create()
    {

        return view('todo.create');
    }

    public function store(Request $request) // 追記
    {
        $inputs = $request->all(); 
      
        $this->todo->fill($inputs); 
         $this->todo->save();

        return redirect()->route('todo.index'); // 追記
    }

    public function show($id)
{
     
        $todo = $this->todo->find($id);

     return view('todo.show', ['todo' => $todo]);
}
    public function __construct(Todo $todo)
    {
        $this->todo = $todo;
    }


}
