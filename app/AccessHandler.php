<?php
/**
 * Created by PhpStorm.
 * User: Hermann Berkhoff F
 * Date: 05/09/2015
 * Time: 12:17
 */

namespace App;


class AccessHandler
{
    protected static $hierarchy =[
        'admin'  =>  4,
        'editor' =>  3,
        'user'   =>  2,
        'visit'  =>  1 
    ];

    public static function check($userRole, $requiredRole)
    {
        return static::$hierarchy[$userRole] >= static::$hierarchy[$requiredRole];
    }
}