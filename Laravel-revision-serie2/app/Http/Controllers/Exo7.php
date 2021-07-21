<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exo7 extends Controller
{
    public function index(){
        $outils = ['gomme', 'cahier', 'livre', 'crayon'];
        return view('pages.exo7', compact('outils'));
    }
}
