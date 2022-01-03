<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //factory(App\Models\Post::class, 25)->create();
       \App\Models\Post::factory()->count(25)->create(); 
    }
}
