<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StockSnapshotItems extends Model
{
    //fillable
    protected $fillable = [
        'stock_snapshot_id',
        'product_id',
        'name',
        'sku',
        'brand',
        'url',
        'unit_of_measure',
        'unit_price',
        'retail_price',
        'special_form_name',
        'reference_price',
        'reference_price_date',
        'base_price',
        'base_price_date',
        'date_added',
        'barcode',
        'availability'
    ];
}
