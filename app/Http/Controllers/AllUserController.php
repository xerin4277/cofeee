<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllUserController extends Controller
{
    public function homepage(){
        return view('/homepage');
    }
    public function welcome(){
        return view('/welcome');
    }
}
