<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SoldeConge extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='soldeconge';
    protected $fillable = [

       'solde'
     
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
