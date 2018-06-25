<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->index()->comment('文章标题');
            $table->text('content')->comment('文章内容');
            $table->text('excerpt')->comment('文章截取-SEO 使用');
            $table->integer('user_id')->unsigned()->index()->comment('用户 ID');
            $table->integer('last_reply_user_id')->unsigned()->default(0)->comment('最后评论的用户 ID');
            $table->integer('category_id')->unsigned()->index()->comment('分类 ID');
            $table->string('tags')->index()->nullable()->comment('标签');
            $table->integer('reply_count')->unsigned()->default(0)->comment('回复数量');
            $table->integer('view_count')->unsigned()->default(0)->comment('文章浏览量');
            $table->integer('order')->unsigned()->default(0)->comment('作为排序使用');
            $table->string('slug')->nullable()->comment('友好 URL');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
