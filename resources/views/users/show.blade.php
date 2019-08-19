@extends('layouts.app')
@section('content')
    <div class="container">
        <h3 class="text-center text-warning"> 个人中心 </h3>

        <div>
            <h4>{{ $user->name }}</h4>
        </div>
        <div class="card-body">
            <h5><strong>个人简介</strong></h5>
            <p>{{ $user->introduction }}</p>
            <hr>
            <h5><strong>注册于</strong></h5>
            <p>{{ $user->created_at->diffForHumans() }}</p>
        </div>
        <hr/>
        <div>
            <a href="{{ route('users.edit',$user->id) }}">编辑用户资料</a>
        </div>
    </div>
    @endsection
