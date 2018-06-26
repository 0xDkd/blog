<div data-v-63233b49="" id="user-setting">
    <div data-v-63233b49="" class="wrap"><!---->
        <form action="{{route('users.update',Auth::user()->id)}}" method="POST">
        <div data-v-63233b49="" id="setting-profile" class="section"><h3 data-v-63233b49="" class="section-title">
                空间设置</h3>
            <div data-v-63233b49="" class="setting-content">
                <div data-v-63233b49="" class="setting-item">
                    @include('layouts._message')
                    @include('common.error')
                    <div data-v-63233b49="" class="setting-name">顶栏图片</div>

                    <div data-v-63233b49="" class="setting-form form-group">
                        <input data-v-63233b49="" name="cover" id="banner" placeholder="图片地址" value="{{ Auth::user()->cover() }}" class="form-control" type="text">
                        <div data-v-63233b49="" class="form-group-message"></div>
                    </div>
                </div>
            </div>
        </div>

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="route" value="cover">

        <button data-v-63233b49="" type="submit" class="btn btn-primary">保存设置</button>
        </form>

    </div>
</div>