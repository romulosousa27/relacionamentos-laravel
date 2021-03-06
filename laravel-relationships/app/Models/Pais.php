<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $fillable = ['name'];

    public function local(){
        return $this->hasOne(Localizacao::class);
    }
    
    public function estados(){
        return $this->hasMany(Estado::class);
    }

    public function cidades(){
        return $this->hasManyThrough(Cidade::class, Estado::class);
    }

    public function comentarios(){
        return $this->morphMany(Comentario::class, 'comentable');
    }
}
