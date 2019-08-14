@extends('layouts.app')
@section('content')
    <div class="container">
        <h3 class="text-center text-warning"> 创建文章 </h3>

        <form action="{{ route('posts.store') }}" method="post">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="title" class="control-label">标题：</label>
                <input id="title" name="title" type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="body" class="control-label">内容：</label>
                <textarea id="body" name="body"  class="form-control" rows="8"> </textarea>
            </div>

            <div class="form-group">
                <label for="published_at" class="control-label">发表日期：</label>
                <input id="published_at" name="published_at" type="date" class="form-control" value="{{ date('Y-m-d') }}">
            </div>

            <div class="form-group">
                <button type="submit">提交</button>
            </div>

        </form>

    </div>
@endsection
