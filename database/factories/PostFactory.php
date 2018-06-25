<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Post::class, function (Faker $faker) {
    return [
        'title'=>$faker->sentence,
        'content'=>$faker->paragraph,
        //暂时随机生成
        'excerpt'=>$faker->paragraph,
        'user_id'=>mt_rand(1,50),
        'last_reply_user_id'=>mt_rand(1,50),
        'category_id'=>mt_rand(1,20),
    ];
});
