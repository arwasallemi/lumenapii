<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ajoutstock extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='ajoutdsstock';
    protected $fillable = [
        'entrepot_id','stock_id'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
