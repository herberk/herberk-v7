<?php

namespace App\modal\empresas;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class contacto extends Model
{
    use SoftDeletes;

    protected $table = 'contactos';
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'rut',
        'name',
        'email',
        'fono',
        'notas',
        'softDeletes'
    ];

    public function empresas() {
        return $this->belongsTo('App\modal\empresas\empresa','empresa_id');
    }
}
