<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
//    protected $fillable = [
//        'title', 'content', '',
//    ];

    /**
     * @desc 获取一级子节点
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function childCategory() {
        return $this->hasMany('App\Models\Category', 'parent_id', 'id');
    }

    /**
     * @desc 获取到所有的子节点
     * @return $this
     */
    public function allChildrenCategories()
    {
        return $this->childCategory()->with('allChildrenCategories');
    }

}
