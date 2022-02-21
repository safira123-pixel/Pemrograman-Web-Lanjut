<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function index(){
        return 'Hi, Selamat Datang!';
    }

    public function about(){
        return 'Safira Istifarini <br> 2041720229';
    }

    public function articles ($id){
        return 'ini adalah halaman dengan ID: '.$id;
    }
}
