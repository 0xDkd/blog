<div class="post-list">
    <span class="row">
        @foreach($posts as $post)
            <div class="post col-sm-12">
            <div class="post-card full-post-card"><section class="post-card-wrap">
                    <div class="post-card-content">
                        <div class="body">
                            <div class="title-wrap">
                                <a href="{{ route('posts.show',$post->id) }}" class="title"
                                   target="_blank">{{ $post->title }}</a>
                            </div>
                             <div class="meta-wrap clearfix">
                                 <a href="{{route('users.show',$post->user->id)}}" class="meta-label">
                                     <span class="author">{{ $post->user->name }}</span></a>
                                 <span class="meta-label">
                                     <span><a href="{{ route('categories.show',$post->category->id) }}"
                                              class="category">{{ $post->category->name }}</a></span>
                                 </span>
                                 <span class="date meta-label">{{ $post->created_time }}</span> <span
                                         class="view meta-label">{{ $post->view_count }}次围观</span>
                             </div>
                        </div>
                        <div class="cover">
                            <img src="https://cangku.in/wp-content/uploads/2018/06/dae8d342fbf2b211ba0e56bec68065380dd78e74.jpg">
                            </div>
                    </div>
                </section>
            </div>
        </div>
        @endforeach
    </span>
</div>