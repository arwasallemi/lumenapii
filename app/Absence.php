<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='abscence';
    protected $fillable = [
        'nbrJour','date_abscence','date_debut_abscence',
        'date_fin_abscence','motif_abscence','employeur_id'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
