@extends('layouts.app')
@section('content')
    <div id="auth">
        <div id="reset-password" class="auth-page mx-auto">
            <div class="container">
                <form class="auth-form mx-auto" action="{{ route('password.email') }}" method="POST">
                    <div class="text-center title"><h1>重置密码</h1></div>
                    <div class="auth-msg" style="display: none;"></div>
                    @include('layouts._message')
                    @include('common.error')
                    <div class="form-group">
                        <input id="email" name="email" placeholder="输入你的邮箱" autocomplete="off" class="form-control" type="email" value="{{ old('email') }}" required>
                        <div class="form-group-message"><span class="message">请输入你的邮箱</span> <!----></div>
                    </div>
                    {{--hidden--}}
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <button type="submit" class="btn btn-danger btn-block">发送邮件</button>

                </form>
                <div class="other-choose text-center"><a href="/login" class="">登录</a> <span> 或者 </span> <a
                            href="/register" class="">注册</a></div>
            </div>
        </div>
    </div>
@endsection
