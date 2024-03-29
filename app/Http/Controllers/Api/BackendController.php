<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\StringHelper;
use App\Repositories\OrderRepository;
use DB;
class BackendController extends Controller {

    public function __construct(OrderRepository $orderRepo) {
        $this->orderRepo = $orderRepo;
    }

    public function slugify(Request $request) {
        return response()->json(['alias' => StringHelper::slug($request->get('title'))]);
    }

    public function changeStatus(Request $request) {
        $order_id = $request->get('order_id');
        $status = $request->get('status');
        $this->orderRepo->update(['status' => $status], $order_id);
        return response()->json(array('success' => true));
    }
    public function getStateList(Request $request)
    {
        $data = $request->all();
        if($data['action']){
            $output = '';
            if($data['action']=="province"){
                $id_city = DB::table('province')->where('id',$data['ma_id'])->pluck('id')->first();
                $select_province = DB::table('district')->where('province_id',$id_city)->get();
                    $output.='<option>---Chọn quận/ huyện---</option>';
                foreach($select_province as $key => $province){
                    $output.='<option value="'.$province->id.'">'.$province->title.'</option>';
                }

            }
            echo $output;
        }
    }
}
