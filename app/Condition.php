<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='condition_reg';
    protected $fillable = [
        'condition',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}