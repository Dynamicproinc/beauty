@extends('admin.layout')
@section('title', 'Dashboard')
@section('content')
   <div>
       <p>{{ __('Welcome to the admin dashboard. Control, monitor, and manage everything from your dashboard') }}</p>
                <div class="row my-4">
                    <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="card">
                            <h5 class="card-header">{{__('New users')}}</h5>
                            
                            <div class="card-body">
                              <h5 class="card-title">{{ $users }}</h5>
                              <p class="card-text">{{$start_format}} - {{$end_format}}</p>
                              <div>
                                @if($user_growth > 0)
                                <span class="text-success">▲ + {{round($user_growth, 1)}} % from last month</span>
                                @endif
                                @if($user_growth < 0)
                                <span class="text-danger">▲  {{round($user_growth, 1)}} % from last month</span>
                                @endif
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                        <div class="card">
                            <h5 class="card-header">Revenue</h5>
                            <div class="card-body">
                              <h5 class="card-title">{{number_format($total_sale, 2, ',', '.')}} EUR</h5>
                              <p class="card-text">{{$start_format}} - {{$end_format}}</p>
                             <div>
                                @if($sales_growth > 0)
                                <span class="text-success">▲ + {{round($sales_growth, 1)}} % from last month</span>
                                @endif
                                @if($sales_growth < 0)
                                <span class="text-danger">▲  {{round($sales_growth, 1)}} % from last month</span>
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
                               <p class="card-text">{{$start_format}} - {{$end_format}}</p>
                              <div>
                                @if($purchase_growth > 0)
                                <span class="text-success">▲ + {{round($purchase_growth, 1)}} % from last month</span>
                                @endif
                                @if($purchase_growth < 0)
                                <span class="text-danger">▲  {{round($purchase_growth, 1)}} % from last month</span>
                                @endif
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                        <div class="card">
                            <h5 class="card-header">Traffic</h5>
                            <div class="card-body">
                              <h5 class="card-title">64k</h5>
                              <p class="card-text">Feb 1 - Apr 1, United States</p>
                              <p class="card-text text-success">2.5% increase since last month</p>
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
   </div>
@endsection
