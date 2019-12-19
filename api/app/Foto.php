<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    protected $fillable = ['url'];

    function imovel() {
        return $this->belongsTo('App\Imovel');
    }
}
