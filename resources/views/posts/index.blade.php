@extends('layouts.app')

@section('title','首页')
@section('content')
    <div id="index" class="row">
        <aside id="sidebar" class="col-md-4 col-sm-12 order-sm-last">
            {{--用户信息--}}
            @include('tools._user_info_sidebar')

            {{--广告--}}
            @include('tools._adverting')

            {{--热门文章（浏览量最多）--}}
            @include('tools._hot_posts')

            {{--广告--}}
            @include('tools._adverting')

            {{--热门主题（评论最多）--}}
            @include('tools._hot_thmes')

            {{--广告--}}
            @include('tools._adverting')

            {{--最新评论--}}
            @include('tools._comments')

            {{--广告--}}
            @include('tools._adverting')

            {{--友情链接--}}
            @include('tools._friend_links')
        </aside>
        <div id="home" class="col-md-8 col-sm-12">
            {{--顶部幻灯片广告--}}
            @include('home._slide')
            {{--公告--}}
            @include('common._announcement')
            {{--文章部分--}}
            @include('common.post_style._posts_default')
            {{--分页--}}
            {!! $posts->render() !!}
        </div>
    </div>
@endsection