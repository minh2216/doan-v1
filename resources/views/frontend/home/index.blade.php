@extends('frontend.layouts.master')
@section('content')
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from pixner.net/emigrar/emigrar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Jan 2021 02:47:42 GMT -->


<body>

    <!-- /preloder -->
  <div class="rt-preloder">
    <div class="preloder-box">
        <img src="{{asset('public/assets/frontend/images/all-img/preloder.svg')}}" alt="preloder image" draggable="false">
    </div>
</div>

<!-- 
    !============= Banner Area Start ===========!
 -->


<section class="rt-banner-area">
    <div class="single-rt-banner rt-banner-height" style="background-image: url({{asset('public/assets/frontend/images/all-img/banner01.png')}})">
        <div class="container">
            <div class="row  rt-banner-height align-items-center">
                <div class="col-lg-9">
                    <div class="rt-banner-content">
                        <h1 class="wow fade-in-bottom" data-wow-duration="1s" data-wow-delay="0.5s">
                            Khám phá<br>
                            Thế giới!
                        </h1>
                        <p class="wow fade-in-top">
                            Bạn có thể đặt phòng với giá thấp nhất<br>
                            Đăng ký để nhận được nhiều ưu đãi từ chúng tôi.
                        </p>
                    
        <div class="rt-banner-searchbox standard-search wow fade-in-bottom" data-wow-duration="1s" data-wow-delay="1s">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane show active" id="rt-item_a_first" role="tabpanel" aria-labelledby="rt-item_a_first">
                    <form action="#">
                        <div class="rt-radio-group">
                            <div class="dropdown form-check-inline rt-searchlink">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink24" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Guestes per room
                                </a>
                        
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink24">
                                    <a class="dropdown-item" href="#">Room one</a>
                                    <a class="dropdown-item" href="#">Room two</a>
                                    <a class="dropdown-item" href="#">Room three</a>
                                </div>
                            </div><!-- ./dropdown -->
                        </div><!-- /.radio-group -->
                        <div class="rt-input-group">
                            <div class="single-input  col-rt-in-3">
                                <input type="text" class="form-control" placeholder="destination">
                               
                            </div><!-- /.single-input -->
                            <div class="single-input  col-rt-in-3">
                               <input type="text" class="form-control rt-date-picker has-icon" placeholder="Depart">
                               <span class="input-iconbadge"><i class="icofont-ui-calendar"></i></span>
                            </div><!-- /.single-input -->
                            <div class="single-input  col-rt-in-3">
                                <input type="text" class="form-control rt-date-picker has-icon" placeholder="Return">
                                <span class="input-iconbadge"><i class="icofont-ui-calendar"></i></span>
                            </div><!-- /.single-input -->
                            <div class="single-input  col-rt-in-3">
                                <input type="text" class="form-control" placeholder="keywords(optional)">
                            </div><!-- /.single-input -->
                            <div class="single-input  col-rt-in-1">
                                <button type="submit"><i class="icofont-search"></i></button>
                            </div><!-- /.single-input -->
                        </div><!-- /.rt-input-group -->
                    </form><!-- ./ form -->
                </div>
            </div>
        </div><!-- /.rt-banner-searchbox -->
                    </div><!-- end banner content -->
                </div><!-- end column -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end single rt banner -->
</section>


<!-- 
    ========= Counter Start ========================
 -->
<div class="counter-area">
    <div class="container">
        <div class="row">
            


            <div class="col-lg-4 col-md-6 col-12">
                <div class="media counter-box-1 align-items-center wow fadeInUp">
                    <img src="{{asset('public/assets/frontend/images/counter-icons/hotel.svg')}}" alt="counter_iocn" draggable="false" style="width: 65px;">
                    <div class="media-body">
                        <h5>Số khách sạn hoạt động trên hệ thống</h5>
                        <h6><span class="counter">20,000</span><span>+</span></h6>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 col-md-6 col-12" >
                <div class="media counter-box-1 align-items-center wow fadeInUp" data-wow-duration="1.5s">
                    <img src="{{asset('public/assets/frontend/images/counter-icons/member.svg')}}" alt="counter_iocn" draggable="false" style="width: 65px;">
                    <div class="media-body">
                        <h5>Lượng khách hàng đã đăng ký</h5>
                        <h6><span class="counter">40,000</span><span>+</span></h6>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="media counter-box-1 align-items-center wow fadeInUp" data-wow-duration="2s">
                <img src="{{asset('public/assets/frontend/images/counter-icons/booking.svg')}}" alt="counter_iocn" draggable="false" style="width: 65px;">
                    <div class="media-body">
                        <h5>Số lượt đặt phòng mỗi ngày</h5>
                        <h6><span class="counter">1000</span><span>+</span></h6>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
    
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.counter -->

<!-- 
    ============Deal Area Start===============
 -->


 <section class="deal-area   rtbgprefix-full bg-hide-md" style="background-image: url({{asset('public/assets/frontend/images/backgrounds/bgshapes_1.png')}})">
    <div class="container-fluid p-0">
       <div class="deal-carosel-active owl-carousel">
            @foreach($recommend_homestay as $key =>$product)
            <div class="row single-deal-carosel align-items-center">
                <div class="col-lg-5">
                    <div class="deal-bg" style="background-image: url({!!$product->getFirstImage()!!})">
<!--                         <div class="inner-content">
                            <h4 data-animation="fadeInDown" data-duration=".2s" data-delay=".4s">{!!$product->title!!}</h4>
                            <p data-animation="fade-in-bottom" data-duration=".2s" data-delay=".4s" style="padding: 0 10px;">{!!$product->description!!}</p>
                        </div> -->
                    </div><!-- /.deal-bg -->
                </div><!-- /.col-md-6 -->
                <div class="col-lg-7">
                    <div class="rt-section-title-wrapper text-white" data-animation="fadeIn" data-duration=".4s" >
                        <h2 class="rt-section-title">
                            <span>Ưu đãi của chúng tôi</span>
                            Top Homestay đang được sale nhiều nhất
                        </h2><!-- /.rt-section-title -->
                        <p>Find great experiences, trips, and activities at fantastic prices around the globe.</p>
                        <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
                        <div class="deal-bottom-content">
                            <div class="rating-box">
                                <span class="d-block">EXCELLENT</span>
                                <span class="d-block"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>  of 205 Reviews</span>
                                <span class="d-block">Reviewed by Kim - Denmark</span>
                            </div><!-- /.rating-box -->
                            <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
                            <h4>Thailand Tours and Holidays 2018/2019</h4>
                            <p>
                                {!!$product->description!!}
                            </p>
                            <div class="rt-button-group">
                                <a href="#" class="rt-btn rt-gradient rt-rounded rt-Bshadow-2">Read More</a>
                                <a href="#" class="rt-btn rt-outline-gradientL rt-rounded">Help Me Plan My Trip</a>
                            </div>
                        </div><!-- /.deal-bottom-content -->
                    </div><!-- /.rt-section-title-wrapper -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
            @endforeach
       </div><!-- /.deal-carosel-active -->
    </div><!-- /.container -->
 </section>

<!-- 
    ============ Portfolio Start===============
 -->
<div class="spacer-top"></div><!-- /.spacer-top -->
<section class="portfolio-area rt-section-padding rtbgprefix-full bg-hide-md gradinet-bg-md" style="background-image: url({{asset('public/assets/frontend/images/backgrounds/portfoliobg.png')}})">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 text-center mx-auto text-center">
                <div class="rt-section-title-wrapper text-white">
                    <h2 class="rt-section-title">
                        <span>Bạn còn đang do dự ?</span>
                        Gợi ý của chúng tôi
                    </h2><!-- /.rt-section-title -->
                    <p>Chúng tôi đã lập một danh sách các hoạt động được đề xuất dựa trên sở thích của bạn. Hãy lướt qua các Khách sạn nổi tiếng nhất của chúng tôi! Các Chuyến tham quan Nổi bật của chúng tôi có thể giúp bạn tìm thấy chuyến đi hoàn hảo cho mình !.</p>
                </div><!-- /.rt-section-title-wrapper- -->
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
        <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
        <div class="row">
            <div class="col-12">
                <ul class="filter-list">
                    <li data-filter="*" class="active ">Tất cả</li>
                    @foreach($recommend_location as $key => $location)
                    <li data-filter=".cat-{!!$location->id!!}">{!!$location->title!!}</li>
                    @endforeach
                </ul>
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
        <div class="row grid">
            @foreach($recommend_product as $key => $product)
            <div class="col-lg-4 col-md-6 grid-item cat-{!!$product->category_id!!}">
                <div class="portfolio-box-1 wow fade-in-bottom " style="background-image: url({!!$product->getFirstImage()!!})">
                    <div class="rt-overlay"></div><!-- /.rt-overlay -->
                    <div class="portfolio-badge">
                        <span>From</span>
                        <span><sup>$</sup>239</span>
                    </div><!-- /.portfolio-badge -->
                    <div class="inner-content text-white">
                        <h6>{!!$product->title!!}</h6>
                        <p> <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <span>4.5 / 5 (473 reviews)</span>
                        </p>
                    </div><!-- /.inner-content -->
                </div><!-- /.portfolio-box-1 -->
            </div><!-- /.col-md-4 -->
            @endforeach
        </div><!-- /.row -->
        <div class="row">
            <div class="col-12 text-center mt-4">
                <a href="#" class="rt-btn rt-gradient text-uppercase rt-sm rt-rounded rt-Bshadow-1">browse more</a><!-- /.rt-btn -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

<!-- 
    ============= video area start==========
 -->

 <div class="play-video rtbgprefix-full bg-hide-md" style="background-image: url({{asset('public/assets/frontend/images/backgrounds/videobg.png')}})">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 mx-auto">
                <div class="play-video-box rtbgprefix-cover" style="background-image: url({{asset('public/assets/frontend/images/backgrounds/play-video-bg.png')}})">
    <a href="https://vimeo.com/310740632" class="rt-btn rt-video-light playVideo"></a>
</div><!-- /.play-video-box -->
            </div><!-- /.col-lg-10 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>


<!-- ==================End Js Link===================== -->

</body>


<!-- Mirrored from pixner.net/emigrar/emigrar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Jan 2021 02:49:17 GMT -->
</html>











@stop

