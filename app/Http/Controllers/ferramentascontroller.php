<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ferramentascontroller extends Controller
{
    public function index(){
        return view('site.ferramentas');
    }
}
