<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Burger;

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


        return view('admin.AdminPost',['burgers'=>$burger]);
    }
}
