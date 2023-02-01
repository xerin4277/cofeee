<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;

class AnnouncementController extends Controller
{
    public function announcements(){
        return view('announcement',[
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

        return redirect('/announcement/user');
    }
    public function update(Request $request, $id){
        $formFields = $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
        if($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        Announcement::find($id)->update($formFields);

        return redirect('/announcement/user');
    }
    public function destroy($id) {
        // Make sure logged in user is owner
        Announcement::find($id)->delete();
        return redirect('/announcement/user');
    }
    public function edit($id){
        return view('edit',[
            'announcement' => Announcement::find($id)
        ]);
    }
}   
