<?php

use Faker\Generator as Faker;
use App\Models\Blog;

$factory->define(App\Models\Blog::class, function (Faker $faker) {
    return [
          'title'   => $faker->title,
          'content' => $faker->paragraph,
          'user_id' => function () {
          return factory(App\User::class)->create()->id;
          }
        
    ];
});
