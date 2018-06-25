<!doctype html>
<html lang="zh-CN">
@include('layouts._header')
<body>
<div id="app" class="default">
    @include('layouts._navbar')
    <div id="animax">
        <div id="main-container" class="container">
                {{--侧栏--}}
                @yield('content')
                {{--正文--}}
        </div>
    </div>
    {{--底部--}}
    @include('layouts._footer')
</div>
</body>
<script src="{{asset('js/app.js')}}"></script>
</html>