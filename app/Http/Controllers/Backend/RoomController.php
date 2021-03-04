<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;
use App\Repositories\RoomRepository;
use App\Repositories\FacilitiesRepository;
use Repositories\CategoryRepository;
use Repositories\AttributeRepository;
use Repositories\PostHistoryRepository;

class RoomController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(ProductRepository $productRepo, CategoryRepository $categoryRepo, AttributeRepository $attributeRepo, PostHistoryRepository $postHistoryRepo, RoomRepository $roomRepo, FacilitiesRepository $facilitiesRepo) {
        $this->productRepo = $productRepo;
        $this->categoryRepo = $categoryRepo;
        $this->attributeRepo = $attributeRepo;
        $this->postHistoryRepo = $postHistoryRepo;
        $this->roomRepo = $roomRepo;
        $this->facilitiesRepo = $facilitiesRepo;
    }

    public function index() {
        $records = $this->roomRepo->all();$records1 = $this->productRepo->all();
        return view('backend/room/index', compact('records','records1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
        $options = $this->categoryRepo->readCategoryByType(\App\Category::TYPE_PRODUCT);
        $category_html = \App\Helpers\StringHelper::getSelectOptions($options);
        $facilities = $this->facilitiesRepo->readFacilitiesByParentAdmin();
        $options1 = $this->productRepo->allProduct(\App\Product::TYPE_PRODUCT);
        $product_html = \App\Helpers\StringHelper::getSelectOptions($options1);
        $room = $this->productRepo->allProduct();
        return view('backend/room/create', compact('product_html', 'facilities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $input = $request->all();
        $validator = \Validator::make($input, $this->roomRepo->validateCreate());
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $input['status'] = isset($input['status']) ? 1 : 0;
        $input['is_hot'] = isset($input['is_hot']) ? 1 : 0;
        $input['is_new'] = isset($input['is_new']) ? 1 : 0;
        $input['created_by'] = \Auth::user()->id;
        $input['view_count'] = 0;
        $input['post_schedule'] = isset($input['post_schedule']) ? $input['post_schedule_submit'] : date('Y-m-d H:i:s');
        $room = $this->roomRepo->create($input);
        //Thêm vào lịch sử đăng bài
        $this->addPostHistory($room);
        //thêm khách sạn     
        $room->product()->attach($input['product_id']);
        //Thêm danh mục sản phẩm
        // $product->categories()->attach($input['category_id']);
        //Thêm thuộc tính sản phẩm
        $facilities = $this->getRoomFacilities($input);
        $room->facilities()->attach($facilities);

        if ($room) {
            return redirect()->route('admin.room.index')->with('success', 'Tạo mới thành công');
        } else {
            return redirect()->route('admin.room.index')->with('error', 'Tạo mới thất bại');
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
        $record = $this->roomRepo->find($id);
        $options = $this->productRepo->allProduct(\App\Category::TYPE_PRODUCT);
        $product_ids = $record->product()->get()->pluck('id')->toArray();
        $product_html = \App\Helpers\StringHelper::getSelectOptions($options, $product_ids);
        $facilities = $this->facilitiesRepo->readFacilitiesByParentAdmin();
        //Lấy danh sách id thuộc tính của sản phẩm
        $room_facilities_ids = $record->facilities()->get()->pluck('id')->toArray();
        //Lấy danh sách thuộc tính cúa sản phẩm
        $room_facilities = array();
        foreach ($record->facilities()->get() as $key => $val) {
            if ($val != null) {
                $room_facilities[$val->id] = $val->pivot->value;
            }
        }
        return view('backend/room/edit', compact('record', 'facilities', 'room_facilities', 'room_facilities_ids','product_html'));
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
        $validator = \Validator::make($input, $this->roomRepo->validateUpdate($id));
        if ($validator->fails()) {
            dd(123);
            return redirect()->back()->withErrors($validator)->withInput();
        }
//      status
        $input['status'] = isset($input['status']) ? 1 : 0;
        $input['created_by'] = \Auth::user()->id;
        $res = $this->roomRepo->update($input, $id);
        $room = $this->roomRepo->find($id);
        //Thêm danh mục sản phẩm
        // $product->categories()->sync($input['category_id']);
        //Thêm thuộc tính sản phẩm
        $facilities = $this->getRoomFacilities($input);
        $room->facilities()->sync($facilities);
        if ($res) {
            return redirect()->route('admin.room.index')->with('success', 'Cập nhật thành công');
        } else {
            return redirect()->route('admin.room.index')->with('error', 'Cập nhật thất bại');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $room = $this->roomRepo->find($id);
        // $room->categories()->detach();
        $room->facilities()->detach();
        $this->roomRepo->delete($id);
        return redirect()->back()->with('success', 'Xóa thành công');
    }

    public function getRoomFacilities($input) {
        $facilities = array();
        foreach ($input['facilities'] as $key => $val) {
            $facilities[$key] = ['value' => $val];
        }
        foreach ($input['facilities_select'] as $key => $val) {
            if ($val != null) {
                $facilities[$val] = ['value' => null];
            }
        }
        return $facilities;
    }

    public function addPostHistory($product) {

        $post_history['item_id'] = $product->id;
        $post_history['created_at'] = $product->created_at;
        $post_history['updated_at'] = $product->post_schedule ?: $product->updated_at;
        $post_history['module'] = 'product';
        $this->postHistoryRepo->create($post_history);
    }

}
