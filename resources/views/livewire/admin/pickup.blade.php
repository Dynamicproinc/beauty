<div>
    <div>
        <div class="d-flex flex-row-reverse">
            <button class="btn btn-link btn-sm" wire:click="showNew">{{__('Add new pickup location')}}</button>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">{{ __('Pickup Location') }}</th>
                    <th scope="col">{{ __('Description') }}</th>
                    <th scope="col">{{ __('Cost') }}</th>
                    <th scope="col">{{ __('Discount') }}</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @if (count($locations) > 0)
                    @foreach ($locations as $item)
                        <tr>
                            <td>{{ $item->pickup_location }}</td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->cost }}</td>
                            <td>{{ $item->discount }}</td>
                            <td>
                                <button class="btn btn-primary btn-sm"
                                    wire:click="selectedProduct({{ $item->id }})"><i class="bi bi-pencil"></i></button>
                                <button class="btn btn-danger btn-sm"
                                    wire:click="delete({{ $item->id }})" wire:confirm="{{__('Are you sure?')}}">{{ __('Delete') }}</button>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4">
                            {{ __('No pickup localtions found') }}
                        </td>
                    </tr>
                @endif

            </tbody>
        </table>
    </div>
    @if ($edit_modal)
        <div>
            <div class="modal-wrap show" wire:transition.opacity>
                <div class="modal-wrap-content">
                    <div class="card">
                        <form wire:submit="update">
                            <h5 class="card-header">{{ __('Edit pickup locatiion') }}</h5>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="">{{ __('Pickup location') }}</label>
                                    <input type="text" class="form-control" wire:model="pickup_location">
                                    @error('pickup_location')
                                       <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">{{ __('Description') }}</label>
                                    <input type="text" class="form-control" wire:model="description">
                                     @error('description')
                                       <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">{{ __('Cost') }}</label>
                                    <input type="text" class="form-control" wire:model="cost">
                                     @error('cost')
                                       <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">{{ __('Discount') }}</label>
                                    <input type="text" class="form-control" wire:model="discount">
                                     @error('discount')
                                       <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>


                            </div>

                            <div class="card-footer">
                                <div class="d-flex flex-row-reverse">
                                    <button class="btn btn-primary" type="submit" wire:loading.attr="disabled">{{ __('Save') }}</button>
                                    <button class="btn btn-default" type="button" wire:click="closeModal">{{ __('Cancel') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if ($save_modal)
        <div>
            <div class="modal-wrap show" wire:transition.opacity>
                <div class="modal-wrap-content">
                    <div class="card">
                        <form wire:submit="saveNew">
                            <h5 class="card-header">{{ __('Edit pickup locatiion') }}</h5>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="">{{ __('Pickup location') }}</label>
                                    <input type="text" class="form-control" wire:model="pickup_location">
                                    @error('pickup_location')
                                       <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">{{ __('Description') }}</label>
                                    <input type="text" class="form-control" wire:model="description">
                                     @error('description')
                                       <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">{{ __('Cost') }}</label>
                                    <input type="number" class="form-control" wire:model="cost">
                                     @error('cost')
                                       <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">{{ __('Discount') }}</label>
                                    <input type="number" class="form-control" wire:model="discount">
                                     @error('discount')
                                       <small class="text-danger"> {{$message}}</small>
                                    @enderror
                                </div>


                            </div>

                            <div class="card-footer">
                                <div class="d-flex flex-row-reverse">
                                    <button class="btn btn-primary" type="submit" wire:loading.attr="disabled">{{ __('Save') }}</button>
                                    <button class="btn btn-default" type="button" wire:click="closeModal">{{ __('Cancel') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
