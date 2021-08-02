@extends('admin.AdminArea')
@section('dashboard')

 <div class="orders">
        <table>
            <tr>
                <th>Name</th>
                 <th>Address</th>
                 <th>Orders</th>
                 <th>Date</th>
                 <th>Actions</th>
                 
            </tr>
               @foreach($orders as $order)
            <tr>
              <td>
                  <a href="#">{{$order->customer_name}}</a> 
              </td>
              <td>
                    <a href="#">{{$order->apt}}-{{$order->address}}-{{$order->postal_code}} </a> 
              </td>
                <td>
                 
                  @for($i=0;$i<count($order->orders);$i++)
                   {{json_encode($order->orders[$i]['topic']) }} | {{json_encode($order->orders[$i]['qty']) }} 
                  @endfor
                
              </td>
               <td>
                 
                      {{$order->created_at}} 
                
              </td>

              <td>
                    <p><a href=#>cancel</a> <a href=#>done</a></p>
                    
              </td>
            </tr>
              @endforeach
        </table>
          
            
        
        

    </div>

{{ __('Dashboard') }}

                    @if (session('status'))
                      
                            {{ session('status') }}
                     
                    @endif

                    {{ __('You are logged in!') }}

@endsection