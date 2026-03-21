@extends('admin.layout')
@section('title', 'Gift Cards')
@section('content')
<div>
   <div class="row justify-content-center">
      <div class="col-lg-12">
         <div>
            <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">{{__('date')}}</th>
      <th scope="col">{{__('email')}}</th>
      <th scope="col">{{__('from')}}</th>
      <th scope="col">{{__('Amount')}}</th>
      <th scope="col">{{__('code')}}</th>
      <th scope="col">{{__('status')}}</th>
    </tr>
  </thead>
  <tbody>
   @if(count($gift_cards) > 0)
    @foreach ($gift_cards as $item )
         <tr>
      <td scope="row"> {{ $item->created_at->timezone('Europe/Zagreb')->format('d.m.Y. H:i') }}</td></td>
      <td>{{ $item->email }}</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    @endforeach
    <td colspan="6">{{__('No gift cards.')}}</td>
   @endif
    
  </tbody>
</table>
         </div>

      </div>
   </div>
</div>

@endsection