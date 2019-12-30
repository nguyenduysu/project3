<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserCart extends Model
{
    protected $table = 'user_cart';

    protected $fillable = ['id', 'user_id', 'cart_id'];
}
