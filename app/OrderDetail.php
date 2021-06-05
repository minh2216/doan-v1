<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'order_detail';
    protected $fillable = ['order_id','product_id','room_id','quantity','price','sub_total','checkin_date','checkout_date'];
}
