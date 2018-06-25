<div class="single-post-wrap default-wrap">
    <article id="article" class="article">
        <div class="header" style="">
            <div class="title"><h1><a href="{{ route('posts.show',$post->id) }}"
                                      class="router-link-exact-active active">{{ $post->title }}</a></h1></div>
            <div class="meta"><a href="{{ route('users.show',$post->user->id) }}" class="item author">{{ $post->user->name }}</a> <a
                        href="{{ route('categories.show',$post->category->id)  }}" class="item category small-label">{{ $post->category->name }}</a><span
                        title="2018-06-24 21:59:16" class="item release_date">2018年06月24日</span>
                <span class="item views">{{ $post->view_count }}次围观</span>
                <div class="action"><a class="action-btn">收藏</a> <!----></div>
            </div>
        </div>
        <div id="content" class="content" style="">
            {{ $post->content }}
        </div> <!----> <!----> <!---->
    </article>
    <div class="tag-wrap">
        <ul class="tag-list clearfix"></ul>
    </div>
    <div class="author-right"><p>转载请先获得 <a href="{{ route('users.show',$post->user->id) }}" class="">{{ $post->user->name }}</a> 同意，并注明出处、保留链接：<a
                    href="{{ route('posts.show',$post->id) }}" class="router-link-exact-active active">{{ route('posts.show',$post->id) }}</a>
        </p></div>
</div>