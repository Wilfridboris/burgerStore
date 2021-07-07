@extends('layouts.structure')
@section('orders-track')

<div>
@if($orders)
    <h1>Thank you for your orders</h1>
    <h2>Your order number is {{$orders->id}}</h2>
    <h2>A receipt have been sent to {{$orders->email}}</h2>

@endif

</div>

@endsection