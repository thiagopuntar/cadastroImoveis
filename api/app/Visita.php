<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visita extends Model
{
    protected $fillable = ['data'];

    function imovel() {
        return $this->belongsTo('App\Imovel');
    }
}
