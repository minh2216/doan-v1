<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {

    protected $table = 'order';
    protected $fillable = ['ref', 'status', 'contact', 'email', 'payment_method', 'mobile', 'note', 'transport_method', 'total', 'address','member_id'];

    public function created_at() {
        return date("d/m/Y", strtotime($this->created_at));
    }

    public function products() {
        return $this->belongsToMany('App\Product', 'order_detail', 'order_id', 'product_id')->withPivot('order_id', 'product_id', 'quantity', 'sub_total');
    }

    public function rooms() {
        return $this->belongsToMany('App\Room', 'order_detail', 'order_id', 'room_id')->withPivot('order_id', 'room_id','quantity');
    }

    public function order_detail() {
        return $this->hasMany('App\OrderDetail');
    }

    public function member() {
        return $this->belongsTo('App\Member');
    }
    public function total_format(){
        return number_format($this->total);
    }
    
}
