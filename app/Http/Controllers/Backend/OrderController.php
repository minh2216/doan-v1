<?php

namespace App\Http\Controllers\Backend;

use App\Repositories\OrderRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use App\Http\Resources\OrderResource;

class OrderController extends Controller
{
    public function __construct(OrderRepository $orderRepo) {
        $this->orderRepo = $orderRepo;
    }
    public function index()
    {
        $records = $this->orderRepo->all();
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
        dd($order);
        return new OrderResource($order);
    }
}
