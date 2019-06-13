<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regularisation extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='regularstock';
    protected $fillable = [
       'nom','qte','qteInitiale','nouvelleQte','motifDeRegular','dateRegular','entrepot_id','stock_id',
     
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
