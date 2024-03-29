<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    const TYPE_PRODUCT = 4;

    protected $table = 'product';
    protected $fillable = [
        'created_by','content','images', 'title', 'description', 'meta_title', 'meta_description', 'meta_keywords', 'view_count', 'status', 'alias', 'ordering','user_id','googlemap','province_id','district_id','rating','min_price','max_price'
    ]; 

    public function user(){
        return $this->hasOne('\App\User');
    }

    public function province(){
        return $this->belongsTo('\App\Province');
    }

    public function district(){
        return $this->belongsTo('\App\District');
    }

    public function attributes() {
        return $this->belongsToMany('\App\Attribute', 'product_attribute', 'product_id', 'attribute_id')->withPivot('value');
    }
    public function room() {
        //return $this->belongsToMany('\App\Product', 'product_room', 'room_id', 'product_id')->withPivot('value');
        return $this->hasMany('App\Room');
    }

    public function categories() {
        return $this->belongsToMany('\App\Category', 'product_category', 'product_id', 'category_id');
    }

    public function product_attributes() {
        return $this->hasMany('App\ProductAttribute', 'product_id');
    }

    public function getPostSchedule() {
        return date('d/m/Y', strtotime($this->post_schedule != '0000-00-00 00:00:00' ?: $this->created_at));
    }

    public function getImage() {
        $image_arr = explode(',', $this->images);
        return $image_arr;
    }

    public function getFirstImage() {
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
