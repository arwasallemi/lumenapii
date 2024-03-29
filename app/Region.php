<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='region';
    protected $fillable = [
        'nom', 'ville_id',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
