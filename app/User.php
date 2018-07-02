<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nickname','name', 'email', 'password','type','active','points','softDeletes','last_logged_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function profile(){
        return $this->hasOne(UserProfile::class)
            ->withDefault([
                'nickname'  => 'Gest'.rand(100,999)
            ]);
    }

    public function getProfileAttribute(){
        return $this->profile()->firstOrNew([]);
    }
    public static function getAdmin(){
        return static::firstOrCreate([
            'email' => 'hermann@berkhoff.cl',
        ],[
            'name'  => 'Hermann creado por firstOrCreate ',
            'password'=> bcrypt('123456'),
        ]);
    }
    Public static function filterAndPaginate($name,$type)
    {
        return User::name($name)
            ->type($type)
            ->orderBy('id')
            ->paginate(15);
    }
    public function scopeName($query, $name)
    {
        if (trim($name) !="")
        {
            $query->where('name',"LIKE", "%$name%");
        }
    }

    public function scopeType($query, $type)
    {
        $types = config('options.types');

        if ($type != ""&& isset($types[$type]))
        {
            $query->where('type',$type);
        }
    }
    public static function findByNameOrEmail($term)
    {
        return static::select('id','name','email')
            ->Where('name','LIKE',"%$term%")
            ->orwhere('email','LIKE',"%$term%")
            ->get();
    }
}
