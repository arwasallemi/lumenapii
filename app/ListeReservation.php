<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListeReservation extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='listereservation';
    protected $fillable = [
        'produit','qte','reservation_id'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}