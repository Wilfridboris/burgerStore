@extends('layouts.structure')
@section('order-show')

<div>
</div>
<table class="burger-show" >
    <tr >
        <td class="burger-item">
            <img src="/img/burger.png" alt="">
        </td>
        <td class="burger-details">
        <h3>{{$burger->topic}}</h3>
            <p>0.15-0.23kg</p>
            <p class="star"><i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></p>
            <p class="price">{{$burger->price}} $</p>
            <p class="quantity"></p>

            <div class="order-btx"><a href="/burger/order/{{$burger->id}}" id="order-btx">Add <i class="fas fa-plus"></i></a></div>
            <div class="order-btx"><a href="/burger/">Back <i class="fas fa-arrow-left"></i></a></div>
        </td>
        <tr>
             <td class="panel-show-tab">
                <div class="panel-tab-menu">
                     <div class="tab-select"><a id="panel-menu1">Description </a></div>
                      <div><a id="panel-menu2">Reviews </a></div>
                </div>
                    <div class="panel-text">
                            <div class="panel-tab-text1 ">
                            <p>top burger that will blow up your mind made with cheese and butter all saucage include such as mayo,hot sauce,ketchup</p>
                            </div>
                            <div class="panel-tab-text2 ">
                                <div class="review-section">
                                    <div>
                                       <p><i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> 3.9 review | 49 review </p> 
                                    <div>
                                    <div>
                                        <button>write a review</button>
                                    <div>
                                </div>

                                <div class="user-review">
                                <h4>++++ boris 12 days</h4>
                                <p>good price for the value of the product</p>

                                </div>
                            </div>
                    </div>
            </td>

           
          
        </tr>

      
         
        
       
        
    </tr>
 
</table>
                <div class="suggestions">
                    <H2>people also like</H2>
                <div>

  
@endsection