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
       'nom','siege','MF','tel1','tel2','tel3','RIB','image',
     
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
