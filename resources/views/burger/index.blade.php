@extends('layouts.structure')

    @section('order-content')
    <div class="control-panel-burger">
            <div class="order-panel">
                <ul>
                    <li>Style</li>
                      <li><a href="#">Burger Style</a></li>
                        <li><a href="#">Meat Style</a></li>
                          <li><a href="#">Fish Style</a></li>
                           <li><a href="#">Spicy Style</a></li>
                           <li><a href="#">Jerk Style</a></li>
                           <li><a href="#">Africa Style</a></li>
                </ul>

            </div>

                  <div class="order">
                @foreach($burgers as $burger)
                <div class="order-item">
                                         <a href="burger/{{$burger->id}}"><img src="img/vegetable.png" alt="">
                                            <p>{{$burger->topic}}</p>
                                        </a>
                                         <p>{{$burger->price}}$</p>
                                         <p> <a href="burger/{{$burger->id}}"><i class="fas fa-plus-circle"></i></a></p>
                </div>
                @endforeach
    </div>
            
          
              
            <!-- {{-- @foreach($burgers as $burger)
                <div class="order-item">
                                  <div class="item-show">
                                        <p>{{$burger->topic}}</p>
                                        <a href={{$burger->id}}><img src="img/{{$burger->img}}" alt=""></a>
                                        <p>{{$burger->price}}$</p>
                                    </div>
                                    <div class="item-description">
                                       
                                        <div class="Ingredient">
                                            <h3>Remove</h3>
                                          
                                            @foreach($burger->ingredients as $ingredient)
                                            <div>
                                                <input type="checkbox" value={{$ingredient}}>
                                                <label for="Tomato">{{$ingredient}}</label>
                                            </div>
                                            @endforeach
                                            
                                            <div class="order-btx"><a href="/burger/{{$burger->topic}}">Add</a></div>
                                            <div class="order-btx"><a href="/burger/{{$burger->topic}}">description</a></div>
                                            
                                        </div>
                                       
                                      
                                    </div>
                </div>
                @endforeach --}} -->
                               
            </div>
            @endsection
