<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Announcement;
use Illuminate\Validation\Rules;
use Illuminate\Auth\Events\Registered;

class MasterController extends Controller
{
    public function adduser(){
        return view('auth.register');
    }
    public function storeUser(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        event(new Registered($user));

        return redirect('dashboard');
    }
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');

    }
    public function show(){
        return view('showAll',[
            'users' => User::all(),
            'admin' => auth()->id()
        ]);
      
    }
    public function destroy($id) {
        User::find($id)->delete();
        return redirect('/show/users');
    }

}
