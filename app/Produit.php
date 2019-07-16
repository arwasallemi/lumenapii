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
<<<<<<< HEAD

        'libelle', 'ref', 'note', 'prix_location','prix_location_minimale', 'qrCode', 'codeBarre','image','categorie','tva'

=======
        'libelle', 'ref','categorie', 'note', 'prix_location','prix_location_minimale', 'qrCode', 'codeBarre','image'
>>>>>>> c00af01fed304c37ff2b4c6a1d1cfee25e03e49c
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
