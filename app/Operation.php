<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='operation';
    protected $fillable = [
       'dateMouvement','motifMouvement','entrepotDestin_id','entrepotOrigin_id'
     
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
