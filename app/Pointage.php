<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pointage extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='pointage';
    protected $fillable = [
        'date_pointage','heure_debut_matin','heure_fin_matin', 'heure_debut_soir','heure_fin_soir','employeur_id'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
