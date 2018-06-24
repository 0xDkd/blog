{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--<div class="row">--}}
{{--<div class="col-md-8 col-md-offset-2">--}}
{{--<div class="panel panel-default">--}}
{{--<div class="panel-heading">Register</div>--}}

{{--<div class="panel-body">--}}
{{--<form class="form-horizontal" method="POST" action="{{ route('register') }}">--}}
{{--{{ csrf_field() }}--}}

{{--<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">--}}
{{--<label for="name" class="col-md-4 control-label">Name</label>--}}

{{--<div class="col-md-6">--}}
{{--<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>--}}

{{--@if ($errors->has('name'))--}}
{{--<span class="help-block">--}}
{{--<strong>{{ $errors->first('name') }}</strong>--}}
{{--</span>--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
{{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

{{--<div class="col-md-6">--}}
{{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>--}}

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
{{--<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>--}}

{{--<div class="col-md-6">--}}
{{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="form-group">--}}
{{--<div class="col-md-6 col-md-offset-4">--}}
{{--<button type="submit" class="btn btn-primary">--}}
{{--Register--}}
{{--</button>--}}
{{--</div>--}}
{{--</div>--}}
{{--</form>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--@endsection--}}

@include('layouts._header')
<body>
<div id="app" class="default">
    @include('layouts._navbar')
    <div id="animax">
        <div id="main-container" class="container">
            <div id="auth">
                <div id="register" class="auth-page mx-auto">
                    <div class="container">
                        <form class="auth-form mx-auto" action="{{route('register')}}" method="POST">
                            <div class="text-center title"><h1>注册</h1></div>
                            <div class="auth-msg" style="display: none;"></div>
                            <div class="form-group"><input id="name" name="name" placeholder="输入你的用户名" autocomplete="off"
                                                           class="form-control" type="text" required>
                                <div class="form-group-message"><span class="message">请输入你的用户名</span> <!----> <!---->
                                </div>
                            </div>
                            <div class="form-group"><input id="email" name="email" placeholder="输入你的邮箱" autocomplete="off"
                                                           class="form-control" type="email" value="{{old('email')}}">
                                <div class="form-group-message"><!----> <!----></div>
                            </div>
                            <div class="form-group"><input id="password" name="password" placeholder="输入你的密码" autocomplete="off"
                                                           class="form-control" type="password" value="{{old('password')}}}" required>
                                <div class="form-group-message"><!----> <!----> <!----></div>
                            </div>
                            <div class="form-group"><input id="password-confirm" name="password-confirm" placeholder="重复输入" autocomplete="off"
                                                           class="form-control" type="password" value="{{old('password-confirm')}}}" required>
                                <div class="form-group-message"><!----> <!----> <!----></div>
                            </div>
                            <button type="submit" class="btn btn-danger btn-block">注册</button>
                        </form>
                        <div class="other-choose text-center"><a href="/auth/login" class="">登录</a> <span> 或者 </span> <a
                                    href="/auth/reset" class="">重置密码</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts._footer')
</div>

</body>
</html>