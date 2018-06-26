@extends('layouts.app')

@section('title','修改个人信息')

@section('content')
    <div id="account" class="row">
        <div class="col-md-3">
            <div class="card manage-card">
                <div class="card-header"><h3 class="title">用户设置</h3></div>
                <div class="card-body no-padding">
                    <ul class="menu-list-group">
                        <li class="menu-list-item"><a href="{{ route('users.profile',$user->id) }}"
                                                      class="@if(strpos($request->url(),'profile')) router-link-exact-active active @endif">个人资料</a>
                        </li>
                        <li class="menu-list-item"><a href="{{ route('users.preference',$user->id) }}"
                                                      class="@if(strpos($request->url(),'preference')) router-link-exact-active active @endif">偏好设置</a>
                        </li>
                        <li class="menu-list-item"><a href="{{ route('users.security',$user->id) }}"
                                                      class="@if(strpos($request->url(),'security')) router-link-exact-active active @endif">安全设置</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div data-v-6c5f8021="" class="card manage-card">
                @if(strpos($request->url(),'profile'))
                    @include('users.user_edit_module.profile')
                @elseif(strpos($request->url(),'preference'))
                    @include('users.user_edit_module.preference')
                @elseif(strpos($request->url(),'security'))
                    @include('users.user_edit_module.security')
                @else
                    @include('users.user_edit_module.profile')
                @endif
            </div>
        </div>
    </div>
@endsection
