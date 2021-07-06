<?php

use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

function checkBookingTime(){
    return Booking::where('user_id', Auth::id())->orderBy('check_out', 'desc')->first();
}
