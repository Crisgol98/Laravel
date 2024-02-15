<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use \App\Models\Post;
use \App\Models\Usuario;
use \App\Models\Comentario;

class ComentariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $userIds = Usuario::pluck("id");
        $posts = Post::all();
        $nPosts = 3;
        foreach($posts as $post) {
            for ($i = 0; $i < $nPosts; $i++)  {
                $comentario = new Comentario();
                $comentario->contenido = $faker->text;
                $comentario->usuario_id = $userIds->random();
                $comentario->post_id = $post->id;
                $comentario->save();
            }
        }
    }
}
