<?php

namespace App\model\empresas;

use Illuminate\Database\Eloquent\Model;

class banco extends Model
{
    protected $fillable = [
        'name',
        'ctacte',
        'firman',
        'montoLin',
        'empresa_id',
        ];
}
