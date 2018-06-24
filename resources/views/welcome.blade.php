@include('layouts._header')
<body>
<div id="app" class="default">
            @include('layouts._navbar')
    <div id="animax">
        <div id="main-container" class="container">
            <div id="index" class="row">
                {{--侧栏--}}
                <aside id="sidebar" class="col-md-4 col-sm-12 order-sm-last">
                    {{--用户信息--}}
                    @include('tools._user_info_sidebar')

                    {{--广告--}}
                    {{--@include('tools._adverting')--}}

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
                    @include('common._posts')
                    {{--分页--}}
                    <div class="page-pagination">
                        <ul role="menubar" aria-disabled="false" aria-label="Pagination" class="pagination b-pagination pagination-md">
                            <li role="none presentation" aria-hidden="true" class="page-item disabled">
                                <span class="page-link">«</span>
                            </li>
                            <li role="none presentation" aria-hidden="true" class="page-item disabled">
                                <span class="page-link">‹</span>
                            </li>
                            <!---->
                            <li role="none presentation" class="page-item active">
                                <a role="menuitemradio" tabindex="0" aria-label="Goto page 1" aria-checked="true" aria-posinset="1"
                                   aria-setsize="1089" href="#" target="_self" class="page-link btn-primary">1</a>
                            </li>
                            <li role="none presentation" class="page-item">
                                <a role="menuitemradio" tabindex="-1" aria-label="Goto page 2" aria-checked="false" aria-posinset="2"
                                   aria-setsize="1089" href="#" target="_self" class="page-link">2</a>
                            </li>
                            <li role="none presentation" class="page-item">
                                <a role="menuitemradio" tabindex="-1" aria-label="Goto page 3" aria-checked="false" aria-posinset="3"
                                   aria-setsize="1089" href="#" target="_self" class="page-link">3</a>
                            </li>
                            <li role="none presentation" class="page-item d-none d-sm-flex">
                                <a role="menuitemradio" tabindex="-1" aria-label="Goto page 4" aria-checked="false" aria-posinset="4"
                                   aria-setsize="1089" href="#" target="_self" class="page-link">4</a>
                            </li>
                            <li role="none presentation" class="page-item d-none d-sm-flex">
                                <a role="menuitemradio" tabindex="-1" aria-label="Goto page 5" aria-checked="false" aria-posinset="5"
                                   aria-setsize="1089" href="#" target="_self" class="page-link">5</a>
                            </li>
                            <li role="none presentation" class="page-item d-none d-sm-flex">
                                <a role="menuitemradio" tabindex="-1" aria-label="Goto page 6" aria-checked="false" aria-posinset="6"
                                   aria-setsize="1089" href="#" target="_self" class="page-link">6</a>
                            </li>
                            <li role="none presentation" class="page-item d-none d-sm-flex">
                                <a role="menuitemradio" tabindex="-1" aria-label="Goto page 7" aria-checked="false" aria-posinset="7"
                                   aria-setsize="1089" href="#" target="_self" class="page-link">7</a>
                            </li>
                            <li role="none presentation" class="page-item d-none d-sm-flex">
                                <a role="menuitemradio" tabindex="-1" aria-label="Goto page 8" aria-checked="false" aria-posinset="8"
                                   aria-setsize="1089" href="#" target="_self" class="page-link">8</a>
                            </li>
                            <li role="none presentation" class="page-item d-none d-sm-flex">
                                <a role="menuitemradio" tabindex="-1" aria-label="Goto page 9" aria-checked="false" aria-posinset="9"
                                   aria-setsize="1089" href="#" target="_self" class="page-link">9</a>
                            </li>
                            <li role="separator" class="page-item disabled d-none d-sm-flex">
                                <span class="page-link">…</span>
                            </li>
                            <li role="none presentation" class="page-item">
                                <a role="menuitem" tabindex="-1" aria-label="Goto next page" href="#" target="_self" class="page-link">
                                    <span aria-hidden="true">›</span>
                                </a>
                            </li>
                            <li role="none presentation" class="page-item">
                                <a role="menuitem" tabindex="-1" aria-label="Goto last page" href="#" target="_self" class="page-link">
                                    <span aria-hidden="true">»</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--底部--}}
    @include('layouts._footer')
</div>
</body>
<script src="https://cdn.bootcss.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</html>