<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;
use App\Repositories\RoomRepository;
use Repositories\CategoryRepository;
use Repositories\AttributeRepository;
use Repositories\PostHistoryRepository;

class ProductController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(ProductRepository $productRepo, CategoryRepository $categoryRepo, AttributeRepository $attributeRepo, PostHistoryRepository $postHistoryRepo, RoomRepository $roomRepo) {
        $this->productRepo = $productRepo;
        $this->categoryRepo = $categoryRepo;
        $this->attributeRepo = $attributeRepo;
        $this->postHistoryRepo = $postHistoryRepo;
        $this->roomRepo = $roomRepo;
    }

    public function index() {
        $type = \Auth::user()->user_type_id;
        if($type == 1){
            $records = $this->productRepo->allProductByUser();

        }
        else if($type == 3){
            $records = $this->productRepo->allProduct();

        }
        return view('backend/product/index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $type = \Auth::user()->user_type_id;
        if($type == 1){
            $record = \Auth::user()->username;
        }
        else if($type == 3){
            $record = \DB::table('user')->where('user_type_id',1)->get();
        }
        $options = $this->categoryRepo->readCategoryByType(\App\Category::TYPE_PRODUCT);
        $category_html = \App\Helpers\StringHelper::getSelectOptions($options);
        $attributes = $this->attributeRepo->readAttributeByParentAdmin();
        return view('backend/product/create', compact('category_html', 'attributes','record','type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $input = $request->all();
        $validator = \Validator::make($input, $this->productRepo->validateCreate());
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $input['user_id'] = \Auth::user()->id;
        $input['status'] = isset($input['status']) ? 1 : 0;
        $input['created_by'] = \Auth::user()->id;
        $input['view_count'] = 0;
        $product = $this->productRepo->create($input);
        //Thêm vào lịch sử đăng bài
        $this->addPostHistory($product);
        //Thêm danh mục sản phẩm
        $product->categories()->attach($input['category_id']);
        //Thêm thuộc tính sản phẩm
        $attributes = $this->getProductAttributes($input);
        $product->attributes()->attach($attributes);
        if ($product) {
            return redirect()->route('admin.product.index')->with('success', 'Tạo mới thành công');
        } else {
            return redirect()->route('admin.product.index')->with('error', 'Tạo mới thất bại');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $user_id = \DB::table('product')->where('id',$id)->pluck('user_id');
        $records = \DB::table('user')->where('id',$user_id)->get();
        $record = $this->productRepo->find($id);
        $options = $this->categoryRepo->readCategoryByType(\App\Category::TYPE_PRODUCT);
        $category_ids = $record->categories()->get()->pluck('id')->toArray();
        $category_html = \App\Helpers\StringHelper::getSelectOptions($options, $category_ids);
        $attributes = $this->attributeRepo->readAttributeByParentAdmin();
        //Lấy danh sách id thuộc tính của sản phẩm
        $product_attribute_ids = $record->attributes()->get()->pluck('id')->toArray();
        //Lấy danh sách thuộc tính cúa sản phẩm
        $product_attribute = array();
        foreach ($record->attributes()->get() as $key => $val) {
            if ($val != null) {
                $product_attribute[$val->id] = $val->pivot->value;
            }
        }
        return view('backend/product/edit', compact('record', 'category_html', 'attributes', 'product_attribute', 'product_attribute_ids','records'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $input = $request->all();
        $validator = \Validator::make($input, $this->productRepo->validateUpdate($id));
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $input['user_id'] = \Auth::user()->id;
//      status
        $input['status'] = isset($input['status']) ? 1 : 0;
        $input['created_by'] = \Auth::user()->id;
        $res = $this->productRepo->update($input, $id);
        $product = $this->productRepo->find($id);
        //Thêm danh mục sản phẩm
        $product->categories()->sync($input['category_id']);
        //Thêm thuộc tính sản phẩm
        $attributes = $this->getProductAttributes($input);
        $product->attributes()->sync($attributes);
        if ($res) {
            return redirect()->route('admin.product.index')->with('success', 'Cập nhật thành công');
        } else {
            return redirect()->route('admin.product.index')->with('error', 'Cập nhật thất bại');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $product = $this->productRepo->find($id);
        $product->categories()->detach();
        $product->attributes()->detach();
        \DB::table('room')->where('product_id','=',$id)->update(['product_id'=>null]);
        $this->productRepo->delete($id);
        return redirect()->back()->with('success', 'Xóa thành công');
    }

    public function getProductAttributes($input) {
        $attributes = array();
        foreach ($input['attribute'] as $key => $val) {
            $attributes[$key] = ['value' => $val];
        }
        foreach ($input['attribute_select'] as $key => $val) {
            if ($val != null) {
                $attributes[$val] = ['value' => null];
            }
        }
        return $attributes;
    }

    public function getRoom($input) {
        $attributes = array();
        foreach ($input['attribute'] as $key => $val) {
            $attributes[$key] = ['value' => $val];
        }
        foreach ($input['attribute_select'] as $key => $val) {
            if ($val != null) {
                $attributes[$val] = ['value' => null];
            }
        }
        return $attributes;
    }

    public function addPostHistory($product) {

        $post_history['item_id'] = $product->id;
        $post_history['created_at'] = $product->created_at;
        $post_history['updated_at'] = $product->post_schedule ?: $product->updated_at;
        $post_history['module'] = 'product';
        $this->postHistoryRepo->create($post_history);
    }

}
