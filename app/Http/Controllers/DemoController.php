<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{

    public function Index(){
        return view('about');
    } // end method

    public function Contact(){
        return view('contact');
    } // end method

    public function Welcome(){
        return view('welcome');
    } // end method

}
