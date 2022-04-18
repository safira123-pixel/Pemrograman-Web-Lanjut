<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanAboutUsController extends Controller
{
    public function aboutUs(){
        return redirect()->intended('https://www.educastudio.com/about-us');
        }
}
