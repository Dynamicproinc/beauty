@extends('layouts.app')
@section('title', 'Account')
@section('content')
<div>
     <div style="height:100px"></div>
    <div class="container">
        <div class="row jusltify-content-center">
        <div class="col-lg-8">
            <div class="mb-5">
                <div class="d-flex">
                    <div class="me-3 line-active">{{__('Personal information')}}</div>
                    <div class="me-3">{{__('Order history')}}</div>
                    <div class="me-3">{{__('Setting')}}</div>
                </div>
            </div>
            <form>
                <div>
                <div class="row mb-3">
                    <div class="form-group col-6">
                        <label for="">{{__('First name')}}</label>
                        <input type="text" class="form-control" placeholder="{{__('First name')}}" readonly>
                    </div>
                    <div class="form-group col-6">
                         <label for="">{{__('Last name')}}</label>
                        <input type="text" class="form-control" placeholder="{{__('Last name')}}" readonly>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="form-group col-lg-6">
                    <label for="">{{__('Country')}}</label>
                    <select class="form-control" name="" id="">
                        <option value="">{{__('Select')}}</option>
                        
                    </select>
                </div>
                </div>
                <div class="form-group mb-3">
                    <label for="">{{__('Address')}}</label>
                    <input type="text" class="form-control" placeholder="{{__('Address')}}">
                </div>
                <div class="row mb-3">
                    <div class="form-group col-6">
                        <label for="">{{__('Postal code')}}</label>
                        <input type="text" class="form-control" placeholder="{{__('Postal code')}}" readonly>
                    </div>
                    <div class="form-group col-6">
                         <label for="">{{__('city')}}</label>
                        <input type="text" class="form-control" placeholder="{{__('city')}}" readonly>
                    </div>
                </div>
            <div>
                <button class="tt_btn_theme w-100">{{__('Update')}}</button>
            </div>
            </div>
            </form>
        </div>
    </div>
    </div>
</div>
@endsection
