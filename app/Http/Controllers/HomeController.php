<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Burger;
use App\Type_burger;
use Mockery\Matcher\Type;
use Illuminate\Auth\Events\Validated;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $order=Order::all();
  
  

        return view('admin.Dashboard',['orders'=>$order]);
    }

    public function post(){
        $burger=Burger::all();
        $type_burger=Type_burger::all();


        return view('admin.AdminPost',['burgers'=>$burger,'type_burgers'=>$type_burger]);
    }

    public function saveProduct(Request $request){
         $validatedData= $request->validate([

           'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
             ]);

            //  $validator=validator::make($validatedData);
            //  if($validator->fails()){
                 
            //  }

        
           $fileName = time().'.'.$request->image->extension();
           $request->image->move(public_path('img'), $fileName);
           $burger=new Burger();
           $burger->topic=request('Product');
           $burger->img=$fileName;
           $burger->type_burger=request('typeProduct');
           $burger->price=request('price');
           $burger->description=request('description');
           $burger->ingredients=json_encode(['tomate','onion','pepee','garlic']);
           $burger->qty=1;
           $burger->save();
     
        return redirect('/admin/post')->with('status',' product uploaded');
 


    }
    function saveType(Request $request){
        $validatedData= $request->validate([

            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
              ]);
              $fileName = time().'.'.$request->image->extension();
              $request->image->move(public_path('img'), $fileName);
        $type_burger=new Type_burger();
        $type_burger->topic_burger=request('type');
        $type_burger->img_burger=$fileName;
        $type_burger->save();
        return redirect('/admin/post')->with('status',' Product type uploaded');
    }
}
