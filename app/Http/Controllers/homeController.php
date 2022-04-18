<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //  public function index(){
    //     return 'Hi, Selamat Datang!';
    //  }
     public function index(){
         return view('beranda');
        // $user = Auth::user();
         //return view('home', ['user' => $user]);
     }
}
