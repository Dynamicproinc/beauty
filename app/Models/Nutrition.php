<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nutrition extends Model
{
    //fillable fields
    protected $fillable = [
        'product_id',
        'energy',
        'fat',
        'saturates',
        'carbohydrate',
        'sugars',
        'protein',
        'salt',
        'disclaimer',
    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
