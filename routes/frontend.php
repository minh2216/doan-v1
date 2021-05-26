<?php

Route::group(['middleware' => 'frontend'], function() {
    Route::get('/', ['as' => 'home.index', 'uses' => 'Frontend\FrontendController@index']);
    Route::get('/marketing/activation/{key}', ['as' => 'marketing.activation', 'uses' => 'Frontend\MarketingController@activation']);
    Route::get('/construction/activation/{key}', ['as' => 'construction.activation', 'uses' => 'Frontend\ConstructionController@activation']);
    Route::get('/member/activation/{key}', ['as' => 'member.activation', 'uses' => 'Frontend\MemberController@activation']);
    /* Sản phẩm */
    // Route::get('/san-pham', ['as' => 'product.index', 'uses' => 'Frontend\ProductController@index']);
    // Route::get('/sale', ['as' => 'product.sale', 'uses' => 'Frontend\ProductController@sale']);
    // Route::get('/san-pham/{alias}', ['as' => 'product.detail', 'uses' => 'Frontend\ProductController@detail']);
    /* Hình ảnh */
    Route::get('/hinh-anh', ['as' => 'gallery.index', 'uses' => 'Frontend\GalleryController@index']);
    Route::get('/hinh-anh/{alias}', ['as' => 'gallery.detail', 'uses' => 'Frontend\GalleryController@detail']);
    /* Thi công */
    Route::get('/thi-cong', ['as' => 'construction.index', 'uses' => 'Frontend\ConstructionController@index']);
    Route::get('/thi-cong/{alias}', ['as' => 'construction.detail', 'uses' => 'Frontend\ConstructionController@detail']);
    Route::get('/thi-cong/du-an/danh-sach', ['as' => 'construction.list_project', 'uses' => 'Frontend\ConstructionController@listProject']);
    Route::get('/thi-cong/tao-moi/du-an', ['as' => 'construction.add_project', 'uses' => 'Frontend\ConstructionController@addProject']);
    Route::get('/thi-cong/du-an/{alias}', ['as' => 'construction.edit_project', 'uses' => 'Frontend\ConstructionController@editProject']);
    Route::get('/thi-cong/du-an/xoa/{alias}', ['as' => 'construction.delete_project', 'uses' => 'Frontend\ConstructionController@deleteProject']);
    Route::post('/thi-cong/du-an/create', ['as' => 'construction.create_project', 'uses' => 'Frontend\ConstructionController@createProject']);
    Route::post('/thi-cong/du-an/update/{id}', ['as' => 'construction.update_project', 'uses' => 'Frontend\ConstructionController@updateProject']);
    Route::get('/thi-cong/tai-khoan/{alias}', ['as' => 'construction.edit_profile', 'uses' => 'Frontend\ConstructionController@editProfile']);
    Route::post('/thi-cong/cap-nhat-tai-khoan/{alias}', ['as' => 'construction.update_profile', 'uses' => 'Frontend\ConstructionController@updateProfile']);
    /* Dự án */
    Route::get('/du-an/{alias}', ['as' => 'project.detail', 'uses' => 'Frontend\ProjectController@detail']);
    /* Video */
    Route::get('/video', ['as' => 'video.index', 'uses' => 'Frontend\VideoController@index']);
    Route::get('/video/{alias}', ['as' => 'video.detail', 'uses' => 'Frontend\VideoController@detail']);
    Route::get('/search-result', ['as' => 'video.search', 'uses' => 'Frontend\VideoController@search']);
    /* Giỏ hàng */
    Route::get('/cart', ['as' => 'product.cart', 'uses' => 'Frontend\ProductController@cart']);
    /* Thanh toán */
    Route::get('/checkout', ['as' => 'product.checkout', 'uses' => 'Frontend\ProductController@checkout']);
    Route::post('/checkout-success', ['as' => 'product.checkout-sucess', 'uses' => 'Frontend\ProductController@checkoutSuccess']);
    /* Tiếp thị liên kết */
    Route::get('/marketing/{alias}', ['as' => 'marketing.index', 'uses' => 'Frontend\MarketingController@index']);
    Route::get('/khach-hang/tai-khoan/{alias}', ['as' => 'member.edit_profile', 'uses' => 'Frontend\MemberController@editProfile']);


    /*Custom*/
    Route::get('/product/{category}', ['as' => 'product.index', 'uses' => 'Frontend\ProductController@index2']);
    Route::get('/detail-product/{alias}', ['as' => 'product.detail', 'uses' => 'Frontend\ProductController@detail2']);
    /*Tin Tức */
    Route::get('/danh-muc-tin/{category}', ['as' => 'news.index', 'uses' => 'Frontend\NewsController@index2']);
    Route::get('/tin-tuc/{alias}', ['as' => 'news.detail', 'uses' => 'Frontend\NewsController@detail2']);


    Route::get('/order', ['as' => 'detail.order', 'uses' => 'Frontend\ProductController@detail_order']);
    Route::post('/sign-in', ['as' => 'account.login', 'uses' => 'Frontend\FrontendController@login']);
    Route::get('/log-out', ['as' => 'account.logout', 'uses' => 'Frontend\FrontendController@logout']);
    // Route::post('/sign-in', ['as' => 'account.login', 'uses' => 'Frontend\FrontendController@login']);
    Route::get('/product/{category}', ['as' => 'product.index', 'uses' => 'Frontend\ProductController@index2']);
    Route::post('/create-login', ['as' => 'account.create', 'uses' => 'Frontend\FrontendController@create']);
    Route::get('/thong-tin-sp', ['as' => 'thong-tin-sp.index', 'uses' => 'Frontend\FrontendController@thongtinsp']);
    Route::get('/contact', ['as' => 'contact.index', 'uses' => 'Frontend\FrontendController@contact']);
    Route::get('/blog', ['as' => 'blog.index', 'uses' => 'Frontend\FrontendController@blog']);
    Route::get('/blog-detail', ['as' => 'blog.detail', 'uses' => 'Frontend\FrontendController@blogdetail']);
    Route::post('/test',['as'=>'order.test', 'uses'=>'Frontend\FrontendController@orderTest']);
});
