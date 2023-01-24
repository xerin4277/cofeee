<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;

class AnnouncementController extends Controller
{
    public function edit(){
        return view('auth.announcement',[
            'announcement' => Announcement::all()
        ]);
    }
    public function store(Request $request){
        $formFields = $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
        if($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('logos', 'public');
        }

        Announcement::create($formFields);

        return redirect('/edit/announcement');
    }
}   
