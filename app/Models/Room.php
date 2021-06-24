<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\Hasfactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{

    protected $guarded=[];



    public function roomCategory()
    {

        return $this->belongsTo(Category::class,'category_id', 'id');
    }

    public function roomRoomType()
    {

        return $this->belongsTo(RoomType::class,'roomtype_id', 'id');
    }

    public function roomFacility()
    {

        return $this->belongsTo(Facility::class,'facility_id', 'id');
    }

    public function booking()
    {
        return $this->hasMany(Booking::class);
    }

}
