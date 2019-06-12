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
        'libelle', 'ref', 'note', 'prix', 'qrCode_id', 'codeBarre_id','image_id'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}