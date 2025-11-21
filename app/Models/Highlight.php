<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Highlight extends Model
{
    protected $fillable = ['product_id', 'highlight_text'];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
