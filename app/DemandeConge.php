<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DemandeConge extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='demandeconge';
    protected $fillable = [

       'ref','duree','date_debut','date_fin','etat','approbateur','employeur_id'

     
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
