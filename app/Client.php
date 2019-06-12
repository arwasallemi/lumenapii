<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'client'; //name's table
    protected $fillable = [
      'nom', 'email', 'prenom', 'sexe', 'tel', 'nom_societe','region_id','adresse'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}

