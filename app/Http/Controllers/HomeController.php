<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('Frontend.home');
    }
    public function shop(){
        return view('Frontend.shop');
    }
}
