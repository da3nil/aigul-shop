<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word(),
        'content' => $faker->text(150),
        'img' => 'images/default.png',
        'category_id' => $faker->numberBetween(1,5),
        'price' => $faker->numberBetween(99, 14999)
    ];
});
