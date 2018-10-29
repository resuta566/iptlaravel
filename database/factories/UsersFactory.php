<?php

use Faker\Generator as Faker;

$factory->define(Users::class, function (Faker $faker){
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(40))
    ];
});
