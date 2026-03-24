@extends('admin.layout')
@section('title', 'Subscribers')
@section('content')

<div>
   <table class="table">
  <thead>
    <tr>
      <th scope="col">{{_('Date')}}</th>
      <th scope="col">{{__('Email')}}</th>
      <th scope="col">{{__('Status')}}</th>
      
    </tr>
  </thead>
  <tbody>
    @if(count($subscribers) > 0)
        @foreach ($subscribers as $item)
             <tr>
      <th scope="row">{{ $item->created_at->timezone('Europe/Zagreb')->format('d.m.Y. H:i')}}</th>
      <td>{{ $item->email }}</td>
      <td>{{ $item->status }}</td>
      
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