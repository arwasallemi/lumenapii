<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListeDevis extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='listedevis';
    protected $fillable = [
        'produit','qte','devis_id',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
