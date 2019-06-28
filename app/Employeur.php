<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employeur extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='employeur';
    protected $fillable = [
         'name','sexe','cin','email','tel','adresse'
     
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
