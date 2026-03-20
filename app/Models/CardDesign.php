<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CardDesign extends Model
{
    protected $fillable = [
        'user_id', 'category', 'file_path', 'status'
    ];
}
