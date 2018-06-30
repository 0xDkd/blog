<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    private $children = [];

    public function index(Category $category)
    {
        //$categories = Category::with('allChildrenCategories')->find(1);
        $categories = $this->getCategories(1);
        $children = $this->getChildrenWithNoRelation($categories);
        dd($this->children);
    }

    public function show(Category $category)
    {
        //$posts = Post::where($)
    }

    private function getCategories($c_id)
    {
        $categories = Category::with('allChildrenCategories')->find($c_id);
        $children = $categories->allChildrenCategories->toArray();
        return $children;

    }

    private function getChildrenWithNoRelation(array $arr)
    {
        foreach ($arr as $child){
            if (is_array($child['all_children_categories'])){
                $this->children[] = $child['id'];
                $this->getChildrenWithNoRelation($child['all_children_categories']);
            }
        }
        return $this->children;
    }
}
