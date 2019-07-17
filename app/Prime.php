<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prime extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='prime';
    protected $fillable = [

       'type_prime','montant_prime',
     
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
