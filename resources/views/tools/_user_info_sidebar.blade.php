@if(Auth::check())
    <div id="auth" class="auth-card sidebar-card">
        <div class="auth-msg" style="display: none;"></div>
        <div class="auth-info">
            <div class="avatar-box"
                 style="background-image: url(&quot;https://ooo.0o0.ooo/2017/02/19/58a9706412c15.png&quot;);">
                <a href="/user/195111" class="">
                    <img src="{{Auth::user()->gravatar()}}"
                         alt="aimerforreimu" class="avatar">
                </a>
                <span class="role">成员</span>
            </div>
            <div class="info-box">
                <div class="name">
                    <a href="/user/195111" class="display-name">{{ Auth::user()->name }}</a>
                    <a href="/account" class="">(设置)</a>
                </div>
                <div class="description">
                    这个人很懒，什么都没有留下...
                </div>
            </div>
            <div class="post-box">
                <ul class="count">
                    <li>
                        <a href="/user/195111/post" class="">
                            <div class="name">投稿</div>
                            <div class="num">0</div>
                        </a>
                    </li>
                    <li>
                        <a href="/user/195111/comment" class="">
                            <div class="name">吐槽</div>
                            <div class="num">0</div>
                        </a>
                    </li>
                    <li>
                        <a href="/user/195111/favorite" class="">
                            <div class="name">收藏</div>
                            <div class="num">2</div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer">
                <ul class="operate">
                    <!---->
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                           class="logout">登出</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </form>

                    </li>
                </ul>
            </div>
        </div>
    </div>
@else
    <div class="auth-msg" style="display: none;"></div>
    <div class="auth-links">
        <div class="link-btn"><a href="login" class="btn btn-primary btn-block">登录</a></div>
        <div class="link-btn"><a href="/register" class="btn btn-danger btn-block">注册</a></div>
    </div>
    <br>
@endif
