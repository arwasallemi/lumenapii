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
        'nbrJour','date_abscence','date_retour','motif_abscence','employeur_id'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
