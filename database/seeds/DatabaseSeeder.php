<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    $faker = Faker\Factory::create();
    for ($i=0; $i < 50; $i++) { 
    DB:table('posts')->insert([
    'title' => $faker->name,
    'content' => $faker->paragraph,
    'date' => '2017-02-17'
        ]);
    
        }
    }
}
