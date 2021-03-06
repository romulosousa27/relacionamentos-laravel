<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    public function empresas(){
        return $this->belongsToMany(Empresa::class, 'empresa_cidade');
    }

    public function comentarios(){
        return $this->morphMany(Comentario::class, 'comentable');
    }
}
