@extends('layouts.app')
@section('content')
    <div class="container">
        <h3 class="text-center text-warning"> {{ $post->title }} </h3>
        {{ $post->body }}
    </div>
@endsection
