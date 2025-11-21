<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductInformation extends Model
{
  protected $fillable = [
        'product_id',
        'title',
        'content',
        'order'
        
    ];

    public function gettitle(){
      return PageInformationTitle::where('id', $this->title)->first();
    }
}
