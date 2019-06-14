<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListeBonSortie extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='listebonsortie';
    protected $fillable = [
        'ref','qte','bonSortie_id'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}