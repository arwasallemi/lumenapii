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
         'dateSortie','dateRetour','dateCreation','dateEvenement','dateDebutEvenement','dateFinEvenement','rue','chauffeur_externe_nom','chauffeur_externe_tel','codePostal',
         'etat','evenement','retour','matricule','client_id','region_id','entrepot_id','employeur_id'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
