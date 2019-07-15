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
        'libelle', 'ref', 'note', 'prix_location','prix_location_minimale', 'qrCode', 'codeBarre','image','categorie'
=======
        'libelle', 'ref','categorie', 'note', 'prix_location','prix_location_minimale', 'qrCode', 'codeBarre','image'

>>>>>>> 577d619ef2ab491e62e45ddf47d956aec702ea12
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
