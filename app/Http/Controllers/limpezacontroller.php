<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class limpezacontroller extends Controller
{
    public function index(){
        return view('site.limpeza');
    }
}
