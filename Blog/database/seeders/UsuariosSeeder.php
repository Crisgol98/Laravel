<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use \App\Models\Usuario;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nUsuarios = 5;
        $faker = Faker::create();
        for ($i = 0; $i < $nUsuarios; $i++) {
            $usuario = new Usuario();
            $usuario->name = $faker->firstName;
            $usuario->password = $faker->sentence;
            $usuario->save();
        }

    }
}
