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
        $faker = Faker::create();
        $nPosts = 3;
        $usuarios = Usuario::all();
        foreach($usuarios as $usuario) {
            for ($i = 0; $i < $nPosts; $i++) {
                $post = new Post();
                $post->titulo = "Post de " . $faker->firstName;
                $post->contenido = $faker->text;
                $post->usuario_id = $usuario->id;
                $post->save();
            }
        }

    }
}
