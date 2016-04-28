<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class user extends Authenticatable
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'type',
        'enabled',
    ];

    protected $hidden = [
        'password', 'rememberToken',
    ];

    public function todos(){
        return $this->hasMany('\App\todo');
    }
}