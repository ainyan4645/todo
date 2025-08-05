@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('content')
<div class="content">
    <div class="content__form">
        <form class="form" action="/todos" method="post">
            <input class="form__text" type="text" name="content" />
            <button class="form__button" type="submit">作成</button>
        </form>
    </div>

    <div class="content__todo-group">
        <div class="todo-group__heading">
            <h2>Todo</h2>
        </div>
        <div class="todo-group__list">
            //追加されるtodoについて記述
        </div>
    </div>
</div>
@endsection