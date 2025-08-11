<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller
{
    public function index()
    {
        // $todos = Todo::all();
        $todos = Todo::with('category')->get();
        $categories = Category::all();

        return view('index', compact('todos', 'categories'));
    }

    public function store(TodoRequest $request)
    {
        $todo = $request -> only(['content', 'category_id']);
        Todo::create($todo);

        return redirect('/')
            ->with('message', 'Todoを作成しました');
    }

    public function update(TodoRequest $request)
    {
        $todo = Todo::findOrFail($request->id);
        $todo->update($request->only(['content']));

        return redirect('/')
            ->with('message', 'Todoを更新しました');
    }

    public function destroy(Request $request)
    {
        $todo = Todo::findOrFail($request->id);   // 対象のTodoを取得、見つからなければ404エラー
        $todo->delete();

        return redirect('/')
            ->with('message', 'Todoを削除しました');
    }
}
