<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='ville';
    protected $fillable = [
        'nom',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
