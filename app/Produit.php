<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='produit';
    protected $fillable = [
        'libelle', 'ref','categorie','note','prix_location','prix_location_minimale', 'qrCode', 'codeBarre','image','tva'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}