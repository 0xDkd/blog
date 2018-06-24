{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Reset Password</div>--}}

                {{--<div class="panel-body">--}}
                    {{--@if (session('status'))--}}
                        {{--<div class="alert alert-success">--}}
                            {{--{{ session('status') }}--}}
                        {{--</div>--}}
                    {{--@endif--}}

                    {{--<form class="form-horizontal" method="POST" action="{{ route('password.email') }}">--}}
                        {{--{{ csrf_field() }}--}}

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

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-6 col-md-offset-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--Send Password Reset Link--}}
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
                <div id="reset-password" class="auth-page mx-auto">
                    <div class="container">
                        <form class="auth-form mx-auto">
                            <div class="text-center title"><h1>重置密码</h1></div>
                            <div class="auth-msg" style="display: none;"></div>
                            <div class="form-group"><input id="email" placeholder="输入你的邮箱" autocomplete="off"
                                                           class="form-control" type="text">
                                <div class="form-group-message"><span class="message">请输入你的邮箱</span> <!----></div>
                            </div>
                            <button class="btn btn-danger btn-block">发送邮件</button>
                        </form>
                        <div class="other-choose text-center"><a href="/auth/login" class="">登录</a> <span> 或者 </span> <a
                                    href="/auth/register" class="">注册</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts._footer')
</div>

</body>