<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bonsortie extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='bonsortie';
    protected $fillable = [
         'dateSortie','dateRetour','dateEvenement',
         'transporteur_nom','transporteur_tel',
         'nom_client', 'etat','evenement','matricule','adresse_livraison'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
