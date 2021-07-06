<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;


class ReportController extends Controller
{

    public function bookingReport()
    {

        $all_Booking=[];
        $fromDate='';
        $toDate='';

        if(isset($_GET['from_date']))

        {

            $fromDate=date('Y-m-d',strtotime($_GET['from_date']));
            $toDate=date('Y-m-d',strtotime($_GET['to_date']));

         // $all_Booking=Booking::whereDate('booking_from',$fromDate)->get();
         $all_Booking=Booking::whereBetween('booking_from',[$fromDate,$toDate])->get();

        }


        return view('backend.layouts.reports.booking',compact('all_Booking', 'fromDate', 'toDate'));

    }
}
