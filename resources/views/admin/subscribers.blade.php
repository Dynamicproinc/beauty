@extends('admin.layout')
@section('title', __('Subscribers'))
@section('content')

<div>
   <table class="table">
  <thead>
    <tr>
      <th scope="col">{{__('Date')}}</th>
      <th scope="col">{{__('Email')}}</th>
      <th scope="col">{{__('Status')}}</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @if(count($subscribers) > 0)
        @foreach ($subscribers as $item)
             <tr>
      <th scope="row">{{ $item->created_at->timezone('Europe/Zagreb')->format('d.m.Y. H:i')}}</th>
      <td>{{ $item->email }}</td>
      <td class="text-uppercase {{$item->status === 'subscribed' ? 'text-success' : 'text-danger'}}">{{ $item->status }}</td>
      <td>
        <a href="{{route('unsubscribe-email',[$item->reference, $item->email])}}" class="btn btn-outline-danger btn-sm">{{__('Unsubscribe')}}</a>
      </td>
      
    </tr>
        @endforeach
    @else
    <tr>
        <td colspan="3" class="text-center">
            {{__('No subscribers')}}
        </td>
    </tr>
    @endif
    
  </tbody>
</table>
<div>
    {{$subscribers->links()}}
</div>
</div>

@endsection