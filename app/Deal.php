<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    protected $table = 'deals';

    protected $fillable = [
        'id', 'user_cart_id', 'name', 'street', 'district', 'city', 'sale_id',
        'phone', 'email', 'payment', 'create_at', 'status_payment', 'status', 'note', 'updated_at'
    ];
}
