<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('category.index', compact('categories'));
    }

    public function store(CategoryRequest $request)
    {
        $category = $request -> only(['name']);
        Category::create($category);

        return redirect('/categories')
            ->with('message', 'カテゴリを作成しました');
    }

    public function update(CategoryRequest $request)
    {
        $category = $request->only(['name']);
        Category::find($request->id)->update($category);

        return redirect('/categories')
            ->with('message', 'カテゴリを更新しました');
    }
}
