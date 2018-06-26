<div data-v-6c5f8021="" class="card-header"><h3 data-v-6c5f8021="" class="title">个人资料</h3></div>
<div data-v-6c5f8021="" class="card-body"><!---->
    @include('common.error')
    @include('layouts._message')
    <form action="{{route('users.update',$user->id)}}" method="POST" accept-charset="UTF-8"
          enctype="multipart/form-data">
        <div data-v-6c5f8021="" class="form-group"><label data-v-6c5f8021="" for="avatar">头像</label>
            <div data-v-6c5f8021="" class="row AvatarUploader">
                <div data-v-6c5f8021="" class="col-sm-2">
                    <div data-v-6c5f8021="">
                        <figure data-v-6c5f8021="" class="avatar"><img data-v-6c5f8021=""  src="{{ $user->avatar() }}">
                        </figure>
                    </div>
                </div>
                <div class="col-sm-8">
                    <input type="file" name="avatar" id="file" class="inputfile" />
                    <label for="file" class="btn btn-sm btn-outline-primary">上传头像</label>
                </div>
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
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