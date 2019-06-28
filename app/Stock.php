<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='stock';
    protected $fillable = [
       'qte','entrepot','produit',
     
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
