<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class View1 extends Controller
{
    public function index(){
        return view('pages.view1');
    }
}
