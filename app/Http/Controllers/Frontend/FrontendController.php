<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Repositories\CategoryRepository;
use Repositories\ConstructionRepository;
use Repositories\KeywordRepository;
use DB;
use App\Repositories\MemberRepository;

class FrontendController extends Controller {

    public function __construct(CategoryRepository $categoryRepo, ConstructionRepository $constructionRepo, KeywordRepository $keywordRepo, MemberRepository $memberRepo) {
        $this->categoryRepo = $categoryRepo;
        $this->constructionRepo = $constructionRepo;
        $this->keywordRepo = $keywordRepo;
        $this->memberRepo = $memberRepo;
    }

    public function index() {
        $category_arr = $this->categoryRepo->readHomeProductCategory();
        $gallery_arr = $this->categoryRepo->readHomeGalleryCategory($limit = 8);
        $construction_arr = $this->constructionRepo->readHomeConstruction($limit = 8);
        $keyword_arr = $this->keywordRepo->readHomeRecentKeyword($limit = 6);
        $logo=1;
        return view('frontend/home/index', compact('category_arr', 'construction_arr', 'keyword_arr'));
    }

    public function login(Request $request) {
        $input = $request->all();
        $input['password'] = md5($input['password']);
        dd($input['password']);
        $check = DB::table('member')->get();
        dd($check);
        return view('frontend/home/index');
    }

    public function create(Request $request) {
        $input = $request->all();
        $validator = \Validator::make($input, $this->memberRepo->validateCreate());
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('error',1);
        }
        $member = $this->memberRepo->create($input);
        dd($member);
        if ($product) {
            return redirect()->route('admin.product.index')->with('success', 'Tạo mới thành công');
        } else {
            return redirect()->route('admin.product.index')->with('error', 'Tạo mới thất bại');
        }
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
