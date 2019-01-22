<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['pec','name','firstname','service','bureau'];

    /**
    *The attributes that should be hidden for arrays.
    *
    *@var array
    */
    protected $table = 'users';
}
