<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $fillable = [
        'titulo',
        'editorial',
        'precio',
        'autor_id',
        'id'
    ];
    public function autor()
    {
        return $this->belongsTo(Autor::class);
    }
}