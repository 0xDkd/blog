{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--<div class="row">--}}
{{--<div class="col-md-8 col-md-offset-2">--}}
{{--<div class="panel panel-default">--}}
{{--<div class="panel-heading">Login</div>--}}

{{--<div class="panel-body">--}}
{{--<form class="form-horizontal" method="POST" action="{{ route('login') }}">--}}
{{--{{ csrf_field() }}--}}

{{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
{{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

{{--<div class="col-md-6">--}}
{{--<input id="email" type="email" class="form-control" name="email"--}}
{{--value="{{ old('email') }}" required autofocus>--}}

{{--@if ($errors->has('email'))--}}
{{--<span class="help-block">--}}
{{--<strong>{{ $errors->first('email') }}</strong>--}}
{{--</span>--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
{{--<label for="password" class="col-md-4 control-label">Password</label>--}}

{{--<div class="col-md-6">--}}
{{--<input id="password" type="password" class="form-control" name="password" required>--}}

{{--@if ($errors->has('password'))--}}
{{--<span class="help-block">--}}
{{--<strong>{{ $errors->first('password') }}</strong>--}}
{{--</span>--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="form-group">--}}
{{--<div class="col-md-6 col-md-offset-4">--}}
{{--<div class="checkbox">--}}
{{--<label>--}}
{{--<input type="checkbox"--}}
{{--name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me--}}
{{--</label>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="form-group">--}}
{{--<div class="col-md-8 col-md-offset-4">--}}
{{--<button type="submit" class="btn btn-primary">--}}
{{--Login--}}
{{--</button>--}}

{{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--Forgot Your Password?--}}
{{--</a>--}}
{{--</div>--}}
{{--</div>--}}
{{--</form>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--@endsection--}}
@extends('layouts.app')

@section('title','登录')
@section('content')
    <div id="auth">
        <div id="login" class="auth-page">
            <div class="container">
                <form class="auth-form mx-auto" method="POST" action="{{route('login')}}">
                    <input type="hidden" value="{{csrf_token()}}" name="_token">
                    <div class="text-center title"><h1>登录</h1></div>
                    <div class="auth-msg" style="display: none;"></div>
                    @include('common.error')
                    <div class="form-group"><input id="email" name="email" placeholder="输入你的者邮箱"
                                                   class="form-control" type="text" value="{{old('email')}}">
                        <div class="form-group-message"><!----></div>
                    </div>
                    <div class="form-group"><input id="password" name="password" placeholder="输入你的密码"
                                                   class="form-control"
                                                   type="password" value="{{old('password')}}">
                        <div class="form-group-message"><!----> <!----> <!----></div>
                    </div>

                    <div class="form-checkbox">
                        <div class="custom-control custom-checkbox">
                            <input id="remember" name="remember" {{ old('remember') ? 'checked' : '' }} class="custom-control-input" type="checkbox">
                            <label for="remember" class="custom-control-label"> 记住我的登录信息 </label></div>
                    </div>
                    <button class="btn btn-danger btn-block" type="submit">登录</button>
                </form>
                <div class="other-choose text-center"><a href="/register" class="">注册</a> <span> 或者 </span>
                    <a href="{{ route('password.request') }}" class="">重置密码</a></div>
            </div>
        </div>
    </div>
    @endsection



