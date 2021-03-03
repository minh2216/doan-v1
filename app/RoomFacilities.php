<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomFacilities extends Model
{
    protected $table = 'room_facilities';
    protected $fillable = [
        'room_id','facilities_id'
    ];
}
