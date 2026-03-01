<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Order #ORD-{{ str_pad($order->id, 4, '0', STR_PAD_LEFT) }}</title>
</head>

<body style="margin:0;padding:0;background-color:#f4f4f4;font-family:Verdana, Geneva, Tahoma, sans-serif;font-size:14px;">

<table width="100%" cellpadding="0" cellspacing="0" style="background:#f4f4f4;padding:30px 0;">
<tr>
<td align="center">

<table width="750" cellpadding="0" cellspacing="0" style="background:#ffffff;border:1px solid #dddddd;border-collapse:collapse;">

<!-- HEADER -->
<tr>
<td style="padding:25px;border-bottom:3px solid #000000;">

<table width="100%">
<tr>

<td align="left" valign="top">
<img src="{{ asset('media/images/logo.png') }}" width="100" style="display:block;margin-bottom:10px;">
<strong style="font-size:16px;text-transform:uppercase;">Tallow Skincare j.d.o.o</strong><br>
Donja Švarča 79c<br>
Karlovac, 47000<br>
Croatia<br>
OIB-15582754597<br>
info@tallow-skincare.hr
</td>

<td align="right" valign="top">
<strong style="font-size:18px;">
#ORD-{{ str_pad($order->id, 4, '0', STR_PAD_LEFT) }}
</strong><br><br>

<strong>Date:</strong><br>
{{ $order->created_at->timezone('Europe/Zagreb')->format('d.m.Y. H:i') }}
<br><br>

<strong>{{ __('Payment Method') }}</strong><br>
{{ strtoupper($order->payment_method) }}

@if ($order->stripe_session_id)
<br><br>
<strong>{{ __('Online Payment') }}</strong><br>
<span style="color:@if($order->stripe_status=='paid')green @else red @endif;">
{{ $order->stripe_status }}
</span>
@endif

</td>

</tr>
</table>

</td>
</tr>

<!-- BILLING / SHIPPING -->
<tr>
<td style="padding:25px;">

<table width="100%">
<tr>

<td width="50%" valign="top">
<strong>{{ __('Bill To:') }}</strong><br><br>
{{ $order->first_name }} {{ $order->last_name }}<br>
{{ $order->phone_number }}<br>
{{ $order->email }}<br>
{{ $order->address }}<br>
{{ $order->city }} {{ $order->postal_code }}<br>
{{ $order->getShippingCountry()?->location }}
</td>

<td width="50%" valign="top">

@if ($order->delivery_method === 'home_delivery')

<strong>{{ __('Ship To:') }}</strong><br><br>

@if ($order->shipping_other)

{{ $order->first_name_other }} {{ $order->last_name_other }}<br>
{{ $order->address_other }}<br>
{{ $order->city_other }} {{ $order->postal_code_other }}<br>
{{ $order->getShippingCountryOther()?->location }}<br>
{{ $order->phone_number }}

@else

{{ $order->first_name }} {{ $order->last_name }}<br>
{{ $order->address }}<br>
{{ $order->city }} {{ $order->postal_code }}<br>
{{ $order->getShippingCountry()?->location }}<br>
{{ $order->phone_other }}

@endif

@endif

@if ($order->delivery_method === 'pickup')
<strong>{{ __('Pickup Location:') }}</strong><br><br>
@php
$pl = \App\Models\PickupLocation::where('id', $order->pickup_location)->first();
@endphp
{{ $pl?->pickup_location }}<br>
{{ $order?->pickup_date->format('d.m.Y. H:i') }}
@endif

</td>

</tr>
</table>

</td>
</tr>

<!-- ITEMS TABLE -->
<tr>
<td style="padding:0 25px 25px 25px;">

<table width="100%" cellpadding="8" cellspacing="0" style="border-collapse:collapse;">

<tr style="background:#f2f2f2;">
<th style="border:1px solid #cccccc;text-align:left;">#</th>
<th style="border:1px solid #cccccc;text-align:left;">Item</th>
<th style="border:1px solid #cccccc;text-align:right;">Qty</th>
<th style="border:1px solid #cccccc;text-align:right;">Price</th>
<th style="border:1px solid #cccccc;text-align:right;">Total</th>
</tr>

@foreach ($order->getItems() as $key => $item)
<tr>
<td style="border:1px solid #cccccc;">{{ $key + 1 }}</td>
<td style="border:1px solid #cccccc;">{{ $item->getProduct()->title }}</td>
<td style="border:1px solid #cccccc;text-align:right;">{{ $item->quantity }}</td>
<td style="border:1px solid #cccccc;text-align:right;">€ {{ number_format($item->price, 2, ',', '.') }}</td>
<td style="border:1px solid #cccccc;text-align:right;">
€ {{ number_format($item->price * $item->quantity, 2, ',', '.') }}
</td>
</tr>
@endforeach

<!-- TOTALS -->

<tr>
<td colspan="4" style="border:1px solid #cccccc;text-align:right;"><strong>Subtotal</strong></td>
<td style="border:1px solid #cccccc;text-align:right;">
€{{ number_format($order->total_amount, 2, ',', '.') }}
</td>
</tr>

<tr>
<td colspan="4" style="border:1px solid #cccccc;text-align:right;"><strong>Discount</strong></td>
<td style="border:1px solid #cccccc;text-align:right;">
€{{ number_format($order->discount_amount, 2, ',', '.') }}
</td>
</tr>

<tr>
<td colspan="4" style="border:1px solid #cccccc;text-align:right;"><strong>Shipping</strong></td>
<td style="border:1px solid #cccccc;text-align:right;">
€{{ number_format($order->shipping_cost, 2, ',', '.') }}
</td>
</tr>

@php
$finalTotal = $order->total_amount - $order->discount_amount + $order->shipping_cost;
@endphp

<tr>
<td colspan="4" style="border:1px solid #cccccc;text-align:right;font-size:16px;"><strong>Total</strong></td>
<td style="border:1px solid #cccccc;text-align:right;font-size:16px;">
<strong>€{{ number_format($finalTotal, 2, ',', '.') }}</strong>
</td>
</tr>

</table>

</td>
</tr>

<!-- MESSAGE -->
@if($order->message)
<tr>
<td style="padding:0 25px 20px 25px;">
<strong>{{ __('Message:') }}</strong><br>
{{ $order->message }}
</td>
</tr>
@endif

<!-- FOOTER -->
<tr>
<td style="padding:25px;text-align:center;border-top:1px solid #dddddd;background:#fafafa;">
{{ __('Thank you for your business!') }}<br><br>
{{ __('If you have any questions, please contact us at') }}<br>
<a href="mailto:info@tallow-skincare.hr">info@tallow-skincare.hr</a>
</td>
</tr>

</table>

</td>
</tr>
</table>

</body>
</html>