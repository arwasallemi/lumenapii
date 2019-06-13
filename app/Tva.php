<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tva extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='tva';
    protected $fillable = [
        'valeur',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
