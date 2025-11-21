<div>
    <div class="row">
        <div class="col-lg-12">
            <div class="">
                <div class="row">
                    <div class="col-lg-4">
                    <div class="bg-white">
                        @if($stock_entries->count() > 0)
                         <div class="list-group">
                            @foreach($stock_entries as $entry)
                        <button type="button" class="list-group-item list-group-item-action" wire:click = "selectEntry({{ $entry->id}})">
                         {{ 'SE' . str_pad($entry->id, 9, '0', STR_PAD_LEFT);}} 
                         <div><small class="text-muted">{{$entry->created_at->format('d-m-Y H:i') }}</small></div>
                        </button>
                        @endforeach
                        </div>
                        @else
                            <div class="alert alert-info" role="alert">
                                {{__('No stock entries found')}}
                            </div>
                        @endif
                       
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="bg-white">
                        <div>
                            
                            <div class="p-3">
                               @if(!$selected_entry == 0)
                                <h5><strong> {{ 'SE' . str_pad($selected_entry, 9, '0', STR_PAD_LEFT);}} </strong></h5>
                               @endif
                            </div>
                            @if(count($entry_items))
                            <table class="table">
                            <thead>
                                <tr>
                               
                                <th scope="col">{{__('Product Name')}}</th>
                                <th scope="col">{{__('Variant')}}</th>
                                <th scope="col">{{__('Quantity')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($entry_items as $entry)
                                <tr>
                                <th scope="">{{ \App\Models\Product::where('id', $entry->product_id)->first()?->title}}</th>
                                <td>{{ \App\Models\Variant::where('id', $entry->variant)->first()?->value ?? 'N/A'}}</td>
                                <td>{{ $entry->quantity}}</td>
                                
                                </tr>
                                @endforeach
                               
                            </tbody>
                            </table>
                            @else
                            <p class="text-center text-muted p-5">{{ __('Empty')}}</p>
                            @endif
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
