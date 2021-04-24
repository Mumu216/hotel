<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Facilities;

class FacilitiesController extends Controller
{
    
    public function list()

    {   $title='Facilities List';
        $facilitiess=Facilities::all();
        return view('backend.layouts.facilities.list',compact('title','facilitiess'));
    }

}
