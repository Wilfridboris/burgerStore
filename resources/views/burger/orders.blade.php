@extends('layouts.structure')
@section('orders-track')

<div>

    
@if($orders)
    <div class="track-orders">

        <table>
            <tr>
                <th  class="track-section">
                 <h2>Order Number {{$orders->id}}</h2>
                 <h3>Delivering ... <i class="fas fa-truck-pickup"></i></h3>
                 
                      <h2> {{$orders->email}}</h2>
                </th>
                 <th class="track-image">
                 <h3>Infos Order</h3>
                        <p>{{$orders->customer_name}} |  {{$orders->address}} | {{$orders->customer_number}}  </p>
                   @for($i=0;$i<count($orders->orders);$i++)
                  You Order <p> {{json_encode($orders->orders[$i]['topic']) }} | Qty : {{json_encode($orders->orders[$i]['qty']) }} | Price: {{json_encode($orders->orders[$i]['price']) }}</p>
                             
                  @endfor
                 </th>
            </tr>
        </table>
   

    
    </div>

@endif

</div>

@endsection