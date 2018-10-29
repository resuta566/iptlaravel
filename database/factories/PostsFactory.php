<?php

use Faker\Generator as Faker;

factory(App\Posts::class, 50)->create()->each(function ($u) {
    $u->posts()->save(factory(App\Users::class)->make());
});
