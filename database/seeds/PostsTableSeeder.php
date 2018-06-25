<?php

use Illuminate\Database\Seeder;

use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = factory(Post::class)->times(50)->make();

        Post::insert($posts->toArray());

        for ($i=1;$i<6;$i++){
            $post = Post::find($i);
            $post->user_id = 1;
            $post->save();
        }

    }
}
