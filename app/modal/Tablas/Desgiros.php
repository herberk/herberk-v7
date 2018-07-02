<?php

namespace App\modal\tablas;

use Illuminate\Database\Eloquent\Model;

class Desgiros extends Model
{
    protected $fillable = ['name'];

    protected $table = 'desgiros';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    Public function giros()
    {
        return $this->hasMany(Giros::Class);
    }
}
