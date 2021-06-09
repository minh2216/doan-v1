<?php

namespace App\Http\Controllers\Frontend;

use App\Repositories\ProductAttributeRepository;
use App\Repositories\ProductCategoryRepository;
use Illuminate\Http\Request;
use Session;
use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;
use Repositories\AttributeRepository;
use Repositories\CategoryRepository;
use Repositories\KeywordRepository;
use App\Repositories\OrderRepository;
use App\Repositories\OrderDetailRepository;
use Repositories\ReviewRepository;
use Repositories\GalleryRepository;
use App\Room;
use DB;
use App\Product;
use App\OrderDetail;
use App\Review;
use App\Http\Resources\ProductResource;
class ProductController extends Controller {

    public function __construct(ReviewRepository $reviewRepo,OrderRepository $orderRepo, OrderDetailRepository $orderdetailRepo, ProductRepository $productRepo, CategoryRepository $categoryRepo, AttributeRepository $attributeRepo, ProductAttributeRepository $productAttrRepo, ProductCategoryRepository $productCategoryRepo, KeywordRepository $keywordRepo, GalleryRepository $galleryRepo) {
        $this->productRepo = $productRepo;
        $this->categoryRepo = $categoryRepo;
        $this->attributeRepo = $attributeRepo;
        $this->productAttrRepo = $productAttrRepo;
        $this->productCategoryRepo = $productCategoryRepo;
        $this->galleryRepo = $galleryRepo;
        $this->keywordRepo = $keywordRepo;
        $this->orderRepo = $orderRepo;
        $this->orderdetailRepo = $orderdetailRepo;
        $this->reviewRepo = $reviewRepo;
    }

    public function index(Request $request) {
        ini_set('memory_limit', '2048M');
        $category_arr = $this->categoryRepo->readHomeProductCategory();
        $search = $request->all();
        $records = $this->productRepo->readFE($request);
        if ($request->get('keyword')) {
            $this->keywordRepo->create(['keyword' => $request->get('keyword')]);
            $category = \App\Category::where('title','like',$request->get('keyword'))->first();
        }
        if (isset($search['attribute_id'])) {
            $search['attribute_arr'] = explode(',', $search['attribute_id']);
        }
        if($request->get('category_id')){
            $new_products = $this->productRepo->readViewProduct();
        }else{
            $new_products = $this->productRepo->readNewProduct();
        }
        if (config('global.device') !== 'pc') {
            $product_ids = \DB::table('product_category')->where('category_id', $request->get('category_id') ?: \App\Category::PRODUCT_SHOP_ID)->pluck('product_id');
            Session::put('category_id', $request->get('category_id') ?: \App\Category::PRODUCT_SHOP_ID);
            $attribute_arr = $this->attributeRepo->readAttributeByParent($module = 'product', $parent = 0, $type = 'select', $product_ids);
            if(isset($category)){
                $search['category_id'] = $category->id;
            }
            $current_category = $this->categoryRepo->getCurrentCategory(isset($search['category_id']) && $search['category_id'] != 0 ? $search['category_id'] : \App\Category::PRODUCT_SHOP_ID);
            if (!$current_category->children->toArray()) {
                $current_category = $this->categoryRepo->getCurrentCategory($current_category->parent_id);
            }
            if(isset($search['category_id'])){
                 if($search['category_id'] == 0){
                     $search['category_id']= \App\Category::PRODUCT_SHOP_ID;
                 }
                 $category_arr = $this->categoryRepo->getChildren($search['category_id']);
                 if(count($category_arr) == 0){
                     $cate = $this->categoryRepo->find($search['category_id']);
                     $category_arr = $this->categoryRepo->getChildren($cate->parent_id);
                 }
            }
            return view('mobile/product/list', compact('records', 'category_arr', 'attribute_arr', 'new_products', 'search', 'current_category'));
        } else {
            $parent_cat = \App\Category::where('id', isset($search['category_id']) && $search['category_id'] != 0 ? $search['category_id'] : \App\Category::PRODUCT_SHOP_ID)
                    ->with('parentCategories')
                    ->first();
            Session::put('category_id', isset($search['category_id']) && $search['category_id'] != 0 ? $search['category_id'] : \App\Category::PRODUCT_SHOP_ID);
            $parent_arr[] = ['title' => $parent_cat->title, 'url' => route('product.index', ['category_id' => $parent_cat->id])];
            if ($parent_cat->parentCategories) {
                $parent_arr[] = ['title' => $parent_cat->parentCategories->title, 'url' => route('product.index', ['category_id' => $parent_cat->parentCategories->id])];
                if ($parent_cat->parentCategories->parents) {
                    $parent_arr = array_merge($parent_arr, $this->getParent($parent_cat->parentCategories->parents));
                }
            }
            $parent_arr = array_reverse($parent_arr);
             if(isset($category)){
                $search['category_id'] = $category->id;
            }
            $current_category = $this->categoryRepo->getCurrentCategory(isset($search['category_id']) && $search['category_id'] != 0 ? $search['category_id'] : \App\Category::PRODUCT_SHOP_ID);
            if (!$current_category->children->toArray()) {
                $current_category = $this->categoryRepo->getCurrentCategory($current_category->parent_id);
            }
            if (!isset($search['paginate'])) {
                $search['paginate'] = 80;
            }
            return view('frontend/product/list', compact('records', 'category_arr', 'search', 'current_category', 'parent_arr'));
        }
    }

    public function sale(Request $request) {
        ini_set('memory_limit', '2048M');
        $category_arr = $this->categoryRepo->readHomeProductCategory();
        $search = $request->all();
        $records = $this->productRepo->readSale($request);
        if ($request->get('keyword')) {
            $this->keywordRepo->create(['keyword' => $request->get('keyword')]);
        }
        if (isset($search['attribute_id'])) {
            $search['attribute_arr'] = explode(',', $search['attribute_id']);
        }
        $new_products = $this->productRepo->readNewProduct();
        if (config('global.device') !== 'pc') {
            $product_ids = \DB::table('product_category')->where('category_id', $request->get('category_id') ?: \App\Category::PRODUCT_SHOP_ID)->pluck('product_id');
            $attribute_arr = $this->attributeRepo->readAttributeByParent($module = 'product', $parent = 0, $type = 'select', $product_ids);

            $current_category = $this->categoryRepo->getCurrentCategory(isset($search['category_id']) && $search['category_id'] != 0 ? $search['category_id'] : \App\Category::PRODUCT_SHOP_ID);
            if (!$current_category->children->toArray()) {
                $current_category = $this->categoryRepo->getCurrentCategory($current_category->parent_id);
            }
            return view('mobile/product/list', compact('records', 'category_arr', 'attribute_arr', 'new_products', 'search', 'current_category'));
        } else {
            $parent_cat = \App\Category::where('id', isset($search['category_id']) && $search['category_id'] != 0 ? $search['category_id'] : \App\Category::PRODUCT_SHOP_ID)
                    ->with('parentCategories')
                    ->first();
            $parent_arr[] = ['title' => $parent_cat->title, 'url' => route('product.index', ['category_id' => $parent_cat->id])];
            if ($parent_cat->parentCategories) {
                $parent_arr[] = ['title' => $parent_cat->parentCategories->title, 'url' => route('product.index', ['category_id' => $parent_cat->parentCategories->id])];
                if ($parent_cat->parentCategories->parents) {
                    $parent_arr = array_merge($parent_arr, $this->getParent($parent_cat->parentCategories->parents));
                }
            }
            $parent_arr = array_reverse($parent_arr);
            $current_category = $this->categoryRepo->getCurrentCategory(isset($search['category_id']) && $search['category_id'] != 0 ? $search['category_id'] : \App\Category::PRODUCT_SHOP_ID);
            if (!$current_category->children->toArray()) {
                $current_category = $this->categoryRepo->getCurrentCategory($current_category->parent_id);
            }
            if (!isset($search['paginate'])) {
                $search['paginate'] = 80;
            }
            $sale = true;
            return view('frontend/product/list', compact('sale', 'records', 'category_arr', 'search', 'current_category', 'parent_arr'));
        }
    }

    public function getParent($parent) {
        $parent_arr[] = ['title' => $parent->title, 'url' => route('product.index', ['category_id' => $parent->id])];
        if ($parent->parents) {
            $parent_arr = array_merge($parent_arr, $this->getParent($parent->parents));
        }
        return $parent_arr;
    }

    public function detail($alias) {
        if (isset($_GET['ref'])) {
            session(['ref' => $_GET['ref']]);
        }
        $record = $this->productRepo->findByAlias($alias);
        $sale_product = $this->productRepo->getCategorySale($record->id);
        $this->productRepo->updateViewCount($record->id, $record->view_count);
        $image_arr = explode(',', $record->images);
        $gallery = $this->galleryRepo->getImageByKeyword($record->keywords);
//        $product_arr = $this->productCategoryRepo->getCategory($record->categories);
        $related_product = $this->productRepo->readRelatedProduct(15, $record->categories()->orderBy('id', 'desc')->first());
        $url = \Illuminate\Support\Facades\Request::url();
        if (!session('id')) {
            session(['id' => [$record->id]]);
        } else {
            $ids = array_merge(session('id'), [$record->id]);
            session(['id' => $ids]);
        }
        $config = $this->productRepo->getConfig($record->id);
        $viewed_products = $this->productRepo->getViewedProduct();
        $attribute_arr = $this->attributeRepo->readAttributes($record->attributes, 'product');
        $product = $record;
        $category_id = $record->categories()->orderBy('id', 'desc')->first()->id;
        if (config('global.device') !== 'pc') {
            return view('mobile/product/detail', compact('category_id','sale_product','record', 'product', 'config', 'gallery', 'image_arr', 'attribute_arr', 'related_product', 'url', 'viewed_products'));
        } else {
            return view('frontend/product/detail', compact('category_id','sale_product','record', 'product', 'gallery', 'config', 'image_arr', 'attribute_arr', 'related_product', 'url', 'viewed_products'));
        }
    }

    public function cart() {
        $total = 0;
        if (!is_null(session('cart'))) {
            foreach (session('cart') as $key => $val) {
                $total += ($val['price'] * $val['quantity']);
            }
        }
        if (config('global.device') !== 'pc') {
            return view('mobile/cart/index', compact('total'));
        } else {
            return view('frontend/cart/index', compact('total'));
        }
    }

    public function checkout() {
        $total = 0;
        foreach (session('cart') as $val) {
            $total += ($val['price'] * $val['quantity']);
        }
        if (config('global.device') !== 'pc') {
            return view('mobile/cart/checkout', compact('total'));
        } else {
            return view('frontend/cart/checkout', compact('total'));
        }
    }

    public function checkoutSuccess(Request $request) {
        $input = $request->all();
        $validator = \Validator::make($input, $this->orderRepo->validateCreate());
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $total = 0;
        foreach (session('cart') as $key => $val) {
            $total += ($val['price'] * $val['quantity']);
        }
        if (!is_null(session('ref'))) {
            $input['ref'] = session('ref');
        }
        $input['total'] = $total;
        $order = $this->orderRepo->create($input);
        foreach (session('cart') as $key => $val) {
            $detail['order_id'] = $order->id;
            $detail['product_id'] = $key;
            $detail['quantity'] = $val['quantity'];
            $detail['price'] = $val['price'];
            $detail['sub_total'] = $val['price'] * $val['quantity'];
            $this->orderdetailRepo->create($detail);
        }
        $request->session()->flush('cart');
        if (config('global.device') !== 'pc') {
            return view('mobile/cart/success');
        } else {
            return view('frontend/cart/success');
        }
    }

    public function index2(Request $request, $category) {
        ini_set('memory_limit', '2048M');
        $check_cat= is_null($category);
        if($check_cat==false){
            $records = $this->productRepo->getProductByAliasCategory($category);
        }
        $city = \DB::table('category')->where('parent_id',5)->get();
        foreach($records as $record)
        $province = \Db::table('province')->where('id',$record->province_id)->get();
        $district = \Db::table('district')->where('id',$record->district_id)->get();
        $num_review = \DB::table('review')->where('product_id',$record->id)->count();
        return view('frontend/product/list', compact('records','city','province','district','num_review'));
    }

    public function detail2(Request $request, $alias) {
        ini_set('memory_limit', '2048M');
        $records = $this->productRepo->getProductByAlias($alias);
        $product_id = $this->productRepo->getIdByAlias($alias);
        $room_id = \DB::table('room')->where('product_id',$product_id)->pluck('id');
        $room = Room::whereIn('id',$room_id)->where('status',1)->get();
        $review = \DB::table('review')->where('product_id',$product_id)->get();
        $att_pro = \DB::table('product_attribute')->where('product_id',$product_id)->pluck('attribute_id');
        $att = \DB::table('attribute')->whereIn('id',$att_pro)->get();
        $num_review = \DB::table('review')->where('product_id',$product_id)->count();
        return view('frontend/product/detail', compact('records','room','product_id','review','att','num_review'));
    }

    public function order(Request $request) {
        ini_set('memory_limit', '2048M');
        $input = $request->all();
        $checkin = strtotime($input['checkin_time']);
        $checkout = strtotime($input['checkout_time']);
        $time = ($checkout - $checkin)/86400;
        $total_price = $input['price']*$time;
        $tax = ($total_price/100)*10;
        $cost = $total_price + $tax;
        $product_id = $input['product_id'];
        $room_id = $input['room_id'];
        $checkin_date = date('Y-m-d',$checkin);
        $checkout_date = date('Y-m-d',$checkout);
        return view('frontend/product/order', compact('time','total_price','tax','cost','product_id','room_id','checkin_date','checkout_date'));
    }

    public function post_order_detail(Request $request) {
        ini_set('memory_limit', '2048M');
        $input = $request ->all();
        if(isset($input['contact']) && isset($input['mobile']) && isset($input['email']))
        {
            $session = session()->all();
            $alias = \DB::table('product')->where('id',$input['product_id'])->pluck('alias');
            foreach($alias as $alias)
            if(isset($session['username'])== false)
            {
                return redirect()->route('product.detail', $alias)->with('error', 'your message,here');   
            }
            $member_id = \DB::table('member')->where('username',$session['username'])->pluck('id');
            foreach($member_id as $member_id);
            $input['member_id'] = strval($member_id);
            $order = $this->orderRepo->create($input);
            $input['order_id'] = $order->id;
            $order_detail = $this->orderdetailRepo->create($input);

        }
        return redirect()->route('home.index')->with('status', 'Đặt phòng thành công');;
    }

    public function filter(Request $request) {
        ini_set('memory_limit', '2048M');
        $input = $request ->all();
        $records = $this->productRepo->filterProduct($input);
        $city = \DB::table('category')->where('parent_id',5)->get();
        return view('frontend/product/list', compact('records','city'));
    }

    public function getData(){
        $key = Product::with(['room']);
        return ProductResource::collection($key->paginate(50))->response();
    }
    


    public function detail_order(Request $request){
        $value = $request->session()->get('username');
        $member_id = \DB::table('member')->where('username', $value)->pluck('id');
        $order = \DB::table('order')->where('member_id',$member_id)->get();
        $contact = \DB::table('config')->get();
        return view('frontend/order/index',compact('order','contact'));
    }

    public function details($id){
        $record = $this->orderRepo->find($id);
        $time_in = \DB::table('order_detail')->where('order_id',$record->id)->pluck('checkin_date');
        $time_out = \DB::table('order_detail')->where('order_id',$record->id)->pluck('checkout_date');
        $contact = \DB::table('config')->get();
        return view('frontend/order/detail',compact('record','time_in','time_out','contact'));
    }

    public function review(Request $request){
        $input=$request->all();
        $review = $this->reviewRepo->create($input);
        return redirect()->back();
    }

}
