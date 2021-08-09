<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type_burger;

class AccueilController extends Controller
{
    public function index(){
        $type_burger=Type_burger::all();
        return view('burger.home',['type_burgers'=>$type_burger]);
    }
    public function about(){
        return view('burger.about');
    }
}
