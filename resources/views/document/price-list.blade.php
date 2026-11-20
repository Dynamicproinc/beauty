@extends('layouts.app')
@section('content')
    <div class="py-5">
        <div class="safty-height" style="height: 100px;"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h1 class="fw-bold">Arhiva sidrene cijene</h1>

                    <p class="text-muted">Tallow Skin Care - Dnevni cjenici (CSV) za zadnjih 30 dana.</p>
                    {{-- special link for latest snapshot --}}
                    <div class="mb-3 mt-3">
                        <a href="{{ route('roba.csv') }}" class="btn btn-primary">Preuzmi najnoviji cjenik (CSV)</a>
                    </div>

                    {{--  --}}


                    @if (count($snapshots) > 0)
                   @foreach ($snapshots as $item)
                       <div class="row mb-3 @if( $item->created_at->timezone('Europe/Zagreb')->format('d.m.Y') == now()->timezone('Europe/Zagreb')->format('d.m.Y')) bg-light border p-3 shadow-sm @endif">
                        <div class="col-md-7"><a href="{{route('stock.snapshot.export', $item->name)}}" class="text-primary small"> <i class="bi bi-filetype-csv"></i> {{ $item->name }}</a></div>
                        <div class="col-md-3 small">{{ $item->created_at->timezone('Europe/Zagreb')->format('d.m.Y H:i') }}</div>
                        <div class="col-md-2">
                            {{-- //download link --}}
                            <a href="{{route('stock.snapshot.export', $item->name)}}" class="btn btn-success btn-sm ">Preuzmi</a>
                        </div>
                        
                    </div> 

                    @endforeach
                    <div>{{ $snapshots->links() }}</div>
                   @else
                   <p>Not available</p>
                   @endif
                </div>
            </div>
        </div>
    </div>
@endsection
