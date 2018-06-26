<div data-v-6c5f8021="" class="card-header"><h3 data-v-6c5f8021="" class="title">安全设置</h3></div>
<div class="card-body"><!---->
    @include('common.error')
    @include('layouts._message')
    <form action="{{ route('users.update',$user->id) }}" method="POST">
        <div class="form-group">
            <label for="password">新密码</label>
            <input id="password" name="password" class="form-control" type="password">

            <div class="form-group-message"><!----> <!----> <!----></div>
        </div>
        <div class="form-group">
            <label for="password_confirmation">重复密码</label>
            <input id="password_confirmation" name="password_confirmation" class="form-control" type="password">
            <div class="form-group-message"><!----> <!----> <!----></div>
        </div>
        {{--Hidden--}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="PATCH">
        <input type="hidden" name="route" value="security">

        <button class="btn btn-primary mt-4">修改密码</button>
    </form>
</div>