<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function registrationForm()
    {
       // dd("ok");
       return view('frontend.layouts.registration');
    }


    public function register(Request $request)
    {
        //dd($request->all());
        $request->validate([
        'name'=>'required',
        'email'=>'required|email|unique:users',
        'password'=>'required|min:5'
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password)
        ]);

      return redirect()->route('login.form')->with('success','User Registration Successful.');
}


        public function loginForm()
        {
           // dd("login");
           return view('frontend.layouts.login');
        }

        public function doLogin(Request $request)
        {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5'
            ]);

        $loginData=$request->only('email','password');
        // dd($loginData);
        if(Auth::attempt($loginData)){
            return redirect()->route('index')->with('success','User Login Success.');
        }
        return back()->withErrors([
            'email'=>'Invalid Credentials.',
        ]);
    }

        public function logout(){
           Auth::logout();
           return redirect()->route('login.form')->with('success','Logout Successfull.');
        }






}
