<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Produtos;
use Faker\Generator as Faker;

$factory->define(Produtos::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'price' => $faker->randomFloat(2, 0, 9999),
        'description' => $faker->text(200),
        'img' => $faker->imageUrl(500, 550, 'cats'),
        'discount' => $faker->randomFloat(2, 0, 1),
        'size_id' => $faker->randomDigitNotNull,
        'brand_id' => $faker->randomDigitNotNull,
    ];
});
