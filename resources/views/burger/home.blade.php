@extends('layouts.structure')
@section('content')
<div class="BurgerStore-Center-Panel1">
        <div class="Center-Panel-Cadre">
            <img src="/img/burger.png"  alt="">
        </div>
        <div class="Center-Panel-Cadre">
            <div class="Cadre2-Item">
                <h1>Customize Your Own Now</h1>
            </div>
            <div class="Cadre2-Item">
                <p>Since 1999 we are the best of the customize burger</p>
            </div>
            <div class="btx-Panel">
                <div class="btx"><a href={{route('burger.index')}}>Order now</a></div>
                <div class="btx"><a href="/burger">Customize</a></div>
                <p>the trust you put on us is what we care</p>
                <p>the best since 1999.</p>
            </div>
        </div>
    </div>
    <div class="Space-Menu">
        <h3>Menu</h3>
    </div>
    <div class="BurgerStore-Center-Panel2">
     @foreach($type_burgers as $type_burger)
        <div class="Section">
            <a href="{{route('burger.type',$type_burger->id)}}">
                <img src="/img/{{$type_burger->img_burger}}" alt="">
                <h3>{{$type_burger->topic_burger}}</h3>
            </a>
        </div>
        @endforeach
        

        <div class="Space-Menu">
            <h3>Games</h3>
        </div> 
      
    </div>
    @endsection
