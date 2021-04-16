<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    
   public function list(){
    $title= "User Dashboard";
    $users=user::all();
    return view('backend.layouts.user.list', compact('title','users'));

   }

   public function createForm()
   {
      $title='Create New User';
      return view('backend.layouts.user.create', compact('title',));
   }

   public function store(Request $request)
   {

    User::create([
      
        


    ]);
   }

}
