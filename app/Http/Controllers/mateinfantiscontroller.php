<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mateinfantiscontroller extends Controller
{
    public function index(){
        return view('site.materiaisnfantis');
    }
}
