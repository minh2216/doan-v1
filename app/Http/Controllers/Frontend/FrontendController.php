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
use Validator;
use DB;
use App\Member;

class FrontendController extends Controller {

    public function __construct(CategoryRepository $categoryRepo, ConstructionRepository $constructionRepo, KeywordRepository $keywordRepo, MemberRepository $memberRepo, ProductRepository $productRepo) {
        $this->categoryRepo = $categoryRepo;
        $this->constructionRepo = $constructionRepo;
        $this->keywordRepo = $keywordRepo;
        $this->memberRepo = $memberRepo;
        $this->productRepo = $productRepo;
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
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);

    }

    public function create(Request $request) {
        $input = $request->all();
        $validator = \Validator::make($input, $this->memberRepo->validateCreate());
        if ($validator->fails()) {
            return response()->json(['success' => false]);
        }
        $password = $request->get('password');
        $input['password'] = bcrypt($password);
        $this->memberRepo->create($input);
        return view('frontend/home/index');
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
}
