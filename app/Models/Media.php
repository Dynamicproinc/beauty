<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    //fillable fields
    protected $fillable = [
        'product_id',
        'file_path',
        'file_type',
        'alt_text',
    ];

}
