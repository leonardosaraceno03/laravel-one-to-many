<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {
            $newPost = new Post();

            $newPost->title = $faker->name();
            $newPost->content = $faker->sentence();


            $newPost->save();
        }
    }
}
