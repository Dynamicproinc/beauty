@extends('admin.layout')
@section('title', 'Dashboard')
@section('content')
   <div>
       <p>{{ __('Welcome to the admin dashboard. Control, monitor, and manage everything from your dashboard') }}</p>
                <div class="row my-4">
                    <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="card">
                            <h5 class="card-header">Customers</h5>
                            <div class="card-body">
                              <h5 class="card-title">345k</h5>
                              <p class="card-text">Feb 1 - Apr 1, United States</p>
                              <p class="card-text text-success">18.2% increase since last month</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                        <div class="card">
                            <h5 class="card-header">Revenue</h5>
                            <div class="card-body">
                              <h5 class="card-title">$2.4k</h5>
                              <p class="card-text">Feb 1 - Apr 1, United States</p>
                              <p class="card-text text-success">4.6% increase since last month</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                        <div class="card">
                            <h5 class="card-header">Purchases</h5>
                            <div class="card-body">
                              <h5 class="card-title">43</h5>
                              <p class="card-text">Feb 1 - Apr 1, United States</p>
                              <p class="card-text text-danger">2.6% decrease since last month</p>
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
                            <h5 class="card-header">Latest transactions</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">{{ __('Order') }}</th>
                                            <th scope="col">{{ __('Customer') }}</th>
                                            <th scope="col">{{ __('phone') }}</th>
                                            <th scope="col">{{ __('Total') }}</th>
                                            <th scope="col">{{ __('Date') }}</th>
                                            <th scope="col"></th>
                                          </tr>
                                        </thead>
                                        
                                        <tbody>
                                          @foreach($sales_order as $order)
                                          <tr>
                                            <th scope="row">{{ $order->id }}</th>
                                            <td>
                                              {{ $order->first_name }} {{ $order->last_name }}
                                              <small class="d-block text-muted">
                                                {{ $order->delivery_method === 'pickup' ? __('Pickup') : __('Delivery') }}
                                              </small>
                                            </td>
                                            <td>{{ $order->phone_number }}</td>
                                            <td>€{{ number_format(($order->total_amount + $order->shipping_cost) - $order->discount_amount, 2, ',', '.') }}</td>
                                            <td>{{ $order->created_at->timezone('Europe/Zagreb')->format('d.m.Y. H:i') }}</td>
                                            <td><a href="{{ route('shop.invoice',$order->slug) }}" class="btn btn-sm btn-primary">View</a></td>
                                          </tr>
                                          @endforeach
                                         
                                         
                                         
                                        </tbody>
                                      </table>
                                </div>
                                <a href="#" class="btn btn-block btn-light">View all</a>
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
