<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'reservation';
    protected $fillable = [
        'nom_client', 'adresse_livraison',
        'nom_evenement','date_debut_evenement','date_fin_evenement','status'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}