<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salaire extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='salaire';
    protected $fillable = [

       'nbrJour','salaire_unitaire','nbrHeure_travail','nbrHeure_ajoute'
     
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
