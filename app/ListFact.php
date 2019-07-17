<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListFact extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='listfact';
    protected $fillable = [
        'produit','qte','facture_id','prix_unitaire_HT','prix_unitaire_TTC'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}