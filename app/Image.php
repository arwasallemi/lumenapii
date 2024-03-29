<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='image';
    protected $fillable = [
       'url','alt'
     
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
