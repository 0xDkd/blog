<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Post
 *
 * @property int $id
 * @property string $title 文章标题
 * @property string $content 文章内容
 * @property string $excerpt 文章截取-SEO 使用
 * @property int $user_id 用户 ID
 * @property int $last_reply_user_id 最后评论的用户 ID
 * @property int $category_id 分类 ID
 * @property string|null $tags 标签
 * @property int $reply_count 回复数量
 * @property int $view_count 文章浏览量
 * @property int $order 作为排序使用
 * @property string|null $slug 友好 URL
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\Models\Category $category
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereExcerpt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereLastReplyUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereReplyCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereTags($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereViewCount($value)
 * @mixin \Eloquent
 */
class Post extends Model
{
    protected $fillable = ['title','content','category_id','excerpt', 'slug','tags'];
    //关联分类表，一对一关系
    public function category()
    {
        //注意 return 一定要写
        return $this->belongsTo(Category::class);
    }
    //关联用户表,一对一关系
    public function user()
    {
        //注意 return 一定要写
        return $this->belongsTo(User::class);
    }
}
