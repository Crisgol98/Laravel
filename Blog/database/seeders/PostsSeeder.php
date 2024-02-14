<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use \App\Models\Post;
use \App\Models\Usuario;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userIds = Usuario::pluck("id");
        $nPosts = 10;
        $faker = Faker::create();
        for ($i = 0; $i < $nPosts; $i++) {
            $post = new Post();
            $post->titulo = "Libro de " . $faker->firstName;
            $post->contenido = $faker->text;
            $post->usuario_id = $userIds->random();
            $post->save();
        }

    }
}
