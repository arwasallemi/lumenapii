<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrepot extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='entrepot';
    protected $fillable = [
       'adresse','libelle',
     
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
