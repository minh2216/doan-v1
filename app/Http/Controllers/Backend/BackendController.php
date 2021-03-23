<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;
use Repositories\NewsRepository;
use App\Repositories\ContactRepository;
use App\Repositories\RoomRepository;
use Repositories\ConfigRepository;



class BackendController  extends Controller
{
    

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(ProductRepository $productRepo, NewsRepository $newRepo, ContactRepository $contactRepo,RoomRepository $roomRepo ,\Repositories\ConfigRepository $configRepo) {
        $this->productRepo = $productRepo;
        $this->newsRepo = $newRepo;
        $this->contactRepo = $contactRepo;
        $this->configRepo = $configRepo;
        $this->roomRepo = $roomRepo;
    }
    public function index()
    {
        $product_count = $this->productRepo->allProductByUser()->count();
        $room_count = $this->roomRepo->allRoomByHotel()->count();
        $news_count = $this->newsRepo->all()->count();
        $contact_count = $this->contactRepo->all()->count();
        return view('backend/index', compact('product_count', 'news_count', 'contact_count','room_count'));
    }


}