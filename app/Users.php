<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users'; //name's table
    protected $fillable = [
      'username', 'email', 'email_canonical', 'username_canonical','password'
    ];
    protected $hidden = [
        'password'
    ];
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
 
}

