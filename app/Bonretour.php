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
         'dateRetour','dateCreation','chauffeur_externe_nom','matricule','chauffeur_externe_tel','etat','note','employeur_id','bonSortie_id'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
