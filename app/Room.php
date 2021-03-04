<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model {

    protected $table = 'room';
    protected $fillable = [
        'created_by', 'title', 'product_id', 'alias', 'description', 'images', 'content',  'price', 'sale_price', 'ordering'
    ];

    public function facilities() {
        return $this->belongsToMany('\App\Facilities', 'room_facilities', 'room_id', 'facilities_id')->withPivot('value');
    }

    public function product() {
        //return $this->belongsToMany('\App\Product', 'product_room', 'room_id', 'product_id')->withPivot('value');
        return $this->belongsToMany('\App\Product');
    }

    public function room_facilities() {
        return $this->hasMany('App\RoomFacilities', 'room_id');
    }

    public function getPostSchedule() {
        return date('d/m/Y', strtotime($this->post_schedule != '0000-00-00 00:00:00' ?: $this->created_at));
    }

    public function getImage() {
        $image_arr = explode(',', $this->images);
        return $image_arr[0];
    }

    public function getPrice() {
        return $this->price > 0 ? number_format($this->price) . ' đ' : 'Liên hệ';
    }

    public function getSalePrice() {
        return number_format($this->sale_price) . ' đ';
    }

    public function createdBy() {
        return $this->belongsTo('App\User', 'created_by');
    }

    public function url() {
        return route('product.detail', ['alias' => $this->alias]);
    }
}
