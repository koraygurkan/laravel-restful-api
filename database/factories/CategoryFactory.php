<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Category::class, function (Faker $faker) {
    for ($i = 0; $i < 30; $i++) {
        $category_name = rtrim($faker->sentence(1), '.');
        return [
            'name' => $category_name,
            'slug' => Str::slug($category_name)
        ];
    }
});
