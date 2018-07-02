<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = factory(Category::class)->times(20)->make();

        Category::insert($categories->toArray());

        //随机选取id 为 1-20的作为父节点
        for ($i=0;$i<20;$i++){
            $parent_id = mt_rand(2,20);
            $id = mt_rand(2,20);
            if ($id === $parent_id){
                $i--;
                continue;
            }else{
                $category = Category::find($id);
                $category->parent_id = $parent_id;
                $category->save();
            }
        }
        //单独构造一个3级分类
        /**
         * 1
         *    2
         *       11
         */
        $id = mt_rand(1,10);

        $category = Category::find(11);
        $category->parent_id = 2;
        $category->save();
        $category = Category::find(2);
        $category->parent_id = 1;
        $category->save();
        $category = Category::find(3);
        $category->parent_id = 1;
        $category->save();
    }
}
