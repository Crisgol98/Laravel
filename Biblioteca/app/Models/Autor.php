<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $table = 'autor';
    public function libros()
    {
        return $this->hasMany(Libro::class);
    }
}
