<?php

use Faker\Generator as Faker;

factory(App\Comments::class, 50)->create()->each(function ($u) {
    $u->posts()->save(factory(App\Posts::class)->make());
});
