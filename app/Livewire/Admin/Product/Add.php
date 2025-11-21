<?php

namespace App\Livewire\Admin\Product;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use App\Models\Option;
use App\Models\Product as ProductModel;
use App\Models\Variant;
use App\Models\Categories;
use App\Models\Supplier;
use App\Models\Media;
use Illuminate\Support\Str;


class Add extends Component
{
    public $options;
    public $option_id, $o_value, $url;
    public $url_modal = false;
    public $title, $description, $discounted_price, $original_price, $tax, $cost_per_item;
    public $sku, $barcode, $quantity = 0, $auto_update_quantity = false, $out_of_stock = false, $track_quantity = false;
    public $category_id = 1, $supplier_id = 1, $tags, $status = 'draft';
    public $meta_title, $meta_description, $meta_keywords;
    public $slug, $is_digital = false, $digital_file;
    public $deleted = false;
    public $variants = [];
    public $urls = [];
    public $categories = []; 
    public $suppliers = [];   
    
    public function render()
    {
        return view('livewire.admin.product.add');
    }

    public function mount(){
      
        // seeion clear session
         session()->forget('variants');
        session()->forget('urls');

        $this->options = Option::all();
        $this->variants = session('variants', []);
         $this->urls = session('urls', []);
         $this->categories = Categories::all();
         $this->suppliers = Supplier::all();
           
        
    }

    public function addVariant()
{
    
    $this->validate([
        'option_id' => 'required|string',
        'o_value'  => 'required|string',
    ]);

    $variants = session()->get('variants', []);

    // Check if the combination already exists
    foreach ($variants as $variant) {
        if ($variant['option_id'] == $this->option_id && $variant['value'] == $this->o_value) {
            // Do not add duplicate
            return;
        }
    }

    $variants[] = [
        'option_id' => $this->option_id,
        'value'       => $this->o_value,
        // need init qty and price
        'quantity'    => 0,
        'price'       => 0,
    ];
   
    $options = Option::where('id', $this->option_id)->first();
    session()->put('variants', $variants);
     $this->variants = session('variants', []);
}

public function removeVariant($index){
    $variants = session()->get('variants', []);
    if(isset($variants[$index])){
        unset($variants[$index]);
        session()->put('variants', $variants);
    }
}

public function addUrl(){
    $this->validate([
        'url' => 'required|url',
    ]);

    $urls = session()->get('urls', []);
    $urls[] = $this->url;
    session()->put('urls', $urls);
    $this->urls = $urls;
    $this->url = '';
    $this->url_modal = false;
}

    public function save(){

        dd($this->description);


    }

    public function urlModal(){
        $this->url_modal = !$this->url_modal;
    }
    public function closeUrlModal(){
        $this->url_modal = false;
    }

    public function saveProduct(){
       
       
     try {
         $this->validate([

            'title' => 'required|string|max:255',
            'description' => 'nullable|string', 
            'discounted_price' => 'required|numeric',
            'original_price' => 'nullable|numeric',
            'tax' => 'nullable|boolean',
            'cost_per_item' => 'nullable|numeric',
            'sku' => 'nullable|string|max:100',
            'barcode' => 'nullable|string|max:100',
            'quantity' => 'required|integer|min:0',
            'category_id' => 'nullable|exists:categories,id',
            'supplier_id' => 'nullable|exists:suppliers,id',
            'status' => 'required|in:draft,active,archived',
            'tags' => 'nullable|string|max:255',
            'auto_update_quantity' => 'boolean',
            'out_of_stock' => 'boolean',
            'track_quantity' => 'boolean',


            // 'meta_title' => 'nullable|string|max:255',
            // 'meta_description' => 'nullable|string|max:255',
            // 'meta_keywords' => 'nullable|string|max:255',
            // 'slug' => 'required|string|max:255|unique:products,slug',
            // 'is_digital' => 'boolean',
            // 'digital_file' => $this->is_digital ? 'required|string|max:255' : 'nullable|string|max:255',
        ]);

        $product = new Product();
        $product->user_id = auth()->user()->id;
        $product->title = $this->title;
        $product->description = $this->description;
        $product->discounted_price = $this->discounted_price;
        $product->original_price = $this->original_price;
        $product->tax = $this->tax;
        $product->cost_per_item = $this->cost_per_item;
        $product->sku = $this->sku;
        $product->barcode = $this->barcode;
        $product->quantity = $this->quantity;
        $product->auto_update_quantity = $this->auto_update_quantity;
        $product->out_of_stock = $this->out_of_stock;
        $product->track_quantity = $this->track_quantity;
        $product->category_id = $this->category_id;
        $product->supplier_id = $this->supplier_id;
        $product->tags = $this->tags;
        $product->status = $this->status;
        $product->meta_title = '';
        $product->meta_description = '';
        $product->meta_keywords = '';
        $product->slug = Str::slug($this->title);
        if($product->save()){
            // Save variants
            
        if (!empty($this->variants)) {
            foreach ($this->variants as $variant) {
                $vr = Variant::create([
                    'product_id'   => $product->id,
                    'option_id'    => $variant['option_id'],
                    'value'        => $variant['value'],
                    'additional_price' => $variant['price'] ?? 0,
                    'quantity'     => $variant['quantity'] ?? 0,
                ]);
            }
        }

            // Save URLs
            $this->urls = session()->get('urls', []);
            if(!empty($this->urls)) {
            foreach($this->urls as $url){
               $media = Media::create([
                    'product_id' => $product->id,
                    'file_path' => $url,
                    'file_type' => null,
                    'alt_text' => null,
               ]);
            }
        }

            // Clear session data
           
            session()->forget('variants');
            session()->forget('urls');
            
            $this->variants = [];
            $this->urls = [];

            // Redirect or show success message
            session()->flash('message', 'Product created successfully.');
          


            return redirect()->route('admin.products.edit', $product->id);
        }
        
     } catch (\Throwable $th) {
        dd($th->getMessage());
     }
           
            
      
    }
}
