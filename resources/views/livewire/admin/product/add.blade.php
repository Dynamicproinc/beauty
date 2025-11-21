<div>
    <div class="mb-5">
        <div class="d-flex justify-content-between mb-3">
            <div class="p-2">
                <h5>{{__('Add Product')}}</h5>
            </div>
            <div class="d-flex d-flex-reverse">

            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg 8">
                <div class="panel bg-white rounded p-3 mb-3">
                    <div class="form-group">
                        <label for="">{{__('Title')}}</label>
                        <input type="text" class="form-control form-control-sm @error('title') is-invalid @enderror"
                            placeholder="{{__('Enter the product title')}}" wire:model="title">
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group" wire:ignore>
                        
                        <label for="">{{__('Description')}}</label>
                        <textarea name="" id="editor" cols="30" rows="10" wire:model="description" x-data x-init="initCKEditor()"></textarea>
                    </div>
                </div>
                <div class="panel bg-white rounded p-3 mb-3">
                    <h5 class="panel-heading mb-2" for="">{{__('Media')}}</h5>
                    <div class="d-flex flex-wrap gap-3">
                        @if(session()->has('urls') && count(session('urls', [])) > 0)
                            @foreach(session('urls', []) as $image)
                                <div class="img-upload-preview">
                                    <img src="{{ $image }}" alt="Product Image" style="width: 100%; height: 100%; object-fit: cover;">
                                    {{-- <button class="btn btn-sm btn-danger" wire:click="removeImage('{{ $image }}')">x</button> --}}
                                </div>
                            @endforeach
                        @endif
                        <div class="img-upload">
                            <button class="btn btn-0 btn-sm" wire:click="urlModal">+</button>
                        </div>
                    </div>
                   
                </div>
                <div class="panel bg-white rounded mb-3">
                    <div class="p-3">
                        <h5 class="panel-heading mb-2" for="">{{__('Pricing')}}</h5>
                        <div>
                            <div class="row mb-3">
                                <div class="form-group col-lg-6">
                                    <label for="">{{__('Discounted Price')}}</label>
                                    <input type="number" class="form-control form-control-sm @error('discounted_price') is-invalid @enderror" placeholder="€ 0.00"
                                        wire:model="discounted_price">
                                          @error('discounted_price')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="">{{__('Original Price')}}</label>
                                    <input type="number" class="form-control form-control-sm @error('original_price') is-invalid @enderror" placeholder="€ 0.00"
                                        wire:model="original_price">
                                        @error('original_price')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                                </div>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="chek_tax"
                                    wire:model="tax">
                                <label class="form-check-label" for="chek_tax">
                                    Tax
                                </label>
                            </div>
                        </div>
                    </div>
                    <div>
                        <hr>
                    </div>
                    <div class="p-3">
                        <div class="form-group">
                            <label for="">{{__('Item cost')}}</label>
                            <input type="number" class="form-control form-control-sm @error('cost_per_item') is-invalid @enderror" placeholder="€ 0.00"
                                wire:model="cost_per_item">
                                @error('cost_per_item')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                            <small class="text-muted">{{__('Not visible to customer')}}</small>
                        </div>
                    </div>

                </div>
                <div class="panel bg-white rounded mb-3">
                    <div class="p-3">

                        <h5 class="panel-heading mb-2" for="">{{__('Inventory')}}</h5>
                        <div>
                            <div class="row">
                                <div class="col-lg-6 form-group">
                                    <label for="">SKU (Stock Keeping Unit)</label>
                                    <input type="text" class="form-control form-control-sm  @error('sku') is-invalid @enderror" wire:model="sku">
                                    @error('sku')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label for="">Barcode</label>
                                    <input type="text" class="form-control form-control-sm  @error('barcode') is-invalid @enderror" wire:model="barcode">
                                    @error('barcode')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                                </div>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="chb_as" wire:model="auto_update_quantity">
                                <label class="form-check-label" for="chb_as">
                                    {{__('Automatic Stock Updates')}}
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="chb_os" wire:model="out_of_stock">
                                <label class="form-check-label" for="chb_os">
                                    {{__('Out-of-Stock Control')}}
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="chb_tc" wire:model="track_quantity">
                                <label class="form-check-label" for="chb_tc">
                                    {{__('Track Quantity')}}
                                </label>
                            </div>

                        </div>
                    </div>
                    <div>
                        <hr />
                    </div>
                    <div class="p-3">
                        <div class="form-group col-6">
                            <label for="">Quantity</label>
                            <input type="number" class="form-control form-control-sm @error('quantity') is-invalid @enderror" wire:model="quantity">
                            @error('quantity')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="panel bg-white rounded mb-3">
                    <div class="p-3">
                        <h5 class="panel-heading mb-2" for="">{{__('Variants')}}</h5>
                        <div class="row">
                            <div class="col-lg-5 form-group">
                                <select wire:model="option_id" class="form-control form-control-sm">

                                    <option value="">{{ __('Select an option') }}</option>
                                    @foreach($options as $option)
                                    <option value="{{$option->id}}">{{$option->name}}</option>
                                    @endforeach

                                </select>
                                @error('v_option')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-4 form-group">
                                <input required type="text" class="form-control form-control-sm"
                                    placeholder="{{__('Value')}}" wire:model="o_value">
                                    @error('o_value')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-3 form-group">
                                <button class="btn-c-sm btn btn-0" wire:click="addVariant">+</button>
                            </div>
                        </div>
                    </div>
                    <div>
                        @if(session()->has('variants') && count(session('variants', [])) > 0)
                        <table class="table tbl-v">
                            <thead>
                                <tr>

                                    <th scope="col">{{__('Option')}}</th>
                                    <th scope="col">{{__('Value')}}</th>
                                    <th scope="col" style="width:100px">{{__('Price')}}</th>
                                    <th scope="col" style="width:100px">{{__('Quantity')}}</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (session('variants', []) as $index => $item)
                                <tr>
                                    <td>{{ \App\Models\Option::find($item['option_id'])->name }}</td>
                                    <td>{{ $item['value'] }}</td>
                                    <td>
                                        <input type="number" wire:model="variants.{{ $index }}.price"
                                            class="form-control form-control-sm" placeholder="€ 0.00">
                                    </td>
                                    <td>
                                        <input type="number" wire:model="variants.{{ $index }}.quantity"
                                            class="form-control form-control-sm" placeholder="0">
                                    </td>
                                    <td>
                                        <button type="button" wire:click="removeVariant({{ $index }})"
                                            class="btn btn-c-sm btn-0">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach

                                


                            </tbody>
                        </table>
                        @else
                            <div class="p-3">
                                <p class="text-muted">{{ __('No variants added.') }}</p>
                            </div>
                        @endif
                    </div>
                </div>

            </div>
            <div class="col-lg-4">
                <div class="panel bg-white rounded p-3 mb-3">
                    <h5 class="panel-heading mb-2" for="">{{__('Product status')}}</h5>
                    <div class="form-group">
                        <select name="" id="" class="form-control form-control-sm" wire:model="status">
                            <option value="draft" >{{__('Draft')}}</option>
                            <option value="active" >{{__('Active')}}</option>
                        </select>
                        <small class="text-muted">Product will be visible once activated.</small>

                    </div>
                </div>
                <div class="panel bg-white rounded p-3 mb-3">
                    <h5 class="panel-heading mb-2" for="">{{__('Product Categories')}}</h5>

                    <div class="form-group">
                        <label for="">{{__('Supplier')}}</label>
                        <select name="" id="" class="form-control form-control-sm" wire:model="supplier_id">
                           @foreach($suppliers as $supplier)
                            <option value="{{$supplier->id}}">{{$supplier->supplier_name}}</option>
                           @endforeach
                        </select>


                    </div>
                    <div class="form-group">
                        <label for="">{{__('Category')}}</label>
                        <select name="" id="" class="form-control form-control-sm" wire:model="category_id">
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                            @endforeach
                        </select>


                    </div>
                </div>
                <div class="panel bg-white rounded p-3 mb-3">
                    <h5 class="panel-heading mb-2" for="">{{__('Tags')}}</h5>
                    <div class="row">
                        <div class="col-lg-8 form-group">
                            <input type="text" class="form-control form-control-sm" placeholder="{{__('Enter tags')}}" wire:model="tags">
                        </div>

                        <div class="col-lg-2 form-group">
                            <button class="btn-c-sm btn btn-0" wire:click="addTag">{{__('Add')}}</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="d-flex flex-row-reverse">
            <div>
                <button class="btn-2" wire:click="saveProduct">
                    <span class="spinner-border spinner-border-sm" role="status" wire:loading wire:target="saveProduct" aria-hidden="true">
                    </span>
                   {{__('Save Product')}}
                </button>
            </div>
            {{-- <div>
                <button class="btn btn-default">Cancel</button>
            </div> --}}

        </div>
        <div>

        </div>
    </div>
    {{-- modals --}}
    {{-- modal for url --}}
    @if($url_modal)
    <div class="modal-wrap" wire:transition.opacity>
        <div class="modal-wrap-content">
            <h5 class="panel-heading mb-2" for="">{{__('Image URL')}}</h5>
            <div class="form-group">
                <input type="url" class="form-control form-control-sm" placeholder="{{_('Past image URL here...')}}" wire:model = "url">
            </div>
            <div class="d-flex flex-row-reverse">
                <button class="btn btn-sm btn-success" wire:click="addUrl">
                    <span class="spinner-border spinner-border-sm" role="status" wire:loading wire:target="addUrl" aria-hidden="true">
 
                    </span>
                    Add
                </button>
                <button class="btn btn-sm btn-default" wire:click="closeUrlModal">Cancel</button>
            </div>
        </div>
    </div>
    @endif
    {{-- end modale --}}
    <script>
            const editor = CKEDITOR.replace('editor');
            editor.on('change', function(event){
                console.log(event.editor.getData())
                @this.set('description', event.editor.getData());
            })
</script>
</div>