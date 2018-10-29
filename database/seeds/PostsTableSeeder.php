<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Posts::class, 10)->create();

        $faker = Faker::create();
        foreach(range(1,30) as $index){
           
        DB::table('posts')->insert([
            'user_id' => $faker->randomElement(App\Users::pluck('id')->toArray()),
            'title' => $faker->sentence,
            'body' => $faker->paragraph,
        ]);
    }
    }
}
