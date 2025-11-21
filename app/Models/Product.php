<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use App\Models\Media;
// use App\Models\Category;
// use App\Models\Supplier;

class Product extends Model
{
    protected $casts = [
    'tax' => 'boolean',
    'auto_update_quantity' => 'boolean',
    'out_of_stock' => 'boolean',
    'track_quantity' => 'boolean',
];

    public function media()
    {
        return $this->hasMany(Media::class);
    }

    public function getImage(){
        return Media::where('product_id', $this->id)->first();
    }

    public function getCategory()
    {
        return categories::where('id', $this->category_id)->first();
    }
    public function getSupplier()
    {
        return Supplier::where('id', $this->supplier_id)->first();
    }

    

    public function variants()
    {
        return $this->hasMany(Variant::class);
    }

    public function getVariants(){
        return Variant::where('product_id', $this->id)->orderBy('value', 'asc')->get();
    }
    public function getHighlight(){
        return Highlight::where('product_id', $this->id)->get();
    }

    public function nutrition()
    {
        return $this->hasOne(Nutrition::class);
    }

    public function cooking_instructions()
    {
        return $this->hasOne(CookingInstruction::class);
    }

    public function getProductInformation(){
        return ProductInformation::where('product_id', $this->id)->get();
    }
}
