<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
    protected $guarded= [];
    protected $table= 'categories';

    public function categoryRoom(){
        return $this->hasMany(Room::class, 'category_id');
    }
    public function categoryWithRoom_type(){
        return $this->hasOne(RoomType::class, 'category_id', 'id');
    }
}
