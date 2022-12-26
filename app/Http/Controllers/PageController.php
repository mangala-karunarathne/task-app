<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 

class PageController extends Controller
{
    public function index_aboutus(){
        return view('aboutus');
    }

    public function index_contactus(){
        return view('contactus');
    }


} 
