<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    function usuario() {
        return $this->belongsTo(Usuario::class);
    }

    function post() {
        return $this->belongsTo(Post::class);
    }
}
