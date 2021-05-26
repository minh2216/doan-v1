<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Repositories\CategoryRepository;
use Repositories\ConstructionRepository;
use Repositories\KeywordRepository;
use App\Repositories\MemberRepository;
use App\Repositories\ProductRepository;
use App\Repositories\OrderRepository;
use Validator;
use DB;
use App\Member;
use GuzzleHttp\Client;
class FrontendController extends Controller {

    public function __construct(CategoryRepository $categoryRepo, ConstructionRepository $constructionRepo, KeywordRepository $keywordRepo, MemberRepository $memberRepo, ProductRepository $productRepo, OrderRepository $orderRepo) {
        $this->categoryRepo = $categoryRepo;
        $this->constructionRepo = $constructionRepo;
        $this->keywordRepo = $keywordRepo;
        $this->memberRepo = $memberRepo;
        $this->productRepo = $productRepo;
        $this->orderRepo = $orderRepo;
    }

    public function index() {
        $category_arr = $this->categoryRepo->readHomeProductCategory();
        $gallery_arr = $this->categoryRepo->readHomeGalleryCategory($limit = 8);
        $construction_arr = $this->constructionRepo->readHomeConstruction($limit = 8);
        $keyword_arr = $this->keywordRepo->readHomeRecentKeyword($limit = 6);
        $logo=1;
        $recommend_homestay = $this->productRepo->getProductByAliasCategory('homestay-goi-y');
        $recommend_location = $this->categoryRepo->readLocationCategory();
        $recommend_product = $this->productRepo->getRecommendHotel($recommend_location->pluck('id'));
        return view('frontend/home/index', compact('category_arr', 'construction_arr', 'keyword_arr','recommend_location','recommend_product','recommend_homestay'));
    }

    public function login(Request $request) {
        $input = [
            'username' => $request->get('username'),
            'password' => $request->get('password'),
        ];
        if (\Auth::guard('member')->attempt($input)) {
            $name = $request->get('username');
            $request->session()->put('username',$request->get('username'));
            $value = $request->session()->get('username');
            return redirect()->route('home.index')->with('login', 'success');
        }

        return redirect()->route('home.index')->with('login', 'failed');

    }

    public function logout(Request $request) {
        $request->session()->flush();
        \Auth::guard('member')->logout();
        return redirect()->route('home.index');
    }

    public function create(Request $request) {
        $input = $request->all();
        $validator = \Validator::make($input, $this->memberRepo->validateCreate());
        if ($validator->fails()) {
            return redirect()->route('home.index')->with('create', 'failed');
        }
        $password = $request->get('password');
        $input['password'] = bcrypt($password);
        $this->memberRepo->create($input);
        return redirect()->route('home.index')->with('create', 'success');

    }

    public function sanpham() {
        $logo=0;
        return view('frontend/product/list');
    }

    public function thongtinsp() {
        return view('frontend/product/detail');
    }

    public function contact() {
        return view('frontend/contact/index');
    }

    public function blog() {
        return view('frontend/blog/index');
    }

    public function blogdetail() {
        return view('frontend/blog/detail');
    }

    public function orderTest(Request $request){
        $input = $request->all();
        $validator = \Validator::make($input, $this->orderRepo->validateCreate());
        if ($validator->fails()) {
            return redirect()->route('home.index')->with('create', 'failed');
        }
        $client = new Client();
        $response = $client->request('POST','http://myweb.com.local/api/addData', [
            'form_params' => [
                'contact' => $request->get('contact'),
                'email' => $request->get('email'),
                'payment_method' => $request->get('payment_method'),
                'transport_method' => $request->get('transport_method'),
                'mobile' => $request->get('mobile'),
                'total' => $request->get('total'),
                'address' => $request->get('address'),
            ]
        ]);
        return redirect()->route('home.index')->with('create', 'success');

    }
}
