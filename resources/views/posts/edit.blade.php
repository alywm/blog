@extends('layouts.app')
@section('content')
    <div class="container">
        <h3 class="text-center text-warning"> 编辑文章 </h3>

        @include('errors.error')

        <form action="{{ route('posts.update',$post->id) }}" method="post">
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="title" class="control-label">标题：</label>
                <input id="title" name="title" type="text" class="form-control" value="{{ $post->title }}">
            </div>

            <div class="form-group">
                <label for="body" class="control-label">内容：</label>
                <textarea id="body" name="body"  class="form-control" rows="8" >{{ $post->body }}</textarea>
            </div>

            <div class="form-group">
                <label for="published_at" class="control-label">发表日期：</label>
                <input id="published_at" name="published_at" type="date" class="form-control" value="{{ $post->published_at->toDateString() }}">
            </div>

            <div class="form-group">
                <button type="submit">提交</button>
            </div>
        </form>
    </div>
@endsection
