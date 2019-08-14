@extends('layouts.app')
@section('content')

    @foreach($posts as $post)
        <div class="text-center">
            {{ $post->title }}
            <hr>
        </div>

    @endforeach
    <div class="text-center">
        {{ $posts->links() }}
    </div>
    @endsection
