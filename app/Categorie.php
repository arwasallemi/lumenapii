<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='categories';
    protected $fillable = [
        'categorie',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
