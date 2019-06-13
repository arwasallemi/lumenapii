<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perte extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='perte';
    protected $fillable = [
       'ref','qte','bonRetour_id',
     
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
