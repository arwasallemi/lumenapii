<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delai extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='delai';
    protected $fillable = [
        'delai',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}