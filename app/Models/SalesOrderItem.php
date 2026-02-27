<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SalesOrderItem extends Model
{
    protected $fillable = [
        'sales_order_id',
        'product_id',
        'price',
        'quantity',
    ];

    public function getProduct(){
        return Product::where('id', $this->product_id)->first();
    }
}
