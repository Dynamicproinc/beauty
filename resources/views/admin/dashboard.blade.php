@extends('admin.layout')
@section('title', 'Dashboard')
@section('content')
   <div>
       <p>{{ __('Welcome to the admin dashboard. Control, monitor, and manage everything from your dashboard') }}</p>
       
                <div class="row my-4">
                    <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="card">
                            <h5 class="card-header">{{__('Users')}}</h5>
                            
                            <div class="card-body">
                              <h5 class="card-title">{{ $users }}</h5>
                              <small class="fw-bolder db-muted-upper text-muted">{{$start_format}} - {{$end_format}}</small>
                              <div class="db-muted">
                                @if($user_growth > 0)
                                <span class="text-success">▲ + {{round($user_growth, 1)}} % from last month</span>
                                @endif
                                @if($user_growth < 0)
                                <span class="text-danger">▼  {{round($user_growth, 1)}} % from last month</span>
                                @endif
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                        <div class="card">
                            <h5 class="card-header">Revenue</h5>
                            <div class="card-body">
                              <h5 class="card-title">{{number_format($total_sale, 2, ',', '.')}} <small class="text-muted">EUR</small></h5>
                              <small class="fw-bold text-muted db-muted-upper">{{$start_format}} - {{$end_format}}</small>
                             <div class="db-muted">
                                @if($sales_growth > 0)
                                <span class="text-success">▲ + {{round($sales_growth, 1)}} % from last month</span>
                                @endif
                                @if($sales_growth < 0)
                                <span class="text-danger">▼  {{round($sales_growth, 1)}} % from last month</span>
                                @endif
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                        <div class="card">
                            <h5 class="card-header">Purchases</h5>
                            <div class="card-body">
                              <h5 class="card-title">{{$purchases}}</h5>
                              <small class="fw-bold text-muted db-muted-upper">{{$start_format}} - {{$end_format}}</small>
                              <div class="db-muted">
                                @if($purchase_growth > 0)
                                <span class="text-success">▲ + {{round($purchase_growth, 1)}} % from last month</span>
                                @endif
                                @if($purchase_growth < 0)
                                <span class="text-danger">▼  {{round($purchase_growth, 1)}} % from last month</span>
                                @endif
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                        <div class="card">
                            <h5 class="card-header">Visits</h5>
                            <div class="card-body">
                              <h5 class="card-title">{{$this_month_visits}}</h5>
                             <small class="fw-bold text-muted db-muted-upper">{{$start_format}} - {{$end_format}}</small>
                               <div class="db-muted">
                                @if($visit_growth > 0)
                                <span class="text-success">▲ + {{round($visit_growth, 1)}} % from last month</span>
                                @endif
                                @if($visit_growth < 0)
                                <span class="text-danger">▼  {{round($visit_growth, 1)}} % from last month</span>
                                @endif
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-lg-0">
                        <div class="card">
                            <h5 class="card-header">{{ __('Latest Orders') }}</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">{{ __('Order') }}</th>
                                            <th scope="col">{{ __('Date') }}</th>
                                            <th scope="col" class="text-nowrap">{{ __('Customer') }}</th>
                                            <th scope="col">{{ __('phone') }}</th>
                                            <th scope="col" class="text-right">{{ __('Total') }}</th>
                                            <th scope="col"></th>
                                          </tr>
                                        </thead>
                                        
                                        <tbody>
                                          @foreach($sales_order as $order)
                                          <tr>
                                            <td>{{ $order->order_number }}</td>
                                            <td class="text-right text-nowrap">{{ $order->created_at->timezone('Europe/Zagreb')->format('d.m.Y. H:i') }}</td>
                                            <td class="text-nowrap text-capitalize">
                                              {{ $order->first_name }} {{ $order->last_name }}
                                              <small class="d-block text-muted">
                                                {{ $order->delivery_method === 'pickup' ? __('Pickup') : __('Delivery') }}
                                              </small>
                                            </td>
                                            <td>{{ $order->phone_number }}</td>
                                            <td class="text-right">€{{ $order->final_amount }}</td>
                                            <td><a href="{{ route('shop.invoice',$order->slug) }}" class="btn btn-sm btn-primary">View</a></td>
                                          </tr>
                                          @endforeach
                                         
                                         
                                         
                                        </tbody>
                                      </table>
                                </div>
                                <a href="{{ route('admin.orders') }}" class="btn btn-block btn-light">View all</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4">
                        <div class="card">
                            <h5 class="card-header">Traffic last 6 months</h5>
                            <div class="card-body">
                                <div id="traffic-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                  <canvas id="dashboardChart"></canvas>
                  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
const ctx = document.getElementById('dashboardChart');

new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
        datasets: [
            {
                label: 'Users',
                data: @json($months['users']),
                borderWidth: 2,
                tension: 0.3
            },
            
            // {
            //     label: 'Traffic',
            //     data: [120,200,300,400,500,600,700,800,900,1000,1100,1200],
            //     borderWidth: 2,
            //     tension: 0.3
            // }
        ]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'top'
            }
        }
    }
});
</script>
                </div>
   </div>
   
@endsection
