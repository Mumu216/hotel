<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Facility;

class FacilityController extends Controller
{
   
    
    public function list()

    {   $title='Facilities List';
        $facilities=Facility::all();
        return view('backend.layouts.facility.list',compact('title','facilities'));
    }
}
