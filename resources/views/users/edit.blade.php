@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-md-8 offset-md-2">

            <div class="card">
                <div class="card-header">
                    <h4>
                        <i class="glyphicon glyphicon-edit"></i> 编辑个人资料
                    </h4>
                </div>

                <div class="card-body">

                    <form action="{{ route('users.update', $user->id) }}" method="POST" accept-charset="UTF-8">
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label for="name-field">用户名</label>
                            <input class="form-control" type="text" name="name" id="name-field" value="{{ old('name', $user->name) }}" />
                        </div>
                        <div class="form-group">
                            <label for="email-field">邮 箱</label>
                            <input class="form-control" type="text" name="email" id="email-field" readonly value="{{ old('email', $user->email) }}" />
                        </div>

                        <div class="form-group">
                            <label for="password" class="control-label">密码：</label>
                            <input id="password" name="password" type="text" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="introduction-field">个人简介</label>
                            <textarea name="introduction" id="introduction-field" class="form-control" rows="3">{{ old('introduction', $user->introduction) }}</textarea>
                        </div>
                        <div class="well well-sm">
                            <button type="submit" class="btn btn-primary">保存</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
{{--    <div class="container">--}}
{{--        <h3 class="text-center text-warning"> 个人中心 </h3>--}}

{{--        <form action="{{ route('users.update',$user->id) }}" method="post">--}}
{{--            <input type="hidden" name="_method" value="PUT">--}}
{{--            {{ csrf_field() }}--}}

{{--            <div class="form-group">--}}
{{--                <label for="name" class="control-label">用户名：</label>--}}
{{--                <input id="name" name="name" type="text" class="form-control" value="{{ $user->name }}">--}}
{{--            </div>--}}

{{--            <div class="form-group">--}}
{{--                <label for="email" class="control-label">邮箱：</label>--}}
{{--                <input id="email" name="email"  class="form-control" readonly value="{{ $user->email }}">--}}
{{--            </div>--}}

{{--            <div class="form-group">--}}
{{--                <label for="password" class="control-label">密码：</label>--}}
{{--                <input id="password" name="password" type="text" class="form-control">--}}
{{--            </div>--}}

{{--            <div class="form-group">--}}
{{--                <button type="submit">提交</button>--}}
{{--            </div>--}}
{{--        </form>--}}

{{--    </div>--}}
    @endsection
