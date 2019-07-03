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
>>>>>>> 3f5331b6183801143a7228e35aac859c739832ef
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}