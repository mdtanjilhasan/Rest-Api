<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'details' => $faker->paragraph,
        'price' => $faker->numberBetween(100,1000),
        'stok' => $faker->randomDigit,
        'discount' => $faker->numberBetween(2,30)
    ];
});
