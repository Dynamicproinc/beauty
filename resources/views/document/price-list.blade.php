@extends('layouts.app')
@section('content')
    <div>
        <div class="safty-height" style="height: 100px;"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h1 class="fw-bold"> Arhiva sidrene cijene</h1>

                    <p class="text-muted">Your Light - Dnevni cjenici (XML ili CSV) za zadnjih 30 dana.</p>
                   @if (count($snapshots) > 0)
                   @foreach ($snapshots as $item)
                       <div class="row mb-3">
                        <div class="col-md-7"><a href="{{route('stock.snapshot.export', $item->name)}}" class="text-primary">{{ $item->name }}</a></div>
                        <div class="col-md-3">{{ $item->created_at->timezone('Europe/Zagreb')->format('d.m.Y H:i') }}</div>
                        <div class="col-md-2">
                            {{-- //download link --}}
                            <a href="{{route('stock.snapshot.export', $item->name)}}" class="btn btn-success btn-sm "><i class="bi bi-download"></i> Preuzmi</a>
                        </div>
                        
                    </div> 
                   @endforeach
                   @else
                   <p>Not available</p>
                   @endif
                </div>
            </div>
        </div>
    </div>
@endsection
