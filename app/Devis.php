<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Devis extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='devis';
    protected $fillable = [
        'delai','date','duree','condition','mode','note','deteLivraison','client','remise'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}