<div>
    <div>
        <div class="d-flex flex-row-reverse mb-3">
            <button class="btn btn-primary" wire:click="openModal">Add Shipping</button>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">{{ __('Shipping Code') }}</th>
                    <th scope="col">{{ __('Location') }}</th>
                    <th scope="col">{{ __('Free Shipping') }}</th>
                    <th scope="col">{{ __('Max Amount') }}</th>
                    <th scope="col">{{ __('Cost') }}</th>
                    <th scope="col">{{ __('') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($locations as $item)
                    <tr>
                        <th scope="row">{{ $item->location_code }}</th>
                        <td>{{ $item->location }}</td>
                        <td>{{ $item->free_delivery ? 'Free' : 'n/a' }}</td>
                        <td>{{ $item->max_value }}</td>
                        <td>{{ number_format($item->shipping_cost, 0) }}</td>
                        <td>
                            <button class="btn btn-sm btn-primary" wire:click="openEdit({{$item->id}})">
                                <i class="bi bi-pencil"></i>
                            </button>
                            <button class="btn btn-sm btn-danger" wire:click="remove({{$item->id}})" wire:confirm="{{__('Are you sure?')}}">{{__('Delete')}}</button>
                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    {{--  --}}
    @if($d_modal)
    <div class="modal-wrap" wire:transition.opacity>
        <div class="modal-wrap-content">

          <div class="card">
              <form action="" wire:submit="save">
                <h5 class="card-header" for="">{{ __('Add shipping location') }}</h5>
           <div class="card-body">
             <div class="form-group mb-3">
                <label>{{ __('Shipping Code') }}</label>
                <input type="text" class="form-control" wire:model="location_code">
                @error('location_code')
                    <small class="text-danger">{{$message}}</small>
                @enderror

            </div>
            <div class="form-group mb-3">
                <label>{{ __('Location') }}</label>
                <input type="text" class="form-control" wire:model = "location">
                  @error('location')
                    <small class="text-danger">{{$message}}</small>
                @enderror

            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" wire:model.live="free_shipping">
                <label class="form-check-label" for="flexCheckChecked">
                    {{__('Free shipping')}}
                </label>
                  @error('free_shipping')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label>{{ __('Max amount') }}</label>
                <input type="number" class="form-control" wire:model="max_amount"  @disabled(!$free_shipping)>
                 @error('max_amount')
                    <small class="text-danger">{{$message}}</small>
                @enderror

            </div>
            <div class="form-group mb-3">
                <label>{{ __('Cost') }}</label>
                <input type="number" class="form-control" wire:model="cost">
                 @error('cost')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
           </div>
           <div class="card-footer">
             <div class="d-flex flex-row-reverse mt-3">
                <button class="btn btn-primary" type="submit">
                    <span class="spinner-border spinner-border-sm" role="status" wire:loading wire:target="save"
                        aria-hidden="true">

                    </span>
                    Save
                </button>
                <button class="btn mx-2 btn-default" type="button" wire:click="closeModal">Cancel</button>
            </div>
           </div>

              </form>
          </div>

        </div>
    </div>
    @endif
    {{--  --}}
     @if($d_modal_edit)
    <div class="modal-wrap" wire:transition.opacity>
        <div class="modal-wrap-content">

          <div class="card">
              <form action="" wire:submit="update">
                <h5 class="card-header" for="">{{ __('Edit shipping location') }}</h5>
           <div class="card-body">
             <div class="form-group mb-3">
                <label>{{ __('Shipping Code') }}</label>
                <input type="text" class="form-control" wire:model="location_code">
                @error('location_code')
                    <small class="text-danger">{{$message}}</small>
                @enderror

            </div>
            <div class="form-group mb-3">
                <label>{{ __('Location') }}</label>
                <input type="text" class="form-control" wire:model = "location">
                  @error('location')
                    <small class="text-danger">{{$message}}</small>
                @enderror

            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" wire:model.live="free_shipping">
                <label class="form-check-label" for="flexCheckChecked">
                    {{__('Free shipping')}}
                </label>
                  @error('free_shipping')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label>{{ __('Max amount') }}</label>
                <input type="number" class="form-control" wire:model="max_amount"  @disabled(!$free_shipping)>
                 @error('max_amount')
                    <small class="text-danger">{{$message}}</small>
                @enderror

            </div>
            <div class="form-group mb-3">
                <label>{{ __('Cost') }}</label>
                <input type="number" class="form-control" wire:model="cost">
                 @error('cost')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
           </div>
           <div class="card-footer">
             <div class="d-flex flex-row-reverse mt-3">
                <button class="btn btn-primary" type="submit">
                    <span class="spinner-border spinner-border-sm" role="status" wire:loading wire:target="update"
                        aria-hidden="true">

                    </span>
                    Save
                </button>
                <button class="btn mx-2 btn-default" type="button" wire:click="closeModal">Cancel</button>
            </div>
           </div>

              </form>
          </div>

        </div>
    </div>
    @endif
    {{--  --}}
</div>
