<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Repositories\CategoryRepository;
use Repositories\ConstructionRepository;
use Repositories\KeywordRepository;

class FrontendController extends Controller {

    public function __construct(CategoryRepository $categoryRepo, ConstructionRepository $constructionRepo, KeywordRepository $keywordRepo) {
        $this->categoryRepo = $categoryRepo;
        $this->constructionRepo = $constructionRepo;
        $this->keywordRepo = $keywordRepo;
    }

    public function index() {
        $category_arr = $this->categoryRepo->readHomeProductCategory();
        $gallery_arr = $this->categoryRepo->readHomeGalleryCategory($limit = 8);
        $construction_arr = $this->constructionRepo->readHomeConstruction($limit = 8);
        $keyword_arr = $this->keywordRepo->readHomeRecentKeyword($limit = 6);
        $logo=1;
        return view('frontend/home/index', compact('category_arr', 'construction_arr', 'keyword_arr'));
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
