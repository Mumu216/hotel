<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\Hasfactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $guarded=[];
    protected $table= 'bookings';




    public function user()
    {
        return $this->belongsTo(User::class, 'user_id','id');

    }

    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id','id');
    }

    public function bookingWithPayment(){
        return $this->hasOne(Payment::class, 'booking_id', 'id');
    }
}
