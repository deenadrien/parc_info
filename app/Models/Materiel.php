<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materiel extends Model
{
    protected $fillable = ['name','type','os','serial','brand','model','numcot','user','soft'];

    /**
    *The attributes that should be hidden for arrays.
    *
    *@var array
    */
    protected $table = 'materiels';
}
