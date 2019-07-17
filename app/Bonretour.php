<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bonretour extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='bonretour';
    protected $fillable = [
         'dateRetour','transporteur_nom','matricule','transporteur_tel','etat','note','equipe_name','entrepot'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
