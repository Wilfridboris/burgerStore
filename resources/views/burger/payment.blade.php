@extends('layouts.structure')
@section('payment')

<div class="payment-container">
            
            <div class="payment-infos">
                <form action="/orders" method="POST">
                    @csrf
                <div class="user-infos">
                    <h2> <i class="fas fa-user"></i> Customer informations</h2>
                            
                    <p>
                    <label>Name:  </label>
                    <input type="text" name="name" placeholder="name">
                    </P>
                    
                    
                    <p>
                    <label>Address:</label>
                    <input type="text" name="address" placeholder="address">
                    </P>
                    <p>
                    <label>Email:</label>
                    <input type="text" name="email" placeholder="b@">
                    </P>
                    <p>
                    <label>Appartment:</label>
                    <input type="text" name="apt" placeholder="1602">
                    </P>
                    <p>
                    <label>Postal Code:</label>
                    <input type="text" name="code" placeholder=m4x >
                    </P>
                    <p>
                    <label>Number:</label>
                    <input type="text" name="number" placeholder=647 >
                    </P>
                    @if($errors->any())
                        <ul class="errors">
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    @endif
                    
            
                
                
                </div>

                <div class="delivering-options">
                 <h2>Account</h2>
                    <input type="radio" name="pickup" value="pickup">
                    <label for="pickup">Pickup</label>
                     <input type="radio" name="delivering" value="delivering">
                      <label for="delivering">delivering</label>

                      <p>pickup available | pay at the delivering | Toronto</p>
                
                        <input class="submit"  type="submit" value="Confirm"/>
                </div>
                <div class="delivering-site">

                    
                
                </div>

                
                    </form>
            </div>

            <div class="summary" >
    
                
                <table class="receipt" align="center">
                
                    <tr>
                    <h2>Payment</h2>
                        <th colspan="4">Receipt</th>
                    <tr>
                    <tr>
                        <th>Topic</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Total</th>
                    </tr>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{$order->topic}}</td>
                            <td>{{$order->price}}$</td>
                            <td>{{$order->qty}}</td>
                            <td>{{$order->price*$order->qty}}$</td>
                        </tr>
                        
                    
                    @endforeach
                    <th colspan="1" >Total</th>
                    <td  colspan="3">{{$Total}}$</td>
                
                    
                    
    </table>
       
    

</div>
</div>



@endsection