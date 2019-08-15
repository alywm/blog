@extends('layouts.app')
@section('content')
    <h3 class="text-center text-warning">文章列表</h3>
    <hr/>
    @foreach($posts as $post)
        <div class="text-center">
            <a href="{{ route('posts.show',$post->id) }}"> {{ $post->title }} </a>
            <div>{{ $post->published_at->diffForHumans() }}</div>
            <hr/>
        </div>
    @endforeach

    <div class="text-center">
    {{ $posts->links() }}
    </div>


@endsection
{{--{{ $posts->links() }}--}}
