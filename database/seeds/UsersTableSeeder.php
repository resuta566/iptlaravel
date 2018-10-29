<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // factory(App\Users::class, 10)->create();

        $faker = Faker::create();
        foreach(range(1,30) as $index){
           
        DB::table('users')->insert([
            'name' => $faker->name,
            'email' => $faker->email,
            'password' => bcrypt(str_random(40))
        ]);
    }
    }
}
