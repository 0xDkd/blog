@extends('layouts.app')

@section('title','分类目录')

@section('content')
    <div id="category" class="col-md-12">
        <div class="category-wrap">
            <div class="category-navbar text-center">
                <ul class="list reset-ul-style">
                    <li class="item"><a href="/category/87" class="">三次元</a></li>
                    <li class="item"><a href="/category/1" class="">其他</a></li>
                    <li class="item"><a href="/category/2" class="">动画</a></li>
                    <li class="item"><a href="/category/8" class="">图片</a></li>
                    <li class="item"><a href="/category/336" class="">娱乐</a></li>
                    <li class="item"><a href="/category/139" class="">学习资料</a></li>
                    <li class="item"><a href="/category/966" class="">安卓</a></li>
                    <li class="item"><a href="/category/1363" class="">官能小说</a></li>
                    <li class="item"><a href="/category/2041" class="">小说</a></li>
                    <li class="item"><a href="/category/227" class="">工具</a></li>
                    <li class="item"><a href="/category/1535" class="">影视</a></li>
                    <li class="item"><a href="/category/32" class="">游戏</a></li>
                    <li class="item"><a href="/category/29" class="">漫画</a></li>
                    <li class="item"><a href="/category/150" class="">系统萌化</a></li>
                    <li class="item"><a href="/category/30" class="">轻小说</a></li>
                    <li class="item"><a href="/category/1113" class="">隐藏分类</a></li>
                    <li class="item"><a href="/category/7" class="">音乐</a></li>
                </ul>
                <ul class="list reset-ul-style second-category">
                    <li class="item"><a href="/category/876" class="router-link-exact-active active">声优介绍</a></li>
                    <li class="item"><a href="/category/194" class="">技巧分享</a></li>
                    <li class="item"><a href="/category/1465" class="">推广</a></li>
                    <li class="item"><a href="/category/1392" class="">旅游</a></li>
                    <li class="item"><a href="/category/235" class="">活动</a></li>
                    <li class="item"><a href="/category/230" class="">游戏教程</a></li>
                    <li class="item"><a href="/category/1757" class="">电子刊物</a></li>
                    <li class="item"><a href="/category/219" class="">绘画技巧</a></li>
                    <li class="item"><a href="/category/54" class="">资讯</a></li>
                    <li class="item"><a href="/category/1190" class="">资讯情报</a></li>
                </ul>
            </div>
            <div class="category-post mt-2">
                <div id="post-list">
                    @include('categories.posts_style.categories_posts_block_style')
                    {{--@include('common.post_style._posts_block')--}}
                    <span class="row justify-content-md-center">
                        @include('categories.posts_style.categories_posts_default_style')
                    </span>
                </div>
            </div>
            {!! $posts->render() !!}
        </div>
    </div>


@endsection
