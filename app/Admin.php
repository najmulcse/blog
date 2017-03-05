<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //

    protected $fillable = [
        'name', 'email', 'password',
    ];


    public function admin()
    {
        return $this->belongsTo('App\Admin');
    }
    public function login(){

    }

}

