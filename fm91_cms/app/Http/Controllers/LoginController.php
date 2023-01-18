<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Hash;

class LoginController extends Controller
{
    //

    function login(REQUEST $req) {
        $req->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        // $data = $req->all();
        $user = User::where('email', '=', $req->email)->first();
        
        if($user) {
            if(Hash::check($req->password, $user->password)) {
                $req->session()->put('loginId', $user->id);
                return redirect('dashboard');
            }
            else {
                
                return back()->with('fail', 'Password not match');
            }
        }
        else {
            return back()->with('fail', 'User not available');

        }
        // return view('dashboard');
    }


    function registerUser(REQUEST $req) {
        $req->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->save();
        // $check = $this->create($data);
        return "Saved";
        // return view('dashboard');
    }


    function LoginPage() {
        return view('login');
        // return view('dashboard');
    }

}
