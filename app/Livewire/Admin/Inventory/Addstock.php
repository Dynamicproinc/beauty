<?php

namespace App\Livewire\Admin\Inventory;

use Livewire\Component;
use App\Models\Product;
use App\Models\Variant;
use App\Models\StockEntry;
use App\Models\StockEntryItem;
class Addstock extends Component
{
    public $search_term = '';
    public $selected_product = null;
    public $quantity;
    public $variant;
    public $added_items = [];
    public $variants = [];
    public $show_quantity = false;

    public function render()
    {

        return view('livewire.admin.inventory.addstock',[
            'products' => Product::where('title', 'like', '%'.$this->search_term.'%')->limit(10)->get(),
        ]);
    }

    public function selectProduct($product_id){
        $this->selected_product = Product::find($product_id);
        
       
    }

    public function clearSelection(){
        $this->selected_product = null;
    }

    public function add(){
        $this->validate([
            'quantity' => 'required|numeric|min:1',
           
           
        ]);
        if(isset($this->variant)){
            $this->validate([
                'variant' => 'required|nullable|string',

            ]);
        }

        $this->added_items[] = [
            'product_id' => $this->selected_product->id,
            
            'variant' => $this->variant,
            'quantity' => $this->quantity,
        ];

        $this->variant = null;
        $this->quantity = null;

       

    }

    public function removeItem($index){
        unset($this->added_items[$index]);
        $this->added_items = array_values($this->added_items);
    }
    public function showQuantity(){
        if($this->variant){
            $variant = Variant::find($this->variant);
            if($variant){
                $this->show_quantity = $variant->quantity;
            }
        }else{
            $this->show_quantity = $this->selected_product->quantity;
        }
    }

    public function save(){
    //    save to database
         foreach($this->added_items as $item){
              // find product
              $product = Product::find($item['product_id']);
              if($product){
                // if variant is set, find variant and add stock
                if(isset($item['variant'])){
                     $variant = Variant::find($item['variant']);
                     if($variant){
                          $variant->increment('quantity', $item['quantity']);
                     }
                }else{
                     // else add stock to product
                     $product->increment('quantity', $item['quantity']);
                }
              }
         }

            // create stock entry
            $stock_entry = StockEntry::create([
                'user_id' => auth()->user()->id,
               
            ]);

            if($stock_entry){
                foreach($this->added_items as $item){
                    $sei = new StockEntryItem();
                    $sei->stock_entry_id = $stock_entry->id;
                    $sei->product_id = $item['product_id'];
                    $sei->variant = $item['variant'] ?? null;
                    $sei->quantity = $item['quantity'];
                    $sei->save();
                   
                }
            }

         // clear added items
         $this->added_items = [];
         $this->selected_product = null;
         $this->quantity = null;
         $this->variant = null;
    
         session()->flash('message', 'Stock added successfully!');
         return redirect()->to(route('admin.inventory.stockentries'));
    }

}
