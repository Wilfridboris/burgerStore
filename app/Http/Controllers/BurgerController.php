<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Burger;
use App\Order;
use Validator;
use DB;
use Illuminate\Auth\Events\Validated;

session_start();

class BurgerController extends Controller
{
  
    public function __construct()
    { 
      
    }
  
    function index(){
       $burger=Burger::all();

        return view('burger.index',['burgers'=>$burger]);
    }
    function substract($id){
      $find=false;
      $burger=Burger::findorFail($id);
      $orders=(session()->get('orders'));
        foreach($orders as $order){
          if($burger->id==$order->id){
            --$order->qty;
            $find=true;
            break;
           }
       
           
        }
        return redirect('burger/cart');
    }
    function add($id){
      $find=false;
      $burger=Burger::findorFail($id);
      $orders=(session()->get('orders'));
        foreach($orders as $order){
          if($burger->id==$order->id){
            ++$order->qty;
            $find=true;
            break;
           }
       
           
        }
        return redirect('burger/cart');
    }
    function setOrder($id){
      $find=false;
      $burger=Burger::findorFail($id);
      $orders=(session()->get('orders'));
      if($orders){
        foreach($orders as $order){
          if($burger->id==$order->id){
            ++$order->qty;
            $find=true;
            break;
           }
       
           
        }
        if(!$find){
          session()->push('orders',$burger);
        }
        
        

      }else{
        session()->push('orders',$burger);
      }
       
      //session()->forget('orders') ;
      //composer require vxm/laravel-async
     
      
      $orders=json_encode((session()->get('orders')));
    // error_log(($orders));
       
        return redirect('burger/cart');
    }
    function show($id){
      $burger=Burger::findorFail($id);
      return view('burger.show',['burger'=>$burger]);

    }
    function getTotal(){
      $orders=(session()->get('orders'));
      $sum=0;
      foreach($orders as $order){
        $sum+=$order->price*$order->qty;
      }
      return $sum;
    }
   
    function checkout(){
        $orders=(session()->get('orders'));
        if($orders==null){
         return view('burger.checkout',['orders'=>[],'Total'=>0]);
        }else{
          return view('burger.checkout',['orders'=>$orders,'Total'=>$this->getTotal()]);
        }
        //error_log(json_encode($orders));
      
    }
    function pay(){
      $orders=(session()->get('orders'));
      if($orders==null){
        return view('burger.payment',['orders'=>[],'Total'=>0]);
      }else{
        return view('burger.payment',['orders'=>$orders,'Total'=>$this->getTotal()]);
      }

     

    }
    function remove($id){
      
      $i=0;
      $burger=Burger::findorFail($id);
      $orders=(session()->get('orders'));
      session()->forget('orders');
      foreach($orders as $order){
        ++$i;
        if($burger->id==$order->id){
          unset($orders[$i]);
          
        
          
         
         
      }else{
        session()->push('orders',$order);
      }
    }
      
      
      return redirect('burger/cart');

    }
    function store(){
      $apt=request('apt');
      $address=request('address');
      $code=request('code');
      $name=request('name');
      $number=request('number');
      $email=request('email');
      $order_number=rand(1,3000000000);

      $inputs=['email'=>$email,'address'=>$address,
      '$postal code'=>$code,'name'=>$name,'number'=>$number,'apt'=>$apt];
      $rules=['email'=>'required|email|max:50',
              'name'=>'required|max:30',
               'apt'=>'required|max:6',
                'address'=>'required|max:30',
                'number'=>'required'];
      $messages=['email.required'=>'please enter an email',
                  'name.required'=>'please enter a name',
                   'apt.required'=>'we need your apartment number',
                   'address.required'=>'we need a address',
                   'number.required'=>'enter a number'];
      $validation=Validator::make($inputs,$rules,$messages);
      if($validation->fails()){
          return redirect('burger/payment')->with('errors',$validation->errors());
      }
      $orders=new Order();
      $orders->id=$order_number;
      $orders->apt=$apt;
      $orders->email=$email;
      $orders->address=$address;
      $orders->postal_code=$code;
      $orders->customer_name=$name;
      $orders->customer_number=$number;
      $orders->orders=(session()->get('orders'));
      $orders->save();
      session()->forget('orders');
      return redirect('/orders/'.$order_number);
 

    }
    function storeComment($id){

    //   $name=request('name');
    //   $email=request('email');
    //   $comment=request('comment');

    //   $inputs=['name'=>$name,'email'=>$email,'comment'=>$comment];
    //   $rules=['email'=>'required|email|max:20',
    //   'name'=>'required|max:30',
    //   'comment'=>'required|max30'];
    //   $messages=['email.required'=>'please enter an email',
    //   'name.required'=>'please enter a name',
    //   'comment.required'=>'please enter a comment'];
    // $validation=Validator::make($inputs,$rules,$messages);
    // if($validation->fails()){
      
    // }
      return redirect('/burger/'.$id);
    }
    function getOrder($id){
     
      $order=Order::findorFail($id);
      if($order){
        return view('burger.orders',['orders'=>$order]);
      }else{
        $order=new object();
        $order->id="";
        $order->email="";

        return view('burger.orders',['orders'=>$order]);
      }
      
    }
  
 
    //   $i=0;
    //   $orders=(session()->get('orders'));
    //   error_log(json_encode($orders));
    //   foreach($orders as $order){
    //     if($order->id==$id){
    //       ++$i;
    //       unset($orders[0]);
            
      
          
    //       error_log(json_encode($orders));
    //     break;
      
    //     }
    //   }
    //   return redirect('burger/cart');

    // }
}
