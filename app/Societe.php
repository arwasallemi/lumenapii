<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Societe extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='societe';
    protected $fillable = [
<<<<<<< HEAD
       'nom','siege','MF','tel1','tel2','tel3','RIB','image',
=======
       'nom','siege','MF','tel1','tel2','tel3','RIB','alt'
>>>>>>> ef62c1cde5edd9564b7b42ffaefb6f43c90283c1
     
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
