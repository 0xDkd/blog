<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function index(Category $category)
    {
        $children = $category->childrenWithoutRelationArray(1);
        var_dump($children);
        $all = array_push($children, $category->id);
        dd($all);
        $categoris = Post::where('category_id', $all)->paginate(10);
        dd($categoris);
    }

    public function show(Category $category)
    {
        $fathers = $category->all()->filter(function ($item) {
            return $item->parent_id == null;
        });
        $arr_fathers = $fathers->toArray();
        $is_father = false;
        foreach ($arr_fathers as $father) {
            if ($father['id'] === $category->id) {
                $is_father = true;
                break;
            }
        }
        if ($is_father) {
            $children_id = $category->childrenWithoutRelationArray($category->id);
            array_push($children_id, $category->id);
            $children = $category->all()->filter(function ($item) use($children_id){
               if (in_array($item->id,$children_id)){
                   return $item;
               }
            });
            $posts = Post::whereIn('category_id', $children_id)->paginate(9);
            //dd($posts,$children);
            return view('categories.show', compact('posts', 'children'));
        }
        $posts = Post::where('category_id', $category->id)->paginate(9);
        return view('categories.show', compact('posts'));
    }


}
