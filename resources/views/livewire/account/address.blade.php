<div>
   <form wire:submit="saveAddress">
                <div>
                <div class="row mb-3">
                    <div class="form-group col-6">
                        <label for="">{{__('First name')}}</label>
                        <input type="text" class="form-control" placeholder="{{__('First name')}}" readonly value="{{auth()->user()->name}}" disabled>
                    </div>
                    <div class="form-group col-6">
                         <label for="">{{__('Last name')}}</label>
                        <input type="text" class="form-control" placeholder="{{__('Last name')}}" readonly value="{{auth()->user()->last_name}}" disabled>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="form-group col-6">
                        <label for="">{{__('Phone')}}</label>
                        <input type="text" class="form-control" placeholder="{{__('Phone')}}" readonly value="{{auth()->user()->phone}}" disabled>
                    </div>
                    <div class="form-group col-6">
                         <label for="">{{__('Email')}}</label>
                        <input type="text" class="form-control" placeholder="{{__('Email')}}" readonly value="{{auth()->user()->email}}" disabled>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="form-group col-lg-6">
                        <label for="">{{__('Country')}}</label>
                    <select class="form-control @error('country') is-invalid @enderror"
                                            id="floatingSelect" aria-label="fl-select-country"
                                            wire:model="country">
                                            <option>{{ __('Select') }}</option>
                                            @foreach ($shipping_locations as $item)
                                                <option value="{{ $item->id }}">{{ $item->location }}</option>
                                            @endforeach

                                            {{-- <option value="3">Three</option> --}}
                                        </select>
                </div>
                </div>
                <div class="form-group mb-3">
                    <label for="">{{__('Address')}}</label>
                    <input type="text"  wire:model="address" class="form-control  @error('address') is-invalid @enderror " placeholder="{{__('Address')}}">
                </div>
                <div class="row mb-3">
                    <div class="form-group col-6">
                        <label for="">{{__('Postal code')}}</label>
                        <input type="text" wire:model="postal_code" class="form-control  @error('postal_code') is-invalid @enderror" placeholder="{{__('Postal code')}}">
                    </div>
                    <div class="form-group col-6">
                         <label for="">{{__('City')}}</label>
                        <input type="text" wire:model="city" class="form-control  @error('city') is-invalid @enderror" placeholder="{{__('City')}}">
                    </div>
                </div>
            <div>
                <button class="tt_btn_theme w-100" type="submit" wire:loading.attr="disabled">{{__('Update')}}</button>
            </div>
            @if (session()->has('message'))
                <div class="alert alert-success mt-3">
                    {{ session('message') }}
                </div>
                @endif
            </div>
            </form>
</div>
