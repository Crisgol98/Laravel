<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        "titulo",
        "contenido"
    ];

    function usuario() {
        return $this->belongsTo(Usuario::class);
    }

    function comentario() {
        return $this->hasMany(Comentario::class);
    }
}
