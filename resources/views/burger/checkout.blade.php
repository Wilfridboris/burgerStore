@extends('layouts.structure')
@section('order-checkout')
<div class="checkout">
        
        <div class="checkout-order">
            <div class="checkout-menu">
                <div>
                    <p>Your order's</p>
                </div>
                <div>
                    <p> 2 Items</p>
                </div>
            </div>
           @foreach($orders as $order)
            <div class="checkout-item">
                <div>
                    <a href=""><img src="/img/burger_meat.png" width="100px" alt=""></a>
                </div>
                <div>
                    <p>{{$order->topic}}</p>
                  
                </div>
            </div>
            <div class="checkout-infos">
                <div class="quantity">
                  <a id="plus" href="/burger/add/{{$order->id}}"> <p class="btx-math" >+</p></a>
                   <p id="quantity">{{$order->qty}}</p>
                   <a id="minus" href="/burger/substract/{{$order->id}}"><p class="btx-math" >-</p></a>
                </div>
                <div>
                    <p id="price">{{$order->price}}</p>
                </div>
            </div>
            <div class="checkout-option">
                <div>
                    <a href="{{route('burger.remove',$order->id)}}" id="remove">remove <i class="fas fa-trash"></i></a>
                </div>
                <div>
                    <a href="">save</a>
                </div>
            </div>
            @endforeach
           
        </div>
        <div class="Proced-form">
            <table style="width:100%">
                <tr>
                  <th>Subtotal:</th>
                  <th id="total">${{$Total}}</th> 
                </tr>
                <tr>
                  <td>Subtotal for delivering</td>
                  <td>10.64</td>
                </tr>
                <tr>
                  <td>0% HST:</td>
                  <td>FREE</td>
                </tr>
                <tr>
                  <td>12% HST</td>
                  <td>FREE</td>
                </tr>
              </table>
              <p></p>
              <table style="width: 100%">
                <tr>
                    <th>Estimated Total</th>
                    <th id="subtotal">${{$Total+10.64}}</th>
                </tr>
              </table>
              <div class="btx-checkout btx">
                  <a href="{{route('burger.pay')}}">Proceed <i class="fas fa-shopping-basket"></i></a>
              </div>
              <div class="btx-checkout btx">
                  <a href="/burger/">Back To Menu <i class="fas fa-arrow-left"></i></a>
              </div>
        </div>
      
        
        
    </div>
@endsection