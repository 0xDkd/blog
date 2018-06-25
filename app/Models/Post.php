<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
