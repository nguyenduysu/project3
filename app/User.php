<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    protected $fillable = [
        'name', 'email', 'password', 'level'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function product() {
        return $this->hasMany('App\Product');
    }
}
