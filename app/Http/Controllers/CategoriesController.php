<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function index(Category $category)
    {
        $categories = Category::with('allChildrenCategories')->find(2);
        dd($categories->allChildrenCategories->toArray());
    }
}
