<?php

/**
 * Created by PhpStorm.
 * User: Hien
 * Date: 12/09/2019
 * Time: 11:03 AM
 */

namespace App\Repositories;

use Repositories\Support\AbstractRepository;
use Illuminate\Support\Facades\DB;

class ProductRepository extends AbstractRepository {

    public function __construct(\Illuminate\Container\Container $app) {
        parent::__construct($app);
    }

    public function model() {
        return 'App\Product';
    }

    public function validateCreate() {
        return $rules = [
            'title' => 'required|unique:product',
            'alias' => 'required',
            'user_id' => 'required',
            'category_id' => ' required',
        ];
    }

    public function validateUpdate($id) {
        return $rules = [
            'title' => 'required|unique:product,title,' . $id . ',id',
            'alias' => 'required',
            'category_id' => ' required',
        ];
    }

    public function readFE($request) {
        $model = $this->model;
        if ($request->get('category_id')) {
            $product_ids = \Db::table('product_category')->where('category_id', $request->get('category_id'))->pluck('product_id');
            $model = $model->whereIn('id', $product_ids);
        }
        if ($request->get('attribute_id')) {
            $attribute_ids = explode(',', $request->get('attribute_id'));
            $product_ids = \Db::table('product_attribute')->whereIn('attribute_id', $attribute_ids)->pluck('product_id');
            $model = $model->whereIn('id', $product_ids);
        }
        if ($request->get('keyword')) {
//            $category = \App\Category::where('title','like',$request->get('keyword'))->first();
//            if($category){
//                $product_ids1 = \Db::table('product_category')->where('category_id', $category->id)->pluck('product_id');
//                $model = $model->whereIn('id', $product_ids1);
//            }else{
//                $model = $model->where(function ($query) use ($request) {
//                    return $query->where('title','like','%'.$request->get('keyword').'%')
//                                    ->orWhere('keywords','like','%'.$request->get('keyword').'%');
//                });
//            }
            $model = $model->where(function ($query) use ($request) {
                   return $query->where('title','like','%'.$request->get('keyword').'%')
                                   ->orWhere('keywords','like','% '.$request->get('keyword').' %');
               });
        }
        if ($request->get('count_product')) {
            $limit = $request->get('count_product');
        }
        else{
            $limit = 80;
        }
        return $model->where('status', 1)->orderBy(DB::raw('RAND()'))->paginate($limit);
    }
    public function readSale($request) {
        $model = $this->model;
        if ($request->get('category_id')) {
            $product_ids = \Db::table('product_category')->where('category_id', $request->get('category_id'))->pluck('product_id');
            $model = $model->whereIn('id', $product_ids);
        }
        if ($request->get('attribute_id')) {
            $attribute_ids = explode(',', $request->get('attribute_id'));
            $product_ids = \Db::table('product_attribute')->whereIn('attribute_id', $attribute_ids)->pluck('product_id');
            $model = $model->whereIn('id', $product_ids);
        }
        if ($request->get('keyword')) {
            $model = $model->where(function ($query) use ($request) {
                return $query->where('title', 'like', '%' . $request->get('keyword') . '%')
                                ->orWhere('content', 'like', '%' . $request->get('keyword') . '%');
            });
        }
        if ($request->get('count_product')) {
            $limit = $request->get('count_product');
        }
        else{
            $limit = 80;
        }
        return $model->where('sale_price','>',0)->where('status', 1)->orderBy('created_at', 'desc')->paginate($limit);
    }
    public function getCategorySale($product_id){
        $model = $this->model;
        $category_ids = \Db::table('product_category')->where('product_id', $product_id)->where('category_id','<>',80)->pluck('category_id');
        $product_ids = \Db::table('product_category')->whereIn('category_id', $category_ids)->pluck('product_id');
        $model = $model->whereIn('id', $product_ids);
        return $model->where('sale_price','>',0)->where('status', 1)->orderBy('created_at', 'desc')->get();
    }

    public function allProductByUser(){
        $id = \Auth::user()->id;
        $user_id = \DB::table('user')->where('user_type_id',1)->where('id',$id)->pluck('id');
        return $this->model->where('user_id',$user_id)->get();
    }

    public function allProduct() {
        return $this->model->get();
    }

    public function findByAlias($alias) {
        return $this->model->where('alias', '=', $alias)->first();
    }

    public function readRelatedProduct($limit = 15, $category) {
        $product_ids = \DB::table('product_category')->where('category_id', $category->id)->pluck('product_id');
        return $this->model->where('status', 1)->whereIn('id', $product_ids)->orderBy('created_at', 'desc')->take($limit)->get();
    }

    public function readRelatedProducts($keywords, $limit = 15) {
        $query = $this->model->where('status', 1);
        $keyword_arr = explode(',', $keywords);
        $query = $query->where(function($que) use($keyword_arr) {
            foreach ($keyword_arr as $val) {
                if($val != 'alagreen'){
                    $que = $que->orWhere('title', 'LIKE', '%' . trim($val) . '%')->orWhere('keywords', 'LIKE', '%' . trim($val) . '%');
                }
            }
            return $que;
        });
        $data = $query->select('price', 'alias', 'images', 'title', 'created_by', 'view_count')->take($limit)->get();
        return $data;
    }

    public function readNewProduct($limit = 10) {
        return $this->model->where('status', 1)->where('is_new', 1)->orderBy('updated_at', 'desc')->take($limit)->get();
    }
    public function readViewProduct($limit = 10) {
        return $this->model->where('status', 1)->orderBy('view_count', 'desc')->take($limit)->get();
    }
    public function readRecentProduct($page = 0, $limit = 3) {
        $data = $this->model->where('status', 1)->orderBy(DB::raw('RAND()'))->skip($page * $limit)->take($limit)->get();
        return $data;
    }
    public function getViewedProduct() {
        return $this->model->whereIn('id', session('id'))->get();
    }
    public function getProductByKeyword($keyword, $limit = 50) {
        return $this->model->where('status', 1)->where('title', 'like', '%' . $keyword . '%')->take($limit)->pluck('title');
    }
    public function getProductsByTag($tag_title, $limit = 20) {
        return $this->model->select('title', 'alias', 'images')->where('title', 'like', '%' . $tag_title . '%')->orWhere('keywords', 'like', '%' . $tag_title . '%')->take($limit)->get();
    }
    public function getConfig($id) {
        return $this->model->select('title', 'description','keywords', 'meta_title', 'meta_keywords', 'meta_description')->where('id', $id)->first();
    }

    //Custom
    public function getProductByAliasCategory($category) {
        $limit = null;
        $category_id = DB::table('category')->where('alias',$category)->pluck('id');
        foreach($category_id as $category)
        $product_id = DB::table('product_category')->where('category_id',$category)->pluck('product_id');
        $value = $this->model->where('status', 1)->whereIn('id',$product_id)->orderBy('created_at', 'desc')->take($limit)->paginate(5);
        return $value;
    }

    public function getProductByAlias($alias) {
        $limit = null;
        $value = $this->model->where('status', 1)->where('alias',$alias)->orderBy('created_at', 'desc')->take($limit)->get();
        return $value;
    }

    public function getIdByAlias($alias) {
        $limit = null;
        $value = $this->model->where('status', 1)->where('alias',$alias)->pluck('id');
        foreach($value as $value)
        return $value;
    }

    public function getRecommendHotel($category_id) {
        $category_hotel_id = DB::table('category')->where('alias','khach-san')->pluck('id');
        $location_parent_id = DB::table('category')->where('alias','dia-diem')->pluck('id');
        $location_ids = DB::table('category')->where('parent_id',$location_parent_id)->pluck('id');
        $hotel_id = DB::table('product_category')->where('category_id',$category_hotel_id)->pluck('product_id');
        $hotel_location_id = DB::table('product_category')->whereIn('product_id',$hotel_id)->whereIn('category_id',$location_ids)->pluck('product_id');
        $value = $this->model->whereIn('id',$hotel_location_id)->join('product_category', 'product.id', '=', 'product_category.product_id')->whereIn('category_id', $location_ids)->get();
        return $value;
    }

    public function filterProduct($input) {
        $query = $this->model::query();
    

        if(isset($input['title'])){
            $query->where('title', 'like', '%'.$input['title'].'%')->where('status',1);
        }
        if(isset($input['min_price'])){
            $room = \DB::table('room')->where('price','>=',$input['min_price'])->pluck('product_id');
            $query->whereIn('id',$room);
        }
        if(isset($input['max_price'])){
            $room = \DB::table('room')->where('price','<=',$input['max_price'])->pluck('product_id');
            $query->whereIn('id',$room);
        }
        if(isset($input['max_price']) && isset($input['min_price'])){
            $room = \DB::table('room')->where('price','<=',$input['max_price'])->where('price','>=',$input['min_price'])->pluck('product_id');
            $query->whereIn('id',$room);
        }
        if(isset($input['max_price']) && isset($input['min_price']) && isset($input['location'])){
            $id = DB::table('product_category')->where('category_id',$input['location'])->pluck('product_id');
            $room = \DB::table('room')->where('price','<=',$input['max_price'])->where('price','>=',$input['min_price'])->where('product_id',$id)->pluck('product_id');
            $query->whereIn('id',$room);
        }
        if(isset($input['min_price']) && isset($input['location'])){
            $id = DB::table('product_category')->where('category_id',$input['location'])->pluck('product_id');
            $room = \DB::table('room')->where('price','>=',$input['min_price'])->where('product_id',$id)->pluck('product_id');
            $query->whereIn('id',$room);
        }
        if(isset($input['max_price']) && isset($input['location'])){
            $id = DB::table('product_category')->where('category_id',$input['location'])->pluck('product_id');
            $room = \DB::table('room')->where('price','<=',$input['max_price'])->where('product_id',$id)->pluck('product_id');
            $query->whereIn('id',$room);
        }
        if(isset($input['location'])){
            $id = DB::table('product_category')->where('category_id',$input['location'])->pluck('product_id');
            $query->whereIn('id', $id);
        }
        $records = $query->paginate(5);
        return $records;
    }

}
