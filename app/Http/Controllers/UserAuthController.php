<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Usersl;

class UserAuthController extends Controller
{
    function login(){
        return view('auth.login');
    }
    
 function check(Request $request){
     $request->validate([
         'email' => 'required|email',
         'password' => 'required|min:5|max:12'
     ]);

    return redirect('/posts')->with('success', 'You login successfully');
     
 }
 
 public function logout(Request $request){

    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/login');
 }
}
