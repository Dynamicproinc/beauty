@extends('admin.layout')
@section('title', __('Gift Cards'))
@section('content')
<div>
   <div class="row justify-content-center">
      <div class="col-lg-12">
         <div>
            <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">{{__('Date')}}</th>
      <th>{{__('Design')}}</th>
      <th scope="col">{{__('Email')}}</th>
      <th scope="col">{{__('From')}}</th>
      <th scope="col">{{__('Code')}}</th>
      <th scope="col" class="text-right">{{__('Amount')}}
      <th scope="col" class="text-right">{{__('Payment')}}</th>
      <th scope="col" class="text-right">{{__('status')}}
    </tr>
  </thead>
  <tbody>
   @if(count($gift_cards) > 0)
    @foreach ($gift_cards as $item )
         <tr>
      <td scope="row"> {{ $item->created_at->timezone('Europe/Zagreb')->format('d.m.Y. H:i') }}</td></td>
      <td>
        <img src="{{asset('media/card_design/'.$item->getDesign()?->file_path)}}" alt="" style="width:100px;height:55px;boject-fit:cover;border-radius:8px">
      </td>
      <td>{{ $item->email }}</td>
      <td>{{ $item->from}}</td>
      <td>{{ $item->gift_code}}</td>
      <td class="text-right">{{ number_format($item->amount, 2, ',', '.')}} €</td>
      <td  class="text-right">{{ $item->payment_status}}</td>
      <td  class="text-right text-uppercase {{$item->status === 'active' ? 'text-success' : 'text-secondary'}}" >{{ $item->status}}</td>
    </tr>
    @endforeach
    @else
    <td colspan="6">{{__('No gift cards.')}}</td>
    @endif
  </tbody>
</table>
         </div>
         <div>
            {{$gift_cards->links()}}
         </div>
      </div>
   </div>
</div>

@endsection