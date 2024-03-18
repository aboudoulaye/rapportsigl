<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function authenticate(){
        return view('index');
    }

    public function accueil(){
        return view('pageaccueil');
    }
}
