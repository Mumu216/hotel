<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use App\Models\User;
use Illuminate\Notifications\Notifiable;

use Illuminate\support\str;

class UserController extends Controller
{
    public function loginForm()
    {
        return view('backend.layouts.login');
    }


    public function dologin(Request $request)
    {
        //dd($request->all());
        $request->validate([
   
            'email'=>'required|email',
            'password'=>'required|min:5'
                  
    
            ]);

            $loginData=$request->only('email','password');
          //  dd($loginData);

     
        if(Auth::attempt($loginData))

        { 
          
            return redirect()->route('dashboard')->with('success','User Login Success.');
        }

        return back()->withErrors([
         
         'email'=>'Invalid Credentials.',


        ]);
    }  
      
    public function logout()

    {
       Auth::logout();
       return redirect()->route('admin.login')->with('success','Logout Successfull.');
    }



    public function userlist()
    

        {
            $title= 'User List';
            $user_list = User::all();
            return view('backend.layouts.user.list',compact('title','user_list'));
        }



        public function forgetPassword()

        {
           return view('backend.layouts.forget-password');

        }

        public function forgetPasswordLink(Request $request)
        {
            
            // first i need to check email is  registered or not
           $user=User::where('email',$request->email)->first();
           

           if($user)
           {

            Password::sendResetLink(

                $request->only('email')
            );

              return redirect()->back()->with('success','Email sent to :'. $request->email);


           }else{

              return redirect()->back()->with('success','Email not found.');
           }


        }

        public function passwordReset($p_token, $p_email)
        {

            $token= $p_token;
            $email= $p_email;

          return view('backend.layouts.reset-password',compact(['token','email']));
        }


        public function resetPassword(Request $request)

        {
            
            $request->validate([

               'token'=>'required',
               'email'=> 'required|email',
               'password'=> 'required|min:6|confirmed',


          ]);

          Password::reset(

            $request->only('email', 'password' , 'password_confirmation' , 'token'),
              function ($user, $password)  use ($request) {

                $user->forceFill([
                    'password' => bcrypt($password)
                ])->setRememberToken(str::random(60));
               
                 $user->save();
          
              });

              return redirect()->route('admin.login')->with('success' , 'password reset successful.');
          
        }


        
    }
