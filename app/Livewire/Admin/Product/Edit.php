<?php

namespace App\Livewire\Admin\Product;

use Livewire\Component;
use App\Models\Product;
use App\Models\Variant;
use App\Models\Categories;
use App\Models\Supplier;
use App\Models\Media;
use Illuminate\Support\Str;
use App\Models\Option;
use App\Models\Highlight;
use App\Models\Nutrition;
use App\Models\CookingInstruction;
use App\Models\PageInformation;
use App\Models\ProductInformation;


class Edit extends Component
{
    public $product, $options, $categories, $suppliers;
    public $title, $description, $discounted_price, $original_price, $tax = 0, $cost_per_item, $category_id, $sku, $barcode, $quantity, $auto_update_quantity = true, $out_of_stock = false, $track_quantity = true, $supplier_id, $tags = [], $status;
    public $url_modal = false;
    public $url, $urls = [];
    public $variants = [];
    public $meta_title, $meta_description, $meta_keywords, $slug;
    public $option_id, $o_value;
     public $success_message = '';
    public $error_message = '';
    public $pro_highlights = [];
    public $highlight_text;
    public $nut_modal = false;
    public $energy, $fat, $saturates, $carbohydrate, $sugars, $protein, $salt, $disclaimer;
    public $cooking_instructions;
    public $product_information;
    public $info_title;
    public $info_content;
    public $product_info_modal = false;

    public function render()
    {
        return view('livewire.admin.product.edit');
    }

    public function mount($id)
    {
        
        
        if($product = Product::find($id)) {
            // assign product to the public property
            //  dd($product->cooking_instructions->instructions : null);

        $this->product = $product;

            $this->title = $product->title;
        $this->description = $product->description;
        $this->category_id = $product->category_id;
            $this->discounted_price = $product->discounted_price;
            $this->original_price = $product->original_price;
            $this->tax = $product->tax;
            $this->cost_per_item = $product->cost_per_item;
            $this->sku = $product->sku;
            $this->barcode = $product->barcode;
            $this->quantity = $product->quantity;
            $this->auto_update_quantity = $product->auto_update_quantity;
            $this->out_of_stock = $product->out_of_stock;
            $this->track_quantity = $product->track_quantity;
            $this->supplier_id = $product->supplier_id;
            $this->tags = $product->tags;
            $this->status = $product->status;
            // $this->meta_title = $product->meta_title;
            // $this->meta_description = $product->meta_description;
            // $this->meta_keywords = $product->meta_keywords;
            // $this->slug = $product->slug;
            // $this->is_digital = $product->is_digital;
            // $this->digital_file = $product->digital_file;
            // $this->deleted = $product->deleted;
        // mount other product properties as needed
        $this->options = Option::all();
        $this->categories = Categories::all();
        $this->suppliers = Supplier::all();
        $this->product_information = ProductInformation::where('product_id', $this->product->id)->get();
        // $this->pro_hightlights = $product->highlights;
       $this->cooking_instructions = $product->cooking_instructions ? $product->cooking_instructions->instructions : null;
        // if product has media
        if ($product->media && $product->media->count() > 0) {
            $this->urls = $product->media;
           
        } else {
            $this->urls = [];
        }
        
        $this->variants = $product->variants->map(function ($variant) {
        return [
            'id' => $variant->id,
            'option_id' => $variant->option_id,
            'value' => $variant->value,
            'additional_price' => $variant->additional_price,       // <-- important
            'quantity' => $variant->quantity, // <-- important
        ];
    })->toArray();

        }else {
            // Handle the case where the product is not found
            abort(404, 'Product not found');
        }

        
    }

    public function addVariant()
    {
        $this->validate([
            'option_id' => 'required|exists:options,id',
            'o_value' => 'required|string|max:255',
        ], [
            'option_id.required' => 'Please select an option.',
            'option_id.exists' => 'Selected option does not exist.',
            'o_value.required' => 'Please enter a value for the option.',
            'o_value.string' => 'The value must be a string.',
            'o_value.max' => 'The value may not be greater than 255 characters.',
        ]);
        // Check if the variant already exists for this product
        $existingVariant = Variant::where('product_id', $this->product->id)
            ->where('option_id', $this->option_id)
            ->where('value', $this->o_value)
            ->first();
        if ($existingVariant) {
            $this->error_message = 'This variant already exists for the product.';
            return;
        }
        // $vr = Variant::create([
        //             'product_id'   => $this->product->id,
        //             'option_id'    => $this->option_id,
        //             'value'        => $this->o_value,
                   
        //         ]);
        $vr = [
            'id' => null, // New variant, so ID is null
            'option_id' => $this->option_id,
            'value' => $this->o_value,
            'additional_price' => 0, // <-- important
            'quantity' => 0, // <-- important
        ];
        $this->variants[] = $vr;
    }

   public function updateVariants()
    {
        foreach ($this->variants as $variantData) {
            if (isset($variantData['id'])) {
                $variant = Variant::find($variantData['id']);
                // Check if the variant exists also removed from the list must be deleted
                if ($variant) {
                    $variant->option_id = $variantData['option_id'];
                    $variant->value = $variantData['value'];
                    $variant->additional_price = $variantData['additional_price'] ?? 0; // <-- important
                    $variant->quantity = $variantData['quantity'] ?? 0; // <-- important
                    $variant->save();
                    $this->success_message = 'Variants updated successfully!';
                }
                
                
            } else {
                // Create new variant if it doesn't exist
                Variant::create([
                    'product_id' => $this->product->id,
                    'option_id' => $variantData['option_id'],
                    'value' => $variantData['value'],
                    'additional_price' => $variantData['additional_price'] ?? 0, // <-- important
                    'quantity' => $variantData['quantity'] ?? 0, // <-- important
                ]);
                  $this->success_message = 'Variants updated successfully!';
            }
        }
    }

    public function openUrlModal()
    {
        $this->url_modal = true;
    }
    public function closeUrlModal()
    {
        $this->url_modal = false;
    }

    public function addMedia(){
        $this->validate([
            'url' => 'required|url',
        ]);

        // Check if the URL already exists in the media collection
        if (Media::where('file_path', $this->url)->exists()) {
            $this->addError('url', 'This URL already exists.');
            return;
        }

        $media = new Media();
        $media->file_path = $this->url;
        $media->product_id = $this->product->id;
        $media->save();

        // Add the new media to the urls array to update the UI
        $this->urls[] = $media;

        // Clear the input field and close the modal
        $this->url = '';
        $this->url_modal = false;

        // Optionally, you can add a success message or notification here
        $this->success_message = 'Media added successfully!';
    }

    public function removeMedia($mediaId)
    {
        
        $media = Media::find($mediaId);
        if ($media) {
            $media->delete();

            // update urls property
            $updated_media = Media::where('product_id', $this->product->id)->get();
            $this->urls = $updated_media;
            $this->success_message = 'Media removed successfully!';
       
        }
    }


    
    public function removeVariant($variantId)
    {
        $variant = Variant::find($variantId);
        if ($variant) {
            $variant->delete();

           
            $updated_variants = Variant::where('product_id', $this->product->id)->get();
            $this->variants = $updated_variants;
            $this->success_message = 'Variant removed successfully!';
       
        }
        // $this->variants = array_filter($this->variants, function ($variant) use ($variantId) {
        //     return $variant['id'] !== $variantId;
        // });
    }

    public function updateProduct()
    {
      
         $this->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'discounted_price' => 'required|numeric|min:0',
            'original_price' => 'nullable|numeric|min:0',
            'tax' => 'boolean',
            'cost_per_item' => 'nullable|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
            'sku' => 'nullable|string|max:100',
            'barcode' => 'nullable|string|max:100',
            'quantity' => 'required|integer|min:0',
            'auto_update_quantity' => 'boolean',
            'out_of_stock' => 'boolean',
            'track_quantity' => 'boolean',
            'supplier_id' => 'nullable|exists:suppliers,id',
            'status' => 'required|in:active,inactive,draft',
        ]);

        $this->product->title = $this->title;
        $this->product->description = $this->description;
        $this->product->discounted_price = $this->discounted_price;
        $this->product->original_price = $this->original_price;
        $this->product->tax = $this->tax;
        $this->product->cost_per_item = $this->cost_per_item;
        $this->product->category_id = $this->category_id;
        $this->product->sku = $this->sku;
        $this->product->barcode = $this->barcode;
        $this->product->quantity = $this->quantity;
        $this->product->auto_update_quantity = $this->auto_update_quantity;
        $this->product->out_of_stock = $this->out_of_stock;
        $this->product->track_quantity = $this->track_quantity;
        $this->product->supplier_id = $this->supplier_id;
        $this->product->tags = $this->tags;
        $this->product->status = $this->status;
        $this->product->slug = Str::slug($this->title);
        if($this->product->save()){
          $this->success_message = 'Product updated successfully!';
          
            
        }else{
            $this->error_message = 'Error updating product.';
        }
       
        
}

public function addHighlight(){
    // dd($this->product->id);
    $this->validate([
        'highlight_text' => 'required|string',
    ], [
        'highlight_text.required' => 'Please enter highlight text.',
        'highlight_text.string' => 'The highlight text must be a string.',
        
    ]);
    // Check if the highlight already exists for this product
    $existingHighlight = Highlight::where('product_id', $this->product->id)
        ->where('highlight_text', $this->highlight_text)
        ->first();
    if ($existingHighlight || count($this->product->getHighlight()) >= 4) {
        $this->error_message = 'Something went wrong.';
        return;
    }
    $hl = Highlight::create([
                'product_id'   => $this->product->id,
                'highlight_text'    => $this->highlight_text,
               
            ]);
            $this->success_message = 'Highlight added successfully!';
            $this->highlight_text = '';
    // $hl = [
    //     'id' => null, // New highlight, so ID is null
    //     'text' => $highlight_text,
        
    // ];
    // $this->highlights[] = $hl;
}

public function removeHighlight($highlightId)
    {
        $highlight = Highlight::find($highlightId);
        if ($highlight) {
            $highlight->delete();

           
            $updated_highlights = Highlight::where('product_id', $this->product->id)->get();
            // $this->highlights = $updated_highlights;
            $this->success_message = 'Highlight removed successfully!';
       
        }
    }

    public function openNutiModal()
    {
        $this->nut_modal = true;
        $this->energy = $this->product->nutrition ? $this->product->nutrition->energy : '';
        $this->fat = $this->product->nutrition ? $this->product->nutrition->fat : '';
        $this->saturates = $this->product->nutrition ? $this->product->nutrition->saturates : '';
        $this->carbohydrate = $this->product->nutrition ? $this->product->nutrition->carbohydrate : '';
        $this->sugars = $this->product->nutrition ? $this->product->nutrition->sugars : '';
        $this->protein = $this->product->nutrition ? $this->product->nutrition->protein : '';
        $this->salt = $this->product->nutrition ? $this->product->nutrition->salt : '';
        $this->disclaimer = $this->product->nutrition ? $this->product->nutrition->disclaimer : '';
    }
    public function closeNutiModal()
    {
        $this->nut_modal = false;
    }

    public function saveNutiData()
    {
        $this->validate([
            'energy' => 'nullable|string|max:255',
            'fat' => 'nullable|string|max:255',
            'saturates' => 'nullable|string|max:255',
            'carbohydrate' => 'nullable|string|max:255',
            'sugars' => 'nullable|string|max:255',
            'protein' => 'nullable|string|max:255',
            'salt' => 'nullable|string|max:255',
            'disclaimer' => 'nullable|string',
        ]);
        $nutrition = Nutrition::updateOrCreate(
            ['product_id' => $this->product->id],
            [
                'energy' => $this->energy,
                'fat' => $this->fat,
                'saturates' => $this->saturates,
                'carbohydrate' => $this->carbohydrate,
                'sugars' => $this->sugars,
                'protein' => $this->protein,
                'salt' => $this->salt,
                'disclaimer' => $this->disclaimer,
            ]
        );
        $this->success_message = 'Changes saved successfully!';
        $this->nut_modal = false;

    }

    public function removeNutrition()
    {
        if ($this->product->nutrition) {
            $this->product->nutrition->delete();
            $this->success_message = 'Nutrition information removed successfully!';
        } else {
            $this->error_message = 'No nutrition information to remove.';
        }
    }

    public function saveCookingInstructions()
    {
        $this->validate([
            'cooking_instructions' => 'nullable|string',
        ]);
        $cookingInstruction = CookingInstruction::updateOrCreate(
            ['product_id' => $this->product->id],
            [
                'instructions' => $this->cooking_instructions,
            ]
        );
        $this->success_message = 'Cooking instructions saved successfully!';
        
        
        
    }

    public function removeProductInfo($id){
        $pi = ProductInformation::where('id', $id)->first();
        if($pi){
            $pi->delete();
             $this->success_message = 'Removed!';

        }
        
    }

   }
