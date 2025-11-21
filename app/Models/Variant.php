<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    //fillable fields
    protected $fillable = [
        'product_id',
        'option_id',
        'value',
        'additional_price',
        'quantity',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
