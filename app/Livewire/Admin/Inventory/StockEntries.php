<?php

namespace App\Livewire\Admin\Inventory;

use Livewire\Component;
use App\Models\StockEntry;
use App\Models\StockEntryItem;


class StockEntries extends Component
{
    
    public $selected_entry = 0;
    public $entry_items = [];

    public function render()
    {
        return view('livewire.admin.inventory.stock-entries',[
            'stock_entries' => StockEntry::with('items')->orderBy('created_at','desc')->get(),
        ]);
    }

    public function selectEntry($id){
        $ents = StockEntryItem::where('stock_entry_id', $id)->get();
        if($ents){
            $this->entry_items = $ents;
            $this->selected_entry = $id;
        }
        else{
            $this->entry_items = null;
        }
    }
}
