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

        return view('todo.index', ['todos' => $todos]);
    }

    public function create()
    {
        // TODO: 
        return view('todo.create');
    }

    public function store(Request $request) // 追記
    {
        $content = $request->input('content'); // 追記

    // 1. todosテーブルの1レコードを表すTodoクラスをインスタンス化
    $todo = new Todo(); 
    // 2. Todoインスタンスのカラム名のプロパティに保存したい値を代入
    $todo->content = $content;
    // 3. Todoインスタンスの`->save()`を実行してオブジェクトの状態をDBに保存するINSERT文を実行
    $todo->save();
     return redirect()->route('todo.index'); // 追記
    }

}


