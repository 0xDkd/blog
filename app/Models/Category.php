<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'title', 'content', 'description','parent_id',
    ];

    private $children = [];

    public function posts()
    {
        $this->hasMany(Post::class);
    }

    /**
     * @desc 获得具有关系的集合并且传递给 Trait
     * @param $c_id
     * @return mixed
     */
    public function childrenWithRelationCollection($c_id)
    {
        return $this->collection = $this->find($c_id)->allChildrenCategories;
    }

    public function childrenWithRelationArray($c_id)
    {
        return $this->childrenWithRelationCollection($c_id)->toArray();
    }

    public function childrenWithoutRelationArray($c_id)
    {
        $children = $this->childrenWithRelationArray($c_id);
        $this->doChildrenWithoutRelation($children);
        return $this->children;
    }

    private function doChildrenWithoutRelation(array $arr)
    {
        foreach ($arr as $child) {
            if (is_array($child['all_children_categories'])) {
                $this->children[] = $child['id'];
                $this->doChildrenWithoutRelation($child['all_children_categories']);
            }
        }
    }

    /**
     * @desc 绑定关系
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function childCategory()
    {
        return $this->hasMany('App\Models\Category', 'parent_id', 'id');
    }

    /**
     * @desc 建立 collection 关系
     * @return $this
     */
    public function allChildrenCategories()
    {
        return $this->childCategory()->with('allChildrenCategories');
    }



}
