<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class autopecacontroller extends Controller
{
    public function index(){
        return view('site.autopeca');
    }
}
