<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $fillable = ['description','feature'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
