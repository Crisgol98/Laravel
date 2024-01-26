<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $table = 'autores'; // Especifica el nombre de la tabla si no sigue la convención de nombres

    protected $fillable = ['nombre', 'nacimiento'];

    public function libros()
    {
        return $this->hasMany(Libro::class, 'autor_id');
    }
}
