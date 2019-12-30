<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductSizeQuantity extends Model
{
    protected $table = 'product_size_quantity';

    protected $fillable = ['product_id', 'size', 'quantity'];

    public function product() {
        return $this->belongsTo('App\Product');
    }
}
