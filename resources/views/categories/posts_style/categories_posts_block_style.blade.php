<div id="post-list">
    <!---->
    <span class="row">
        @foreach($posts as $post)
            <div class="post col-sm-6 col-md-4">
                                    <div class="post-card thumb-post-card">
                                        <section class="post-card-wrap">
                                            <a href="{{route('posts.show', $post->id )}}" class="" target="_blank">
                                                <div class="post-card-content">
                                                    <div class="cover"
                                                         style="background-image: url(&quot;&quot;);"></div>
                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                    <div class="body" style="">
                                                        <div class="title-wrap">
                                                            <div class="title">{{ $post->title }}</div>
                                                        </div>
                                                        <div class="meta-wrap clearfix">
                                                            <a href="{{route('users.show',$post->user->id)}}"
                                                               class="author meta-label float-left text-truncate">{{ $post->user->name }}</a>
                                                            <span class="view meta-label float-left">{{ $post->view_count }}
                                                                次围观</span>
                                                            <span class="date float-right">{{ $post->created_time }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </section>
                                    </div>
                                </div>
        @endforeach

                            </span>
    <!---->
</div>

