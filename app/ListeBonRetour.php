<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListeBonRetour extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='listebonretour';
    protected $fillable = [
        'ref','qte','bonRetour_id'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}