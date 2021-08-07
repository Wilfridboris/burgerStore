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
                    <input type="radio" name="deliverring-option" value="pickup">
                    <label for="pickup">Pickup</label>
                     <input type="radio" name="deliverring-option" value="delivering">
                      <label for="delivering">delivering</label>

                      <p>pickup available | pay at the delivering | Toronto</p>
                
                       
                </div>
                <div class="delivering-site">
                   <p> <label>Select a Site: </label><select name="site">
                        <option value="avenue germaine">
                                avenue germaine
                        </option>
                        <option value="UDM bafoussam">
                                UDM bafoussam
                        </option>
                   </p> </select>


                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d497.5909605687548!2d11.533551755127919!3d3.8684830121582885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x108bc5838d2cf4e1%3A0xd21e4bcfe65ebed6!2sAve%20Germaine%20Ahidjo%2C%20Yaound%C3%A9%2C%20Cameroon!5e0!3m2!1sen!2sca!4v1628349089943!5m2!1sen!2sca" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="calendar">
                        <table>
                            <thead>
                                <tr>
                                    <th> Days</th>
                                    <th> From</th>
                                    <th> To</th>

                                </tr>
                            </thead>
                            <tbody>
                                        <tr>
                                            <td>Mondays</td>
                                            <td>09:00</td>
                                            <td>17:00</td>
                                        </tr>
                                          <tr>
                                            <td>Tuesday</td>
                                            <td>09:00</td>
                                            <td>17:00</td>
                                        </tr>
                                          <tr>
                                            <td>Wednesday</td>
                                            <td>09:00</td>
                                            <td>17:00</td>
                                        </tr>
                                          <tr>
                                            <td>Thursday</td>
                                            <td>09:00</td>
                                            <td>17:00</td>
                                        </tr>
                                        <tr>
                                            <td>Friday</td>
                                            <td>09:00</td>
                                            <td>17:00</td>
                                        </tr>
                                        <tr>
                                            <td>Saturday</td>
                                            <td>09:00</td>
                                            <td>17:00</td>
                                        </tr>
                                        <tr>
                                            <td>Sunday</td>
                                            <td>Close</td>
                                            <td>Close</td>
                                        </tr>
                            </tbody>
                        </table>
                    </div>

                    <p> <input class="submit"  type="submit" value="Confirm"/> </p>               
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