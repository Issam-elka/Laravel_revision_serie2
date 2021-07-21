<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class View3 extends Controller
{
    public function index(){
        return view('pages.view3');
    }
}
