<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\User::class, function (Faker $faker) {
    static $password;
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('password'),
        'introduction' => $faker->sentence,
        'nickname'=>$faker->name,
        'remember_token' => str_random(10),
    ];
});

/**
 * 由于 Option这个比较随意，就不单独生成一个 Factory 进行数据填充了
 * User Option Factory
 */


$factory->define(\App\Models\UserOption::class,function (Faker $faker){
    $option = ['default','block'];
    return[
     'user_option_key' => 'posts_style',
     'user_option_value'=> $faker->randomElement($option),
   ];
});
