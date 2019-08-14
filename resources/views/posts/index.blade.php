@extends('layouts.app')
@section('content')

    @foreach($posts as $post)
        <div class="text-center">
           <a href="{{ route('posts.show',$post->id) }}"> {{ $post->title }} </a>
            <hr>
        </div>

    @endforeach
    <div class="text-center">
        {{ $posts->links() }}
    </div>
    @endsection
