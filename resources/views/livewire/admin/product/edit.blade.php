<div>
    <div>
        <div class="mb-5">
            <div class="d-flex justify-content-between mb-3">
                <div class="p-2">
                    {{-- <h5>{{__('Edit Product')}}</h5>
               <div>
                 @if (session('message'))
        <div 
            x-data="{ show: true }"
            x-init="setTimeout(() => show = false, 3000)"
            x-show="show"
            class="alert alert-success mt-3"
            role="alert"
        >
            {{ session('message') }}
        </div>
    @endif
                 @if (session('message'))
        <div 
            x-data="{ show: true }"
            x-init="setTimeout(() => show = false, 3000)"
            x-show="show"
            class="alert alert-success mt-3"
            role="alert"
        >
            {{ session('message') }}
        </div>
    @endif
  
    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
        </div>
    @endif
</div> --}}

                </div>
                <div class="d-flex d-flex-reverse">

                </div>
            </div>
            <div class="row mb-3">
                <div class="col-lg 8">
                    <div class="panel bg-white rounded p-3 mb-3">
                        <div class="form-group">
                            <label for="">{{ __('Title') }}</label>
                            <input type="text"
                                class="form-control form-control-sm @error('title') is-invalid @enderror"
                                placeholder="{{ __('Enter the product title') }}" wire:model="title">
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group" wire:ignore>

                            <label for="">{{ __('Description') }}</label>
                            <textarea name="" id="editor" cols="30" rows="10" wire:model="description" x-data
                                x-init="initCKEditor()"></textarea>
                        </div>
                    </div>
                    <div class="panel bg-white rounded p-3 mb-3">
                        <h5 class="panel-heading mb-2" for="">{{ __('Media') }}</h5>
                        <div class="d-flex flex-wrap gap-3">
                            @if ($urls && count($urls) > 0)
                                @foreach ($urls as $image)
                                    <div class="image-upload-preview">
                                        <img src="{{ $image->file_path }}" alt="Product Image"
                                            style="width: 100%; height: 100%; object-fit: cover;">
                                        <button class="btn btn-sm btn-danger"
                                            wire:click="removeMedia('{{ $image->id }}')"
                                            wire:confirm="Are you sure you want to delete this media?">x</button>
                                    </div>
                                @endforeach
                            @endif
                            <div class="img-upload">
                                <button class="btn btn-0 btn-sm" wire:click="openUrlModal">+</button>
                            </div>
                        </div>

                    </div>
                    <div class="panel bg-white rounded mb-3">
                        <div class="p-3">
                            <h5 class="panel-heading mb-2" for="">{{ __('Pricing') }}</h5>
                            <div>
                                <div class="row mb-3">
                                    <div class="form-group col-lg-6">
                                        <label for="">{{ __('Discounted Price') }}</label>
                                        <input type="number"
                                            class="form-control form-control-sm @error('discounted_price') is-invalid @enderror"
                                            placeholder="€ 0.00" wire:model="discounted_price">
                                        @error('discounted_price')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="">{{ __('Original Price') }}</label>
                                        <input type="number"
                                            class="form-control form-control-sm @error('original_price') is-invalid @enderror"
                                            placeholder="€ 0.00" wire:model="original_price">
                                        @error('original_price')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="chek_tax" wire:model="tax">
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
                                <label for="">{{ __('Item cost') }}</label>
                                <input type="number"
                                    class="form-control form-control-sm @error('cost_per_item') is-invalid @enderror"
                                    placeholder="€ 0.00" wire:model="cost_per_item">
                                @error('cost_per_item')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <small class="text-muted">{{ __('Not visible to customer') }}</small>
                            </div>
                        </div>

                    </div>
                    <div class="panel bg-white rounded mb-3">
                        <div class="p-3">

                            <h5 class="panel-heading mb-2" for="">{{ __('Inventory') }}</h5>
                            <div>
                                <div class="row">
                                    <div class="col-lg-6 form-group">
                                        <label for="">SKU (Stock Keeping Unit)</label>
                                        <input type="text"
                                            class="form-control form-control-sm  @error('sku') is-invalid @enderror"
                                            wire:model="sku">
                                        @error('sku')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label for="">Barcode</label>
                                        <input type="text"
                                            class="form-control form-control-sm  @error('barcode') is-invalid @enderror"
                                            wire:model="barcode">
                                        @error('barcode')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="chb_as"
                                        wire:model="auto_update_quantity">
                                    <label class="form-check-label" for="chb_as">
                                        {{ __('Automatic Stock Updates') }}
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="chb_os"
                                        wire:model="out_of_stock">
                                    <label class="form-check-label" for="chb_os">
                                        {{ __('Out-of-Stock Control') }}
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="chb_tc"
                                        wire:model="track_quantity">
                                    <label class="form-check-label" for="chb_tc">
                                        {{ __('Track Quantity') }}
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
                                <input type="number"
                                    class="form-control form-control-sm @error('quantity') is-invalid @enderror"
                                    wire:model="quantity">
                                @error('quantity')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="panel bg-white rounded mb-3">
                        <div class="p-3">
                            <h5 class="panel-heading mb-2" for="">{{ __('Variants') }}</h5>
                            <div class="row">
                                <div class="col-lg-5 form-group">
                                    <select wire:model="option_id" class="form-control form-control-sm">

                                        <option value="">{{ __('Select an option') }}</option>
                                        @foreach ($options as $option)
                                            <option value="{{ $option->id }}">{{ $option->name }}</option>
                                        @endforeach

                                    </select>
                                    @error('option_id')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-lg-4 form-group">
                                    <input required type="text" class="form-control form-control-sm"
                                        placeholder="{{ __('Value') }}" wire:model="o_value">
                                    @error('o_value')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-lg-3 form-group">
                                    <button class="btn-c-sm btn btn-0" wire:click="addVariant">+</button>
                                </div>
                            </div>

                        </div>
                        <div>
                            @if ($variants && count($variants) > 0)
                                <table class="table tbl-v">
                                    <thead>
                                        <tr>

                                            <th scope="col">{{ __('Option') }}</th>
                                            <th scope="col">{{ __('Value') }}</th>
                                            <th scope="col" style="width:100px">{{ __('Price') }}</th>
                                            <th scope="col" style="width:100px">{{ __('Quantity') }}</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($variants as $index => $item)
                                            <tr>
                                                <td>{{ \App\Models\Option::find($item['option_id'])->name }}</td>
                                                <td>
                                                    <input type="text"
                                                        wire:model="variants.{{ $index }}.value"
                                                        class="form-control form-control-sm" placeholder="">
                                                </td>
                                                <td>
                                                    <input type="number"
                                                        wire:model="variants.{{ $index }}.additional_price"
                                                        class="form-control form-control-sm" placeholder="€ 0.00">
                                                </td>
                                                <td>
                                                    <input type="number"
                                                        wire:model="variants.{{ $index }}.quantity"
                                                        class="form-control form-control-sm" placeholder="0">
                                                </td>
                                                <td>
                                                    <button type="button"
                                                        wire:click="removeVariant({{ $item['id'] }})"
                                                        class="btn btn-c-sm btn-0"
                                                        wire:confirm="Are you sure you want to delete this variant?">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach




                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-between p-3">
                                    <div></div>
                                    <div>
                                        <button class="btn btn-c-sm btn-0" wire:click="updateVariants">
                                            <span class="spinner-border spinner-border-sm" role="status" wire:loading
                                                wire:target="updateVariants" aria-hidden="true">
                                            </span>
                                            {{ __('Update Variants') }}
                                        </button>
                                    </div>
                                </div>
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
                        <h5 class="panel-heading mb-2" for="">{{ __('Product status') }}</h5>
                        <div class="form-group">
                            <select name="" id="" class="form-control form-control-sm"
                                wire:model="status">
                                <option value="draft">{{ __('Draft') }}</option>
                                <option value="active">{{ __('Active') }}</option>
                            </select>
                            <small class="text-muted">Product will be visible once activated.</small>

                        </div>
                    </div>
                    <div class="panel bg-white rounded p-3 mb-3">
                        <h5 class="panel-heading mb-2" for="">{{ __('Product Categories') }}</h5>

                        <div class="form-group">
                            <label for="">{{ __('Supplier') }}</label>
                            <select name="" id="" class="form-control form-control-sm"
                                wire:model="supplier_id">
                                @foreach ($suppliers as $supplier)
                                    <option value="{{ $supplier->id }}">{{ $supplier->supplier_name }}</option>
                                @endforeach
                            </select>


                        </div>
                        <div class="form-group">
                            <label for="">{{ __('Category') }}</label>
                            <select name="" id="" class="form-control form-control-sm"
                                wire:model="category_id">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>


                        </div>
                    </div>
                    <div class="panel bg-white rounded p-3 mb-3">
                        <h5 class="panel-heading mb-2" for="">{{ __('Tags') }}</h5>
                        <div class="row">
                            <div class="col-lg-8 form-group">
                                <input type="text" class="form-control form-control-sm"
                                    placeholder="{{ __('Enter tags') }}" wire:model="tags">
                            </div>

                            <div class="col-lg-2 form-group">
                                <button class="btn-c-sm btn btn-0" wire:click="addTag">{{ __('Add') }}</button>
                            </div>
                        </div>

                    </div>
                    <div class="panel bg-white rounded  mb-3">
                        <div class="p-3">
                            <h5 class="panel-heading mb-2" for="">{{ __('Product Highlights') }}</h5>
                            <div class="alert alert-info" style="font-size: 12px">
                                {{ __('Add up to 4 highlights to describe the product.') }}</div>
                            <div class="row">
                                <div class="col-lg-8 form-group">
                                    <input type="text" class="form-control form-control-sm"
                                        placeholder="{{ __('Enter highlights') }}" wire:model="highlight_text">
                                    @error('highlight_text')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-lg-2 form-group">
                                    <button class="btn btn-sm btn-dark"
                                        wire:click="addHighlight">{{ __('Add') }}</button>
                                </div>
                            </div>
                        </div>

                        <div>
                            {{--  --}}
                            <div>
                                @if ($product->getHighlight() && count($product->getHighlight()) > 0)
                                    <ul class="list-group">
                                        @foreach ($product->getHighlight() as $index => $item)
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center">
                                                {{ $item->highlight_text }}
                                                <button type="button"
                                                    wire:click="removeHighlight({{ $item->id }})"
                                                    class="btn btn-sm btn-danger"
                                                    wire:confirm="Are you sure you want to delete this highlight?">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </li>
                                        @endforeach
                                    </ul>
                                @else
                                    <div class="p-3">
                                        <p class="text-muted">{{ __('No highlights added.') }}</p>

                                    </div>
                                @endif

                            </div>
                            {{--  --}}
                        </div>

                    </div>
                    <div class="panel bg-white rounded mb-3">
                        <h5 class="panel-heading mb-2 p-3" for="">{{ __('Page Information') }}</h5>
                        <div>
                            @if (count($product_information) > 0) 
                                <ul class="list-group list-group-flush">
                                @foreach ($product_information as $item )
                                    <li class="list-group-item d-flex justify-content-between">
                                    <span>{{$item->getTitle()?->title}}</span>
                                    <div>
                                        <a href="{{route('admin.products.edit.infoedit',$item->id)}}" class=" btn btn-sm btn-default"><i class="bi bi-pencil"></i></a>
                                        <button class=" btn btn-sm btn-danger" wire:confirm="Are you sure you want to delete this item?" wire:click="removeProductInfo({{$item->id}})"><i class="bi bi-trash"></i></button>

                                    </div>
                                </li>
                                @endforeach
                                </ul>
                                
                            @else
                                <div class="p-3 text-center">
                                    <p class="text-muted">{{ __('No product information available.')}}</p>
                                    
                                </div>
                            @endif
                            <div class="p-3 text-center">
                                 <a class="btn btn-dark btn-sm" href="{{route('admin.products.edit.info', $product->id)}}">{{__('Create new')}}</a>
                            </div>
                           
                        </div>
                    </div>
                    {{-- <div class="panel bg-white rounded p-3 mb-3">
                        <h5 class="panel-heading mb-2" for="">{{ __('Nutrition Information') }}</h5>
                        <div>
                            @if ($product->nutrition)
                                <div class="alert alert-success" style="font-size: 12px">
                                    {{ __('Nutrition information created for this product.') }}</div>
                                <div class="d-flex flex-row-reverse">
                                    <button class="btn btn-link"
                                        wire:click="openNutiModal">{{ __('Edit') }}</button>
                                    <button class="btn btn-link" wire:click="removeNutrition"
                                        wire:confirm="Are you sure you want to remove the nutrition information?">{{ __('Remove') }}</button>
                                </div>
                            @else
                                <div class="alert alert-info" style="font-size: 12px">
                                    {{ __('No nutrition information added.') }}</div>
                                <div>
                                    <button class="btn btn-link"
                                        wire:click="openNutiModal">{{ __('Add Nutrition Information') }}</button>
                                </div>
                            @endif
                        </div>
                    </div> --}}
                    {{-- <div class="panel bg-white rounded p-3 mb-3">
                        <h5 class="panel-heading mb-2" for="">{{ __('Cooking Instructions') }}</h5>
                        <div>
                            <div wire:ignore>
                                <textarea id="editor_1" x-data x-init="initCKEditor()" wire:model.defer="cooking_instructions"></textarea>
                            </div>
                            <div class="d-flex flex-row-reverse mt-2">
                                <button class="btn btn-link" wire:click="saveCookingInstructions">
                                    <span class="spinner-border spinner-border-sm" role="status" wire:loading
                                        wire:target="saveCookingInstructions" aria-hidden="true">
                                    </span>
                                    {{ __('Save changes') }}
                                </button>
                            </div>
                            <script>
                                const editor_1 = CKEDITOR.replace('editor_1');
                                editor_1.on('change', function(event) {
                                    console.log(event.editor.getData())
                                    @this.set('cooking_instructions', event.editor.getData());
                                })
                            </script>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="d-flex flex-row-reverse">

                <div>

                    <button class="btn-2" wire:click="updateProduct">
                        <span class="spinner-border spinner-border-sm" role="status" wire:loading
                            wire:target="updateProduct" aria-hidden="true">
                        </span>
                        {{ __('Save Changes') }}
                    </button>
                </div>
                <div class="p-2 mx-2">


                </div>
                {{-- <div>
                <button class="btn btn-default">Cancel</button>
            </div> --}}

            </div>
            <div>

            </div>
        </div>
        {{-- fixed message bar --}}
        @if ($success_message || $error_message)
            <div class="fixed-message-bar">
                <div>
                    @if ($success_message)
                        <small x-data x-init="setTimeout(() => $wire.set('success_message', ''), 3000)" class="text-success font-weight-bold d-block mt-2">
                            <i class="bi bi-check-circle-fill"></i> {{ $success_message }}
                        </small>
                    @endif
                    @if ($error_message)
                        <small x-data x-init="setTimeout(() => $wire.set('error_message', ''), 3000)" class="text-danger font-weight-bold d-block mt-2">
                            <i class="bi bi-exclamation-circle-fill"></i> {{ $error_message }}
                        </small>
                    @endif
                </div>
            </div>
        @endif

        {{-- modals --}}
        {{-- modal for url --}}
        @if ($url_modal)
            <div class="modal-wrap" wire:transition.opacity>
                <div class="modal-wrap-content">
                    <h5 class="panel-heading mb-2" for="">{{ __('Image URL') }}</h5>
                    <div class="form-group">
                        <input type="url" class="form-control form-control-sm"
                            placeholder="{{ _('Past image URL here...') }}" wire:model = "url">
                    </div>
                    <div class="d-flex flex-row-reverse">
                        <button class="btn btn-sm btn-success" wire:click="addMedia">
                            <span class="spinner-border spinner-border-sm" role="status" wire:loading
                                wire:target="addMedia" aria-hidden="true">

                            </span>
                            Add
                        </button>
                        <button class="btn btn-sm btn-default" wire:click="closeUrlModal">Cancel</button>
                    </div>
                </div>
            </div>
        @endif
        {{-- end modale --}}
        {{-- nuti modal --}}
        @if ($nut_modal)
            <div class="modal-wrap" wire:transition.opacity>
                <div class="modal-wrap-content">
                    <div>
                        <form wire:submit = "saveNutiData">
                            <h5 class="panel-heading mb-2">{{ __('Nutrition Information') }}</h5>
                            <div class="row">
                                <div class="col-6 form-group">
                                    <label>{{ __('Energy') }}</label>
                                    <input type="text"
                                        class="form-control form-control-sm @error('energy') is-invalid @enderror"
                                        placeholder="{{ _('e.g. 200 kcal') }}" wire:model="energy">
                                    @error('energy')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-6 form-group">
                                    <label>{{ __('Fat') }}</label>
                                    <input type="text"
                                        class="form-control form-control-sm @error('fat') is-invalid @enderror"
                                        placeholder="{{ _('e.g. 10g') }}" wire:model="fat">
                                    @error('fat')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-6 form-group">
                                    <label>{{ __('Saturates') }}</label>
                                    <input type="text"
                                        class="form-control form-control-sm @error('saturates') is-invalid @enderror"
                                        placeholder="{{ _('e.g. 5g') }}" wire:model="saturates">
                                    @error('saturates')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-6 form-group">
                                    <label>{{ __('Carbohydrates') }}</label>
                                    <input type="text"
                                        class="form-control form-control-sm @error('carbohydrate') is-invalid @enderror"
                                        placeholder="{{ _('e.g. 20g') }}" wire:model="carbohydrate">
                                    @error('carbohydrate')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-6 form-group">
                                    <label>{{ __('Sugar') }}</label>
                                    <input type="text"
                                        class="form-control form-control-sm @error('sugars') is-invalid @enderror"
                                        placeholder="{{ _('e.g. 15g') }}" wire:model="sugars">
                                    @error('sugars')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-6 form-group">
                                    <label>{{ __('Protein') }}</label>
                                    <input type="text"
                                        class="form-control form-control-sm @error('protein') is-invalid @enderror"
                                        placeholder="{{ _('e.g. 8g') }}" wire:model="protein">
                                    @error('protein')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-6 form-group">
                                    <label>{{ __('Salt') }}</label>
                                    <input type="text"
                                        class="form-control form-control-sm @error('salt') is-invalid @enderror"
                                        placeholder="{{ _('e.g. 0.5g') }}" wire:model="salt">
                                    @error('salt')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                {{-- <div class="form-group" wire:ignore>
                            <label>{{ __('Disclaimer') }}</label>
                            <textarea class="form-control form-control-sm" id="editor_2" rows="3" placeholder="" wire:model="disclaimer" x-data x-init="initCKEditor()"></textarea>
                        </div> --}}
                            </div>
                            <div class="d-flex flex-row-reverse">
                                <button class="btn btn-sm btn-success">
                                    <span class="spinner-border spinner-border-sm" role="status" wire:loading
                                        wire:target="saveNutiData" aria-hidden="true"></span>
                                    Save Changes
                                </button>
                                <button class="btn btn-sm btn-default" wire:click="closeNutiModal"
                                    type="button">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endif
        {{-- end nuti modal --}}

        {{-- page inforamtion  --}}
        
        {{-- end page information --}}
        <script>
            const editor = CKEDITOR.replace('editor');
            editor.on('change', function(event) {
                console.log(event.editor.getData())
                @this.set('description', event.editor.getData());
            })
        </script>
        
        
    </div>
</div>
