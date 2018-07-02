<?php

namespace App\modal\Tablas;

use Illuminate\Database\Eloquent\Model;

class Ciudades extends Model
{
    protected $table = 'Ciudades';
//    public $timestamps = false;
    protected $fillable = ['name'];


}
