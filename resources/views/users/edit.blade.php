@extends('layouts.app')

@section('title','修改个人信息')

@section('content')
    <div id="account" class="row">
        <div class="col-md-3">
            <div class="card manage-card">
                <div class="card-header"><h3 class="title">用户设置</h3></div>
                <div class="card-body no-padding">
                    <ul class="menu-list-group">
                        <li class="menu-list-item"><a href="/account/profile"
                                                      class="router-link-exact-active active">个人资料</a></li>
                        <li class="menu-list-item"><a href="/account/preference" class="">偏好设置</a></li>
                        <li class="menu-list-item"><a href="/account/security" class="">安全设置</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div data-v-6c5f8021="" class="card manage-card">
                <div data-v-6c5f8021="" class="card-header"><h3 data-v-6c5f8021="" class="title">个人资料</h3></div>
                <div data-v-6c5f8021="" class="card-body"><!---->
                    @include('common.error')
                    @include('layouts._message')
                    <div data-v-6c5f8021="" class="form-group"><label data-v-6c5f8021="" for="avatar">头像</label>
                        <div data-v-6c5f8021="" class="row AvatarUploader">
                            <div data-v-6c5f8021="" class="col-sm-2">
                                <div data-v-6c5f8021="">
                                    <figure data-v-6c5f8021="" class="avatar"><img data-v-6c5f8021=""
                                                                                   src="//gravatar.loli.net/avatar/9ec1362a5482e50fd03c365636c16659?s=150&amp;#038;d=mm&amp;#038;r=g">
                                    </figure>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div data-v-6c5f8021=""><a data-v-6c5f8021="" href="/wp-admin/profile.php#wp-user-avatar" target="_blank" class="btn btn-default">上传头像</a>
                                    <span data-v-6c5f8021="">上传头像后需要刷新才能显示新头像</span></div>
                            </div>
                        </div>
                    </div>
                    <form action="{{route('users.update',$user->id)}}" method="POST">

                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="_method" value="PATCH">
                        <input type="hidden" name="route" value="profile">

                        <div data-v-6c5f8021="" class="form-group">
                            <label data-v-6c5f8021="" for="nickname">昵称</label>
                            <input id="nickname" name="nickname" class="form-control" type="text" value="{{$user->nickname}}">
                            <div class="form-group-message"></div>
                        </div>
                        <div data-v-6c5f8021="" class="form-group">
                            <label data-v-6c5f8021="" for="bio">个人签名</label>
                            <textarea name="introduction" data-v-6c5f8021="" id="bio" rows="3" class="form-control" >{{$user->introduction}}</textarea>
                            <div data-v-6c5f8021="" class="form-group-message"></div>
                        </div>
                        <button type="submit" data-v-6c5f8021="" class="btn btn-primary mt-4">保存设置</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
