<?php
/**
 * Created by aimer.
 * User: aimer
 * Date: 2018/7/1
 * Time: 下午11:50
 */

namespace App\Traits;




trait Unlimited
{

    private $children = [];

    protected $collection;

    /**
     * @desc 返回数组
     * @return mixed
     */
    public function childrenWithRelationArray()
    {
        dd($this->collection);
        return $this->collection->toArray();
    }
    /**
     * @desc 返回无序的所有子节点 数组
     * @return array
     */
    public function childrenWithoutRelationArray()
    {
        $children = $this->childrenWithRelationArray();
        $this->doChildrenWithoutRelation($children);
        return $this->children;
    }

    /**
     * @desc 递归得到子节点
     * @param array $arr
     */
    private function doChildrenWithoutRelation(array $arr)
    {
        foreach ($arr as $child) {
            if (is_array($child['all_children'])) {
                $this->children[] = $child['id'];
                $this->doChildrenWithoutRelation($child['all_children']);
            }
        }
    }
}