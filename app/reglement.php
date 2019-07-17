<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reglement extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='reglement';
    protected $fillable = [
        'societe','date','cpte_aCrediter','mode_regl',
       'num_cheque','emetteur','banque','commentaire','refFacture'
     
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
