@extends('layouts.structure')
@section('order-show')

<div>
</div>
<table class="burger-show" >
    
        <div class="burger-show-comment">
           <div>
             <form action="{{route('burger.storeComment',$burger->id)}}" method="POST">
                @csrf
               <p class="closeC" ><i class="fas fa-times"></i><p>
                <p>Name:</p>
                <p><input type="text"  id="name"name="name" placeholder="name"/></p>
                <p>Email:</p>
                <p><input type="text" id="email" name="email" placeholder="Email"/></p>

                <p>Comment:</p>
                <p><textarea row="4" cols="40" id="comment" name="comment"></textarea></p>
               
                <p>
                    <span><i id="rating1" class="fas fa-star checked"></i></span>
                    <span><i id="rating2" class="fas fa-star checked"></i></span>
                    <span><i id="rating3" class="fas fa-star checked"></i></span>
                    <span><i id="rating4" class="fas fa-star "></i></span>
                    <span><i id="rating5" class="fas fa-star "></i></span>
                
                </p>
                <input type="text" value="3" class="nb_comment" id="nb_comment" name="nb_comment">
                 <p><button type="submit" id="submit_comments">Submit</button></p>
                 <p id="errors"></p>
                
            
            
            </form>
           </div>
            
        
    </div>
    
    <tr >
        <td class="burger-item">
            <img src="/img/burger.png" alt="">
        </td>
        <td class="burger-details">
        <h3>{{$burger->topic}}</h3>
            <p>0.15-0.23kg</p>
            <p class="star"><i class="fas fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></p>
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
                                        </div>
                                        <div>
                                            <p><button id="write-comment">Write a review</button></p>
                                        </div>
                                </div>
                                @foreach($comments as $comment)
                                <div class="user-review">
                                    <div>
                                        <h4>{{$comment->customer_name}} </h4>
                                       @if($comment->review==5)
                                       <p><i class="fas fa-star checkedc"></i><i class="fas fa-star checkedc"></i><i class="fas fa-star checkedc"></i><i class="fas fa-star checkedc"></i><i class="fas fa-star checkedc"></i></p>
                                       @endif
                                       @if($comment->review==4)
                                       <p><i class="fas fa-star checkedc"></i><i class="fas fa-star checkedc"></i><i class="fas fa-star checkedc"></i><i class="fas fa-star checkedc"></i><i class="fas fa-star"></i></p>
                                       @endif
                                       @if($comment->review==3)
                                       <p><i class="fas fa-star checkedc"></i><i class="fas fa-star checkedc"></i><i class="fas fa-star checkedc"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
                                       @endif
                                       @if($comment->review==2)
                                       <p><i class="fas fa-star checkedc"></i><i class="fas fa-star checkedc"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
                                       @endif
                                       @if($comment->review==1)
                                       <p><i class="fas fa-star checkedc"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
                                       @endif
                                        <p>{{$comment->comment}}</p>
                                    </div>
                                    <div>
                                        <p>{{$comment->created_at}}</p>
                                    </div>

                                </div>
                                @endforeach
                            </div>
                    </div>
            </td>

           
          
        </tr>

      
         
        
       
        
    </tr>
 
</table>
                <div class="suggestions">
                    <H2>people also like</H2>
                    <p>sdsdsd</p>
                <div>

  
@endsection