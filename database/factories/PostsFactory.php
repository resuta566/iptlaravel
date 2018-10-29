<?php

use Faker\Generator as Faker;

$factory->define(Posts::class, function (Faker\Generator $faker) {
    return [
        'user_id' => $faker->randomElement(Users::pluck('id')->toArray()),
        'title' => $faker->paragraph,
        'body' => $faker->paragraph,
    ];
});
