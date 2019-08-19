@extends('layouts.app')
@section('content')
    <div class="container">
        <h3 class="text-center text-warning"> {{ $post->title }} </h3>
        <span class="pull-left"> {{ $post->author->name }} </span>
        <span class="pull-right"> {{ $post->published_at->diffForHumans() }} </span>
        <div class="clearfix"></div>
        <hr/>
        {{ $post->body }}
        <hr/>
        <div class="pull-left">
            <a href="{{ route('posts.edit',$post->id) }}">编辑文章</a>
        </div>

        <div class="pull-right">
            <form action="{{ route('posts.destroy',$post->id) }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                {{ csrf_field() }}
                <div class="form-group">
                    <button type="submit">删除</button>
                </div>

            </form>
        </div>
    </div>
@endsection
