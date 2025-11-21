<div>
    <div class="mb-3"><h5>{{ __('Add Stock') }}</h5></div>
    <div class="row">
        <div class="col-lg-4">
            <div class="form-group mb-3">
                <input type="search" class="form-control" placeholder="{{ __('Search Product by Name or SKU') }}" wire:model.live="search_term">
            </div>
            <div>
                <div class="list-group">
                    @if(count($products))
                    @foreach ($products as $item)
                        <button type="button" class="list-group-item list-group-item-action @if($selected_product && $selected_product->id === $item->id) active @endif" wire:click="selectProduct({{ $item->id }})">
                           
                            {{ $item->title }}
                        </button>
                    @endforeach
                    @else
                    <button type="button" class="list-group-item list-group-item-action disabled" disabled>
                       No products found
                    </button>
                    @endif
                    
 
</div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="bg-white">
                <div class="p-3">
                    <div class="mb-3">
                      
                        <table class="table table-sm mb-0 bg-light">
                            <tbody>
                                <tr>
                                    <th style="width:70px;font-weight:bolder" scope="row"><small>Title:</small></th>
                                    <td>{{ $selected_product ? $selected_product->title : '' }}</td>
                                </tr>
                                <tr>
                                    <th style="width:70px;font-weight:bolder" scope="row"><small>SKU:</small></th>
                                    <td>{{ $selected_product ? $selected_product->sku : '' }}</td>
                                </tr>
                                <tr>
                                    <th style="width:70px;font-weight:bolder" scope="row"><small>Quantity:</small></th>
                                    <td>@if($show_quantity) {{ $show_quantity }} @else {{ $selected_product ? $selected_product->quantity : '' }} @endif</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="row">
                         @if($selected_product && $selected_product->getVariants()->count() > 0)
                       <div class="form-group col-lg-4">
                        <select wire:change="showQuantity" name="variant" id="variant" class="form-control form-control-sm @error('variant') is-invalid @enderror" wire:model="variant" @if($selected_product && !count($selected_product->variants)) disabled @endif>
                            <option >{{ __('Select Variant') }}</option>

                                @foreach($selected_product->getVariants() as $item)
                                    <option value="{{ $item->id }}">{{ $item->value }}</option>
                                @endforeach
                            
                        </select>
                       </div>
                       @endif
                       <div class="form-group col-lg-4">
                        <input type="text" class="form-control form-control-sm @error('quantity') is-invalid @enderror" placeholder="Quantity" wire:model="quantity">
                       </div>
                       <div class="form-group col-lg-4">
                        <button class="btn btn-sm btn-outline-dark form-control" wire:click="add">{{ __('Add')}}</button>
                       </div>
                        
                    </div>
                </div>
                <table class="table">
  <thead>
    <tr>
      <th scope="col">{{ __('SKU')}}</th>
      <th scope="col">{{ __('Product Name')}}</th>
      <th scope="col">{{ __('Variant')}}</th>
      {{-- <th scope="col">{{ __('Price')}}</th> --}}
      <th scope="col">{{ __('Quantity')}}</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    @foreach($added_items as $key => $item)
    <tr>
      <th scope="row">{{ \App\Models\Product::where('id', $item['product_id'])->first()->sku }}</th>
      <td>{{ \App\Models\Product::where('id', $item['product_id'])->first()->title }}</td>
      <td>
        {{ \App\Models\Variant::where('id', $item['variant'])->first()->value ?? 'N/A' }}
      </td>
      <td>{{ $item['quantity'] ?? 0 }}</td>
      <td>
        <button class="btn btn-sm btn-outline-dark" wire:click="removeItem({{ $key }})"><i class="bi bi-trash"></i></button>
      </td>
    </tr>
    @endforeach
   
  </tbody>
</table>
            </div>
            <div class="d-flex flex-row-reverse">
                <button class="btn btn-sm btn-dark" wire:click="save">{{ __('Save & Publish')}}</button>
            </div>
        </div>
    </div>
</div>
