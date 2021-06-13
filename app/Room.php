<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model {

    protected $table = 'room';
    protected $fillable = [
        'created_by', 'title', 'product_id', 'alias', 'description', 'images', 'content',  'price', 'price1', 'price2', 'price3', 'price4','sale_price', 'ordering','status','quantity'
    ];

    public function facilities() {
        return $this->belongsToMany('\App\Facilities', 'room_facilities', 'room_id', 'facilities_id')->withPivot('value');
    }

    public function product() {
        //return $this->belongsToMany('\App\Product', 'product_room', 'room_id', 'product_id')->withPivot('value');
        return $this->belongsTo('\App\Product');
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
        if($this->sale_price==0){
            $value = $this->price > 0 ? number_format($this->price) . ' đ' : 'Liên hệ';
        }
        else{
            $value = number_format($this->sale_price) . ' đ';
        }
        return $value;
    }

    public function getValuePrice() {
        if($this->sale_price==0){

                $value = $this->price1;

        }
        else{
            $value = $this->sale_price;
        }
        return $value;
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

    public function getTitleHotel() {
        $product_id = $this->product_id;
        $title = \DB::table('product')->where('id',$product_id)->pluck('title');
        if($title->isEmpty()){
            return 'Null';
        }
        else{
            foreach($title as $value);
            return $value;
        }
    }
}
