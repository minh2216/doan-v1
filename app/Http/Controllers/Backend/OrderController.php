<?php

namespace App\Http\Controllers\Backend;

use App\Repositories\OrderRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use App\Http\Resources\OrderResource;
use Illuminate\Support\Facades\DB;
class OrderController extends Controller
{
    public function __construct(OrderRepository $orderRepo) {
        $this->orderRepo = $orderRepo;
    }
    public function index()
    {
        $id = \Auth::user()->id;
        $product_id = \DB::table('product')->where('user_id',$id)->pluck('id');
        $detail = \DB::table('order_detail')->whereIn('product_id',$product_id)->pluck('order_id');
        $records = \DB::table('order')->whereIn('id',$detail)->get();
        return view('backend/order/index', compact('records'));
    }
    public function show($id)
    {
        $record = $this->orderRepo->find($id);
        return view('backend/order/detail', compact('record'));
    }

    public function destroy($id)
    {
        $this->orderRepo->delete($id);
        return redirect()->back()->with('success','Xóa thành công');
    }

    public function addData(Request $request){
        $order = Order::create($request->all());
        return new OrderResource($order);
    }
}
