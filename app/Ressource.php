<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ressource extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'resource';
    protected $fillable = [
        'matricule', 'libelle',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}