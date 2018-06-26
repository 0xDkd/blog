@extends('layouts.app')

@section('title',$user->name)

@section('content')
    <div id="main-container" class="container">
        <div id="user"><!---->
            <div class="user-page">
                <div class="user-header">
                    <div class="user-header-info-wrap">
                        <div class="user-header-info-body" style="">
                            <div class="head-banner"
                                 style="background-image: url(&quot;{{$user->cover()}}&quot;);"></div>
                            <div class="head-detail">
                                <div class="user-info text-center">
                                    <div class="user-avatar"><img src="{{ Auth::user()->avatar() }}"
                                                                  class="avatar"></div>
                                    <h3 class="user-name">{{ Auth::user()->name }}</h3>
                                    <div class="user-description mx-auto"><span>{{ Auth::user()->introduction }}</span>
                                    </div>
                                    <div class="user-meta">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="user-header-nav">
                        <div class="nav-wrap mx-auto">
                            <ul class="reset-ul-style">
                                <li><a href="{{ route('users.post',Auth::user()->id) }}"
                                       class="@if(strpos($request->url(),'post')) router-link-exact-active active @endif">投稿</a>
                                </li>
                                <li><a href="{{ route('users.comment',Auth::user()->id) }}"
                                       class="@if(strpos($request->url(),'comment')) router-link-exact-active active @endif">回复</a>
                                </li>
                                <li><a href="{{ route('users.favorite',Auth::user()->id) }}"
                                       class="@if(strpos($request->url(),'favorite')) router-link-exact-active active @endif">收藏</a>
                                </li>
                                <li><a href="{{ route('users.cover',Auth::user()->id) }}"
                                       class="@if(strpos($request->url(),'cover')) router-link-exact-active active @endif">设置</a>
                                </li>
                                <li class="user-search-btn"><input placeholder="搜索本作者的文章" class="form-control"
                                                                   type="text">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="user-panel">
                    @if(strpos($request->url(),'post'))
                        @include('users.user_info_module.user_post')
                    @elseif(strpos($request->url(),'comment'))
                        @include('users.user_info_module.user_comment')
                    @elseif(strpos($request->url(),'favorite'))
                        @include('users.user_info_module.user_favorite')
                    @elseif(strpos($request->url(),'cover'))
                        @include('users.user_info_module.user_cover_set')
                    @else
                        @include('users.user_info_module.user_post')
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection