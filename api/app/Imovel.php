<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    protected $fillable = ['titulo', 'descricao', 'endereco'];

    function fotos() {
        return $this->hasMany('App\Foto');
    }

    function visitas() {
        return $this->hasMany('App\Visita');
    }

    protected $table = "imoveis";
}
