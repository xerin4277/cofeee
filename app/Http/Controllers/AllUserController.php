<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
class AllUserController extends Controller
{
    public function homepage(){
        return view('/homepage',[
            'announcement' => Announcement::all()
        ]);
    }
    public function welcome(){
        return view('/welcome');
    }
}
