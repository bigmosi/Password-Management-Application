<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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

      $usersl = Usersl::where('email', '-', $request->email)->first();

      if($usersl){
         if(Hash::check($request->password,$usersl->password)){


            
             $request->session()->put('LoggedUsersl', $usersl->id);
             return redirect('/posts');

         }else{
             return back()->with('fail', 'Invalide password');
         }
      }else{
          return back()->with('fail', 'No account found for this email');
      }
    return redirect('/posts')->with('success', 'You login successfully');
     
 }
 function profile(){
     return view('admin.profile');
 }
 function logout(){
     if(session()->has('LoggedUsersl')){
         session()->pull('LoggedUser');
         return redirect('login');
     }
 }
}
