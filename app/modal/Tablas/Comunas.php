<?php

namespace App\modal\Tablas;

use Illuminate\Database\Eloquent\Model;

class Comunas extends Model
{
    protected $table = 'Comunas';

    protected $fillable = ['name'];

    public function regiones() {
        return $this->belongsTo('App\modal\Tablas\Regiones');
    }
}
