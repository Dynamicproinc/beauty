<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StockEntry extends Model
{
   protected $fillable = ['user_id', 'status'];

    public function items()
    {
        return $this->hasMany(StockEntryItem::class);
    }
}
