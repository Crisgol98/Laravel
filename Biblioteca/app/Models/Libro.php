<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table = 'libros'; // Especifica el nombre de la tabla si no sigue la convención de nombres

    protected $fillable = ['titulo', 'editorial', 'precio', 'autor_id'];

    public function autor()
    {
        return $this->belongsTo(Autor::class, 'autor_id');
    }
}