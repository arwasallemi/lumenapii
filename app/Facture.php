<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='facture';
    protected $fillable = [
       'ref','societe','type',
       'remise','date','condition_regl',
       'date_limite_reglement','mode_regl',
       'cpte_bancaire','montant_Ht','montant_tva','montant_ttc','etat','projet','incoterms'
     
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
