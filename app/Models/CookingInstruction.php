<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CookingInstruction extends Model
{
    //filable fields
    protected $fillable = [
        'product_id',
        'instructions',
    ];
}
