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
    ===========Services Area start==========
 -->
<section class="emigr-services-area rtbgprefix-contain" style="background-image: url({{asset('public/assets/frontend/images/backgrounds/dotbg.png')}})">
    <div class="spacer-bottom"></div><!-- /.spacer-bottom -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 text-center mx-auto">
                <div class="rt-section-title-wrapper">
                    <h2 class="rt-section-title">
                        <span>Vì sao nên lựa chọn website của chúng tôi?</span>
                        Giá trị cốt lõi
                    </h2><!-- /.rt-section-title -->
                    <p>Đội ngũ chuyên gia của chúng tôi luôn sẵn sàng giải quyết mọi nhu cầu của bạn</p>
                </div><!-- /.rt-section-title-wrapper- -->
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
        <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
        <div class="row">
            <div class="col-lg-4 col-md-6 mx-auto text-center">
                <div class="services-box-1 wow fade-in-bottom">
                    <div class="services-thumb">
                        <img src="{{asset('public/assets/frontend/images/service-icons/s_icon_1.png')}}" alt="" draggable="false">
                    </div><!-- /.services-thumb -->
                    <h4>Accommodation</h4>
                    <p>No matter where you are travelling, Emigrar is here to help you get the best deals in Hotels around the world.</p>
                </div><!-- /.services-box-1 -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 col-md-6 mx-auto text-center">
                <div class="services-box-1 wow fade-in-bottom" data-wow-duration="1.5s">
                    <div class="services-thumb">
                        <img src="{{asset('public/assets/frontend/images/service-icons/s_icon_2.png')}}" alt="" draggable="false">
                    </div><!-- /.services-thumb -->
                    <h4>Transportation</h4>
                    <p>Whether you are travelling through Air, Sea or Land, Emigrar can arrange transportation according to.</p>
                </div><!-- /.services-box-1 -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 col-md-6 mx-auto text-center">
                <div class="services-box-1 wow fade-in-bottom" data-wow-duration="2s">
                    <div class="services-thumb">
                    <img src="{{asset('public/assets/frontend/images/service-icons/s_icon_3.png')}}" alt="" draggable="false">
                    </div><!-- /.services-thumb -->
                    <h4>Expert Trip Planning</h4>
                    <p>Our Talented and Expert Trip Planning Team can make itinerary that suits our clients the best. We will make your travel</p>
                </div><!-- /.services-box-1 -->
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
    <div class="spacer-bottom"></div><!-- /.spacer-bottm -->
</section>


<!-- 
    ============Deal Area Start===============
 -->


 <section class="deal-area   rtbgprefix-full bg-hide-md" style="background-image: url({{asset('public/assets/frontend/images/backgrounds/bgshapes_1.png')}})">
    <div class="container-fluid p-0">
       <div class="deal-carosel-active owl-carousel">
            <div class="row single-deal-carosel align-items-center">
                <div class="col-lg-5">
                    <div class="deal-bg" style="background-image: url({{asset('public/assets/frontend/images/all-img/deal-bg.jpg')}})">
                        <div class="inner-content">
                            <h4 data-animation="fadeInDown" data-duration=".2s" data-delay=".4s">14 Day Classic Tour of Thailand & Beaches</h4>
                            <p data-animation="fade-in-bottom" data-duration=".2s" data-delay=".4s">Grab a promo code for extra savings up to 75% on discounted hotels!</p>
                        </div><!-- /.inner-content -->
                    </div><!-- /.deal-bg -->
                </div><!-- /.col-md-6 -->
                <div class="col-lg-7">
                    <div class="rt-section-title-wrapper text-white" data-animation="fadeIn" data-duration=".4s" >
                        <h2 class="rt-section-title">
                            <span>Take a Look at Our</span>
                            Today's Top Deals
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
                                Thailand is the perfect destination for those who love to spend time outdoors. You can soak up the
                                sunshine on the beautiful beaches of Phuket, or head to the North of the country to Chiang Mai for adventure and
                                outdoor
                                activities like water rafting and trekking. Of course, not to be missed is Bangkok, where you can tour its
                                floating
                                markets or lavish Grand Palace.
                            </p>
                            <div class="rt-button-group">
                                <a href="#" class="rt-btn rt-gradient rt-rounded rt-Bshadow-2">Read More</a>
                                <a href="#" class="rt-btn rt-outline-gradientL rt-rounded">Help Me Plan My Trip</a>
                            </div>
                        </div><!-- /.deal-bottom-content -->
                    </div><!-- /.rt-section-title-wrapper -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
            <div class="row single-deal-carosel align-items-center">
                <div class="col-lg-5">
                    <div class="deal-bg" style="background-image: url({{asset('public/assets/frontend/images/all-img/deal-bg.jpg')}})">
                        <div class="inner-content">
                            <h4 data-animation="fadeInDown" data-duration=".2s" data-delay=".4s">14 Day Classic Tour of Thailand & Beaches</h4>
                            <p data-animation="fade-in-bottom" data-duration=".2s" data-delay=".4s">Grab a promo code for extra savings up to 75% on discounted hotels!</p>
                        </div><!-- /.inner-content -->
                    </div><!-- /.deal-bg -->
                </div><!-- /.col-md-6 -->
                <div class="col-lg-7">
                    <div class="rt-section-title-wrapper text-white" data-animation="fadeIn" data-duration=".4s" >
                        <h2 class="rt-section-title">
                            <span>Take a Look at Our</span>
                            Today's Top Deals
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
                                Thailand is the perfect destination for those who love to spend time outdoors. You can soak up the
                                sunshine on the beautiful beaches of Phuket, or head to the North of the country to Chiang Mai for adventure and
                                outdoor
                                activities like water rafting and trekking. Of course, not to be missed is Bangkok, where you can tour its
                                floating
                                markets or lavish Grand Palace.
                            </p>
                            <div class="rt-button-group">
                                <a href="#" class="rt-btn rt-gradient rt-rounded rt-Bshadow-2">Read More</a>
                                <a href="#" class="rt-btn rt-outline-gradientL rt-rounded">Help Me Plan My Trip</a>
                            </div>
                        </div><!-- /.deal-bottom-content -->
                    </div><!-- /.rt-section-title-wrapper -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
            <div class="row single-deal-carosel align-items-center">
                <div class="col-lg-5">
                    <div class="deal-bg" style="background-image: url({{asset('public/assets/frontend/images/all-img/deal-bg.jpg')}})">
                        <div class="inner-content">
                            <h4 data-animation="fadeInDown" data-duration=".2s" data-delay=".4s">14 Day Classic Tour of Thailand & Beaches</h4>
                            <p data-animation="fade-in-bottom" data-duration=".2s" data-delay=".4s">Grab a promo code for extra savings up to 75% on discounted hotels!</p>
                        </div><!-- /.inner-content -->
                    </div><!-- /.deal-bg -->
                </div><!-- /.col-md-6 -->
                <div class="col-lg-7">
                    <div class="rt-section-title-wrapper text-white" data-animation="fadeIn" data-duration=".4s" >
                        <h2 class="rt-section-title">
                            <span>Take a Look at Our</span>
                            Today's Top Deals
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
                                Thailand is the perfect destination for those who love to spend time outdoors. You can soak up the
                                sunshine on the beautiful beaches of Phuket, or head to the North of the country to Chiang Mai for adventure and
                                outdoor
                                activities like water rafting and trekking. Of course, not to be missed is Bangkok, where you can tour its
                                floating
                                markets or lavish Grand Palace.
                            </p>
                            <div class="rt-button-group">
                                <a href="#" class="rt-btn rt-gradient rt-rounded rt-Bshadow-2">Read More</a>
                                <a href="#" class="rt-btn rt-outline-gradientL rt-rounded">Help Me Plan My Trip</a>
                            </div>
                        </div><!-- /.deal-bottom-content -->
                    </div><!-- /.rt-section-title-wrapper -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
       </div><!-- /.deal-carosel-active -->
    </div><!-- /.container -->
 </section>
<!-- 
    ========works start==========
 -->
<div class="spacer-top"></div><!-- /.spacer-top -->
 <section class="works-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 text-center mx-auto text-center">
                <div class="rt-section-title-wrapper">
                    <h2 class="rt-section-title">
                        <span>Here's How It Works</span>
                        Getting Started? It’s Simple
                    </h2><!-- /.rt-section-title -->
                    <p>Prepare For Your Trip.Find out all you need to know before you go.Traveling is as unique as you are. And there is no one
                    package that fits all. That's why we offer customized travel packages.</p>
                </div><!-- /.rt-section-title-wrapper- -->
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
        <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
        <div class="row">
            <div class="col-lg-3 col-md-6 mx-auto text-center">
                <div class="services-box-2 wow fade-in-bottom">
                    <div class="services-thumb">
                        <img src="{{asset('public/assets/frontend/images/service-icons/s_icon_4.png')}}" alt="service-icons" draggable="false">
                    </div><!-- /.services-thumb -->
                    <span class="inner-counter"></span>
                    <h4>Search</h4>
                    <p>Over 1,200,000 Hotels, Apartments
                        and Hostels</p>
                </div><!-- /.services-box-2 -->
            </div><!-- /.col-lg-3 -->
            <div class="col-lg-3 col-md-6 mx-auto text-center">
                <div class="services-box-2 wow fade-in-bottom" data-wow-duration="1s">
                    <div class="services-thumb">
                        <img src="{{asset('public/assets/frontend/images/service-icons/s_icon_5.png')}}" alt="service-icons" draggable="false">
                    </div><!-- /.services-thumb -->
                    <span class="inner-counter"></span>
                    <h4>Compare & Book</h4>
                    <p>By price, location, rating
                        and more.</p>
                </div><!-- /.services-box-2 -->
            </div><!-- /.col-lg-3 -->
            <div class="col-lg-3 col-md-6 mx-auto text-center">
                <div class="services-box-2 wow fade-in-bottom" data-wow-duration="1.5s">
                    <div class="services-thumb">
                        <img src="{{asset('public/assets/frontend/images/service-icons/s_icon_6.png')}}" alt="service-icons" draggable="false">
                    </div><!-- /.services-thumb -->
                    <span class="inner-counter"></span>
                    <h4>Get travel insurance</h4>
                    <p>Buy comprehensive cover for
                        your next trips</p>
                </div><!-- /.services-box-2 -->
            </div><!-- /.col-lg-3 -->
            <div class="col-lg-3 col-md-6 mx-auto text-center">
                <div class="services-box-2 wow fade-in-bottom" data-wow-duration="2s">
                    <div class="services-thumb">
                        <img src="{{asset('public/assets/frontend/images/service-icons/s_icon_7.png')}}" alt="service-icons" draggable="false">
                    </div><!-- /.services-thumb -->
                    <span class="inner-counter"></span>
                    <h4>Book a room</h4>
                    <p>By finding the best price for
                        your ideal hotel.</p>
                </div><!-- /.services-box-2 -->
            </div><!-- /.col-lg-3 -->
            <div class="col-12 text-center mt-4">
                <a href="#" class="rt-btn rt-gradient text-uppercase rt-sm rt-rounded rt-Bshadow-2">Tour the world</a><!-- /.rt-btn -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
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
                        <span>Take a Look at Our</span>
                        Recommended Hotels
                    </h2><!-- /.rt-section-title -->
                    <p>We've made a list of suggested activities based on your interests.Browse through our most popular
                    Hotels!Our Featured Tours can help you find the trip that's perfect for you!.</p>
                </div><!-- /.rt-section-title-wrapper- -->
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
        <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
        <div class="row">
            <div class="col-12">
                <ul class="filter-list">
                    <li data-filter="*" class="active ">New York</li>
                    <li data-filter=".cat-1">London</li>
                    <li data-filter=".cat-2">Paris</li>
                    <li data-filter=".cat-3">Hong Kong</li>
                    <li data-filter=".cat-4">Bangkok</li>
                    <li data-filter=".cat-5">Singapore</li>
                    <li data-filter=".cat-5">Tokyo</li>
                </ul>
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
        <div class="row grid">
            <div class="col-lg-4 col-md-6 grid-item cat-1 cat-5 cat-4">
                <div class="portfolio-box-1 wow fade-in-bottom " style="background-image: url({{asset('public/assets/frontend/images/portfolio/port-1.jpg')}})">
                    <div class="rt-overlay"></div><!-- /.rt-overlay -->
                    <div class="portfolio-badge">
                        <span>From</span>
                        <span><sup>$</sup>239</span>
                    </div><!-- /.portfolio-badge -->
                    <div class="inner-content text-white">
                        <h6>The Millenium Hilton New York</h6>
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
            <div class="col-lg-4 col-md-6 grid-item cat-2 cat-3 cat-5">
                <div class="portfolio-box-1 wow fade-in-bottom " style="background-image: url({{asset('public/assets/frontend/images/portfolio/port-2.jpg')}})" data-wow-duration="1s">
                    <div class="rt-overlay"></div><!-- /.rt-overlay -->
                    <div class="portfolio-badge">
                        <span>From</span>
                        <span><sup>$</sup>239</span>
                    </div><!-- /.portfolio-badge -->
                    <div class="inner-content text-white">
                        <h6>The Millenium Hilton New York</h6>
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
            <div class="col-lg-4 col-md-6 grid-item cat-1 cat-4">
                <div class="portfolio-box-1 wow fade-in-bottom " style="background-image: url({{asset('public/assets/frontend/images/portfolio/port-3.jpg')}})" data-wow-duration="1.3s">
                    <div class="rt-overlay"></div><!-- /.rt-overlay -->
                    <div class="portfolio-badge">
                        <span>From</span>
                        <span><sup>$</sup>239</span>
                    </div><!-- /.portfolio-badge -->
                    <div class="inner-content text-white">
                        <h6>The Millenium Hilton New York</h6>
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
            <div class="col-lg-4 col-md-6 grid-item cat-4 cat-3 cat-5">
                <div class="portfolio-box-1 wow fade-in-bottom " style="background-image: url({{asset('public/assets/frontend/images/portfolio/port-4.jpg')}})" data-wow-duration="1.6s">
                    <div class="rt-overlay"></div><!-- /.rt-overlay -->
                    <div class="portfolio-badge">
                        <span>From</span>
                        <span><sup>$</sup>239</span>
                    </div><!-- /.portfolio-badge -->
                    <div class="inner-content text-white">
                        <h6>The Millenium Hilton New York</h6>
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
            <div class="col-lg-4 col-md-6 grid-item cat-1 cat-5">
                <div class="portfolio-box-1 wow fade-in-bottom " style="background-image: url({{asset('public/assets/frontend/images/portfolio/port-5.jpg')}})" data-wow-duration="1.9s">
                    <div class="rt-overlay"></div><!-- /.rt-overlay -->
                    <div class="portfolio-badge">
                        <span>From</span>
                        <span><sup>$</sup>239</span>
                    </div><!-- /.portfolio-badge -->
                    <div class="inner-content text-white">
                        <h6>The Millenium Hilton New York</h6>
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
            <div class="col-lg-4 col-md-6 grid-item cat-3 cat-5">
                <div class="portfolio-box-1 wow fade-in-bottom " style="background-image: url({{asset('public/assets/frontend/images/portfolio/port-6.jpg')}})" data-wow-duration="2.2s">
                    <div class="rt-overlay"></div><!-- /.rt-overlay -->
                    <div class="portfolio-badge">
                        <span>From</span>
                        <span><sup>$</sup>239</span>
                    </div><!-- /.portfolio-badge -->
                    <div class="inner-content text-white">
                        <h6>The Millenium Hilton New York</h6>
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
        </div><!-- /.row -->
        <div class="row">
            <div class="col-12 text-center mt-4">
                <a href="#" class="rt-btn rt-gradient text-uppercase rt-sm rt-rounded rt-Bshadow-1">browse more</a><!-- /.rt-btn -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

<!-- 
    ======== Flight deals start======
 -->

<div class="spacer-top"></div><!-- /.spacer-top -->

<section class="flight-dela-area" data-scrollax-parent="true">
    <div class="rt-shape-emenetns-1" style="background-image: url({{asset('public/assets/frontend/images/shape-elements/shape_1.png')}})"
        data-scrollax="properties: { translateY: '340px' }"></div><!-- /.rt-shape-emenetns-1 -->
    <div class="rt-shape-emenetns-2" style="background-image: url({{asset('public/assets/frontend/images/shape-elements/shape-2.png')}})"
        data-scrollax="properties: { translateX: '-140px' }"></div><!-- /.rt-shape-elemenets2 -->
    <div class="container">
        <div class="row">
            <div class="col-xl-10 mx-auto text-center">
                <div class="rt-section-title-wrapper">
                    <h2 class="rt-section-title">
                        <span>Explore Top Destinations</span>
                        Top Round-trip Flight Deals
                    </h2><!-- /.rt-section-title -->
                    <p>
                        Get inspired, find the best deals and start an unforgettable journeya.Looking for the best
                        flight deals
                        for your next
                        trip? Find the top Emigrar deals that are updated daily to book the cheapest
                        flight up to 55% off the average price.
                    </p>
                </div><!-- /.rt-section-title-wrapper -->
            </div><!-- /.col-lg-9 -->
        </div><!-- /.row -->
        <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
        <div class="row">
            <div class="col-xl-8 col-lg-10">
                <div class="row">
                    <div class="col-md-6">
                        <a class="flight-box wow fade-in-bottom" data-wow-duration="1s" data-wow-delay=".02s" href="#" style="background-image: url({{asset('public/assets/frontend/images/flights/flt_1.jpg')}})">
                            <div class="rt-inner-overlay color_1"></div><!-- /.rt-overlay -->
                            <div class="trip-to">
                                <span>
                                    Trip to
                                </span>
                                <span>
                                    Peru
                                </span>
                            </div><!-- /.trip-to -->
                            <div class="trip-form">
                                <span>7 days</span>
                                <span>$4570</span>
                            </div><!-- /.trip-form -->
                        </a><!-- /.flight-box -->
                    </div><!-- /.col-lg-4 -->
                    <div class=" col-md-6">
                        <a class="flight-box wow fade-in-bottom" href="#" data-wow-duration="1.3s" data-wow-delay=".04s" style="background-image: url({{asset('public/assets/frontend/images/flights/flt_2.jpg')}})">
                            <div class="rt-inner-overlay color_2"></div><!-- /.rt-overlay -->
                            <div class="trip-to">
                                <span>
                                    Trip to
                                </span>
                                <span>
                                    Peru
                                </span>
                            </div><!-- /.trip-to -->
                            <div class="trip-form">
                                <span>7 days</span>
                                <span>$4570</span>
                            </div><!-- /.trip-form -->
                        </a><!-- /.flight-box -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-md-6">
                        <a class="flight-box wow fade-in-bottom" data-wow-duration="1.6s" data-wow-delay=".06s" href="#" style="background-image: url({{asset('public/assets/frontend/images/flights/flt_3.jpg')}})">
                            <div class="rt-inner-overlay color_3"></div><!-- /.rt-overlay -->
                            <div class="trip-to">
                                <span>
                                    Trip to
                                </span>
                                <span>
                                    Peru
                                </span>
                            </div><!-- /.trip-to -->
                            <div class="trip-form">
                                <span>7 days</span>
                                <span>$4570</span>
                            </div><!-- /.trip-form -->
                        </a><!-- /.flight-box -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-md-6">
                        <a class="flight-box wow fade-in-bottom" data-wow-duration="1.9s" data-wow-delay=".08s" href="#" style="background-image: url({{asset('public/assets/frontend/images/flights/flt_4.jpg')}})">
                            <div class="rt-inner-overlay color_4"></div><!-- /.rt-overlay -->
                            <div class="trip-to">
                                <span>
                                    Trip to
                                </span>
                                <span>
                                    Peru
                                </span>
                            </div><!-- /.trip-to -->
                            <div class="trip-form">
                                <span>7 days</span>
                                <span>$4570</span>
                            </div><!-- /.trip-form -->
                        </a><!-- /.flight-box -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-md-6">
                        <a class="flight-box wow fade-in-bottom" data-wow-duration="2.2s" data-wow-delay=".010s" href="#" style="background-image: url({{asset('public/assets/frontend/images/flights/flt_5.jpg')}})">
                            <div class="rt-inner-overlay color_5"></div><!-- /.rt-overlay -->
                            <div class="trip-to">
                                <span>
                                    Trip to
                                </span>
                                <span>
                                    Peru
                                </span>
                            </div><!-- /.trip-to -->
                            <div class="trip-form">
                                <span>7 days</span>
                                <span>$4570</span>
                            </div><!-- /.trip-form -->
                        </a><!-- /.flight-box -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-md-6">
                        <a class="flight-box wow fade-in-bottom" data-wow-duration="2.6s" data-wow-delay=".12s" href="#" style="background-image: url({{asset('public/assets/frontend/images/flights/flt_6.jpg')}})">
                            <div class="rt-inner-overlay color_6"></div><!-- /.rt-overlay -->
                            <div class="trip-to">
                                <span>
                                    Trip to
                                </span>
                                <span>
                                    Peru
                                </span>
                            </div><!-- /.trip-to -->
                            <div class="trip-form">
                                <span>7 days</span>
                                <span>$4570</span>
                            </div><!-- /.trip-form -->
                        </a><!-- /.flight-box -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-12 text-center mt-4">
                        <a href="#" class="rt-btn rt-gradient rt-sm text-uppercase rt-rounded rt-Bshadow-2">browse more</a>
                        <!-- /.rt-btn -->
                    </div><!-- /.col-12 -->
                </div><!-- /.row -->
            </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

<!-- 
    ====== call to action======
 -->

<div class="spacer-top"></div><!-- /.spacer-top -->
<section class="rt-cta-area">
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="cta-box-1 d-flex flex-lg-row flex-column align-items-center text-center text-lg-left justify-content-lg-between rtbgprefix-cover text-white justify-content-center" style="background-image: url({{asset('public/assets/frontend/images/backgrounds/cat_1.jpg')}})">
                    <div class="left-column">
                        <h4 class="wow fade-in-top" data-wow-duration="1s" data-wow-delay="0.2s">
                            Not sure where to go next? <span>We're here to inspire you</span>
                        </h4>
                        <p class="wow fade-in-bottom" data-wow-duration="1s" data-wow-delay="0.2s">
                            Send us an email and someone on our team will be in touch with you!
                        </p>
                    </div><!-- /.left-column -->
                    <div class="right-column">
                        <a href="#" class="rt-btn rt-gradient rt-sm text-uppercase rt-rounded rt-Bshadow-2 wow fade-in-left" data-wow-duration="1s" data-wow-delay="0.6s">Plan Your Next Trip</a><!-- /.rt-btn -->
                    </div><!-- /.right-column -->
                </div><!-- /.inner-content -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->

</section>

<!-- 
    =======app area strat=========
 -->

<div class="spacer-top"></div><!-- /.spacer-top -->


<section class="app-area rtbgprefix-cover" style="background-image: url({{asset('public/assets/frontend/images/backgrounds/app_bg.png')}})"
    data-scrollax-parent="true">
    <div class="rt-shape-elements-1 rtbgprefix-contain"
        style="background-image: url({{asset('public/assets/frontend/images/shape-elements/shape-3.png')}})"
        data-scrollax="properties: { translateY: '50px' }"></div><!-- /.rt-shape-elements-1 -->
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 text-center text-lg-left">
                <img src="{{asset('public/assets/frontend/images/all-img/app-mbl.png')}}" alt="mockup image" draggable="false" class="wow fade-in-left" data-wow-duration="1s" data-wow-delay="0.2s">
            </div><!-- /.col-lg-5 -->
            <div class="col-lg-7">
                <div class="rt-section-title-wrapper">
                    <div class="wow fade-in-bottom" data-wow-duration="1s" data-wow-delay="0.6s">
                        <h2 class="rt-section-title">
                            <span>Itineraries that impress.</span>
                            Download App
                        </h2><!-- /.rt-section-title -->
                        <p>
                            All your travel plans, in one place.You handle the booking.Access reservations, maps, and
                            more on your favorite device!View trending destinations. Discover popular trips. Listen to
                            your heart. Experience the world.Find or create your perfect trip. Meet fellow travellers.
                            Experience different cultures. Create unforgettable memories.Keep up-to-date with
                            active trips, view your favourites, visit previous adventures. Managing a trip has never
                            been easier.
                        
                        </p>
                        <br>
                        <p>
                            Download the Emigrar app and join our ever-growing community of passionate
                            travellers. Find lasting friendships, discover new adventures and create unforgettable
                            memories.
                        </p>
                    </div><!-- /.wow -->
                    <div class="rt-button-group mt-5 wow fade-in-bottom" data-wow-duration="1s" data-wow-delay="0.9s">
                        <a href="#" class="rt-btn rt-app-parimary rt-rounded">
                            <div class="app-thumb">
                                <i class="fab fa-google-play"></i>
                            </div><!-- /.app-thumb -->
                            <div class="app-text">
                                <span>GET IT ON</span>
                                <span>Appstore</span>
                            </div><!-- /.app-text -->
                        </a>
                        <a href="#" class="rt-btn rt-app-secondary rt-rounded">
                            <div class="app-thumb">
                                <i class="fab fa-apple"></i>
                            </div><!-- /.app-thumb -->
                            <div class="app-text">
                                <span>GET IT ON</span>
                                <span>Appstore</span>
                            </div><!-- /.app-text -->
                        </a>
                    </div><!-- /.rt-button-group -->
                </div><!-- /.rt-section-title-wrapper -->
            </div><!-- /.col-lg-7 -->
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

<!-- 
    ============= Testimonilas area start==========
 -->
<section class="testimonials-area" data-scrollax-parent="true">
    <div class="rt-shape-emenetns-1" style="background-image: url({{asset('public/assets/frontend/images/shape-elements/shape-4.png')}})"
        data-scrollax="properties: { translateY: '-140px' }"></div><!-- /.rt-shape-emenetns-1 -->
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto text-center">
                <div class="rt-section-title-wrapper">
                    <h2 class="rt-section-title">
                        <span>testimonials</span>
                        What Our Customers Say
                    </h2><!-- /.rt-section-title -->
                    <p>
                        We have many happy customers that have booked holidays with us.Some Impresions from our
                        Customers! Please read some of the lovely things our Customers say about us.
                    </p>
                </div><!-- /.rt-section-title-wrapper -->
            </div><!-- /.col-lg-9 -->
        </div><!-- /.row -->
        <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
        <div class="row">
            <div class="col-lg-12 mx-auto">
                <div class="testimoninal-active-1">
    <div class="singleTbox-1 text-center active position-1" data-position="position-1">
        <div class="testi-thumb">
            <div class="inner-bg" style="background-image: url({{asset('public/assets/frontend/images/testimonials/t_1.png')}})"></div><!-- /.inner-bg -->
            <span class="social-badge"><i class="fab fa-linkedin-in    "></i></span>
        </div>
        <!-- /.testi-thumb -->
        <div class="autor-bio">
            <h5>Oliver Wolfe</h5>
            <p>United Kingdom,15th December, 2018</p>
            <span class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </span>
        </div><!-- /.autor-bio -->
        <div class="inner-content">
            <p>
                Memorable holidays planned an amazing trip for us to Italy. The trip had a mix of all activities that we
                were interested
                in. The hotels were nice and situated very close to the station. This made travelling in the city very
                easy. The tours
                planned were also very good with very nice guides. We would definitely recommend a trip with them.
            </p>
        </div><!-- /.inner-content -->
    </div><!-- /.singleTbox-1 -->
    <div class="singleTbox-1 text-center inactive position-2" data-position="position-2">
        <div class="testi-thumb">
            <div class="inner-bg" style="background-image: url({{asset('public/assets/frontend/images/testimonials/t_2.png')}})"></div><!-- /.inner-bg -->
            <span class="social-badge"><i class="fab fa-linkedin-in    "></i></span>
        </div>
        <!-- /.testi-thumb -->
        <div class="autor-bio">
            <h5>Oliver Wolfe</h5>
            <p>United Kingdom,15th December, 2018</p>
            <span class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </span>
        </div><!-- /.autor-bio -->
        <div class="inner-content">
            <p>
                Memorable holidays planned an amazing trip for us to Italy. The trip had a mix of all activities that we
                were interested
                in. The hotels were nice and situated very close to the station. This made travelling in the city very
                easy. The tours
                planned were also very good with very nice guides. We would definitely recommend a trip with them.
            </p>
        </div><!-- /.inner-content -->
    </div><!-- /.singleTbox-1 -->
    <div class="singleTbox-1 text-center inactive position-3" data-position="position-3">
        <div class="testi-thumb">
            <div class="inner-bg" style="background-image: url({{asset('public/assets/frontend/images/testimonials/t_3.png')}})"></div><!-- /.inner-bg -->
            <span class="social-badge"><i class="fab fa-linkedin-in    "></i></span>
        </div>
        <!-- /.testi-thumb -->
        <div class="autor-bio">
            <h5>Oliver Wolfe</h5>
            <p>United Kingdom,15th December, 2018</p>
            <span class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </span>
        </div><!-- /.autor-bio -->
        <div class="inner-content">
            <p>
                Memorable holidays planned an amazing trip for us to Italy. The trip had a mix of all activities that we
                were interested
                in. The hotels were nice and situated very close to the station. This made travelling in the city very
                easy. The tours
                planned were also very good with very nice guides. We would definitely recommend a trip with them.
            </p>
        </div><!-- /.inner-content -->
    </div><!-- /.singleTbox-1 -->
    <div class="singleTbox-1 text-center inactive position-4" data-position="position-4">
        <div class="testi-thumb">
            <div class="inner-bg" style="background-image: url({{asset('public/assets/frontend/images/testimonials/t_4.png')}})"></div><!-- /.inner-bg -->
            <span class="social-badge"><i class="fab fa-linkedin-in    "></i></span>
        </div>
        <!-- /.testi-thumb -->
        <div class="autor-bio">
            <h5>Oliver Wolfe</h5>
            <p>United Kingdom,15th December, 2018</p>
            <span class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </span>
        </div><!-- /.autor-bio -->
        <div class="inner-content">
            <p>
                Memorable holidays planned an amazing trip for us to Italy. The trip had a mix of all activities that we
                were interested
                in. The hotels were nice and situated very close to the station. This made travelling in the city very
                easy. The tours
                planned were also very good with very nice guides. We would definitely recommend a trip with them.
            </p>
        </div><!-- /.inner-content -->
    </div><!-- /.singleTbox-1 -->
    <div class="singleTbox-1 text-center inactive position-5" data-position="position-5">
        <div class="testi-thumb">
            <div class="inner-bg" style="background-image: url({{asset('public/assets/frontend/images/testimonials/t_5.png')}})"></div><!-- /.inner-bg -->
            <span class="social-badge"><i class="fab fa-linkedin-in    "></i></span>
        </div>
        <!-- /.testi-thumb -->
        <div class="autor-bio">
            <h5>Oliver Wolfe</h5>
            <p>United Kingdom,15th December, 2018</p>
            <span class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </span>
        </div><!-- /.autor-bio -->
        <div class="inner-content">
            <p>
                Memorable holidays planned an amazing trip for us to Italy. The trip had a mix of all activities that we
                were interested
                in. The hotels were nice and situated very close to the station. This made travelling in the city very
                easy. The tours
                planned were also very good with very nice guides. We would definitely recommend a trip with them.
            </p>
        </div><!-- /.inner-content -->
    </div><!-- /.singleTbox-1 -->
    <div class="singleTbox-1 text-center inactive position-6" data-position="position-6">
        <div class="testi-thumb">
            <div class="inner-bg" style="background-image: url({{asset('public/assets/frontend/images/testimonials/t_6.png')}})"></div><!-- /.inner-bg -->
            <span class="social-badge"><i class="fab fa-linkedin-in    "></i></span>
        </div>
        <!-- /.testi-thumb -->
        <div class="autor-bio">
            <h5>Oliver Wolfe</h5>
            <p>United Kingdom,15th December, 2018</p>
            <span class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </span>
        </div><!-- /.autor-bio -->
        <div class="inner-content">
            <p>
                Memorable holidays planned an amazing trip for us to Italy. The trip had a mix of all activities that we
                were interested
                in. The hotels were nice and situated very close to the station. This made travelling in the city very
                easy. The tours
                planned were also very good with very nice guides. We would definitely recommend a trip with them.
            </p>
        </div><!-- /.inner-content -->
    </div><!-- /.singleTbox-1 -->
    <div class="singleTbox-1 text-center inactive position-7" data-position="position-7">
        <div class="testi-thumb">
            <div class="inner-bg" style="background-image: url({{asset('public/assets/frontend/images/testimonials/t_7.png')}})"></div><!-- /.inner-bg -->
            <span class="social-badge"><i class="fab fa-linkedin-in    "></i></span>
        </div>
        <!-- /.testi-thumb -->
        <div class="autor-bio">
            <h5>Oliver Wolfe</h5>
            <p>United Kingdom,15th December, 2018</p>
            <span class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </span>
        </div><!-- /.autor-bio -->
        <div class="inner-content">
            <p>
                Memorable holidays planned an amazing trip for us to Italy. The trip had a mix of all activities that we
                were interested
                in. The hotels were nice and situated very close to the station. This made travelling in the city very
                easy. The tours
                planned were also very good with very nice guides. We would definitely recommend a trip with them.
            </p>
        </div><!-- /.inner-content -->
    </div><!-- /.singleTbox-1 -->
    <div class="singleTbox-1 text-center inactive position-8" data-position="position-8">
        <div class="testi-thumb">
            <div class="inner-bg" style="background-image: url({{asset('public/assets/frontend/images/testimonials/t_8.png')}})"></div><!-- /.inner-bg -->
            <span class="social-badge"><i class="fab fa-linkedin-in    "></i></span>
        </div>
        <!-- /.testi-thumb -->
        <div class="autor-bio">
            <h5>Oliver Wolfe</h5>
            <p>United Kingdom,15th December, 2018</p>
            <span class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </span>
        </div><!-- /.autor-bio -->
        <div class="inner-content">
            <p>
                Memorable holidays planned an amazing trip for us to Italy. The trip had a mix of all activities that we
                were interested
                in. The hotels were nice and situated very close to the station. This made travelling in the city very
                easy. The tours
                planned were also very good with very nice guides. We would definitely recommend a trip with them.
            </p>
        </div><!-- /.inner-content -->
    </div><!-- /.singleTbox-1 -->
    <div class="singleTbox-1 text-center inactive position-9" data-position="position-9">
        <div class="testi-thumb">
            <div class="inner-bg" style="background-image: url({{asset('public/assets/frontend/images/testimonials/t_9.png')}})"></div><!-- /.inner-bg -->
            <span class="social-badge"><i class="fab fa-linkedin-in    "></i></span>
        </div>
        <!-- /.testi-thumb -->
        <div class="autor-bio">
            <h5>Oliver Wolfe</h5>
            <p>United Kingdom,15th December, 2018</p>
            <span class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </span>
        </div><!-- /.autor-bio -->
        <div class="inner-content">
            <p>
                Memorable holidays planned an amazing trip for us to Italy. The trip had a mix of all activities that we
                were interested
                in. The hotels were nice and situated very close to the station. This made travelling in the city very
                easy. The tours
                planned were also very good with very nice guides. We would definitely recommend a trip with them.
            </p>
        </div><!-- /.inner-content -->
    </div><!-- /.singleTbox-1 -->
    <div class="singleTbox-1 text-center inactive position-10" data-position="position-10">
        <div class="testi-thumb">
            <div class="inner-bg" style="background-image: url({{asset('public/assets/frontend/images/testimonials/t_10.png')}})"></div><!-- /.inner-bg -->
            <span class="social-badge"><i class="fab fa-linkedin-in    "></i></span>
        </div>
        <!-- /.testi-thumb -->
        <div class="autor-bio">
            <h5>Oliver Wolfe</h5>
            <p>United Kingdom,15th December, 2018</p>
            <span class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </span>
        </div><!-- /.autor-bio -->
        <div class="inner-content">
            <p>
                Memorable holidays planned an amazing trip for us to Italy. The trip had a mix of all activities that we
                were interested
                in. The hotels were nice and situated very close to the station. This made travelling in the city very
                easy. The tours
                planned were also very good with very nice guides. We would definitely recommend a trip with them.
            </p>
        </div><!-- /.inner-content -->
    </div><!-- /.singleTbox-1 -->
</div><!-- /.testimoninal-active-1 -->
            </div><!-- /.col-lg-7 -->
        </div><!-- /.row -->
        <div class="rt-divider style-one rt-margin-top"></div><!-- /.divider -->
    </div><!-- /.containe -->
</section>


<!-- 
    ============= Brands area start==========
 -->


<div class="spacer-top"></div><!-- /.spacer-top -->
<section class="brands-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 mx-auto text-center">
                <div class="rt-section-title-wrapper">
                    <h2 class="rt-section-title">
                        <span>Take a Look at Our</span>
                        Trusted Partners
                    </h2><!-- /.rt-section-title -->
                    <p>
                        We are committed to being the best partner.Emigrar believes in being your trusted partner and
                        earning that trust through
                        confidence and performance in service and support.
                    </p>
                </div><!-- /.rt-section-title-wrapper -->
            </div><!-- /.col-lg-9 -->
        </div><!-- /.row -->
        <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
        <div class="row">
            <div class="col-lg-9 mx-auto">
                <ul class="rt-border-brands">
    <li class="single-border-brands">
        <a href="#" class="wow flipInX d-block">
            <img src="{{asset('public/assets/frontend/images/brands/brands-1.png')}}" alt="brands image" draggable="false">
        </a>
    </li><!-- /.single-border-brands -->
    <li class="single-border-brands">
        <a href="#" class="wow flipInX d-block" data-wow-duration="1s">
            <img src="{{asset('public/assets/frontend/images/brands/brands-2.png')}}" alt="brands image" draggable="false">
        </a>
    </li><!-- /.single-border-brands -->
    <li class="single-border-brands">
        <a href="#" class="wow flipInX d-block" data-wow-duration="1.5s">
            <img src="{{asset('public/assets/frontend/images/brands/brands-3.png')}}" alt="brands image" draggable="false">
        </a>
    </li><!-- /.single-border-brands -->
    <li class="single-border-brands">
        <a href="#" class="wow flipInX d-block" data-wow-duration="2s"> 
            <img src="{{asset('public/assets/frontend/images/brands/brands-4.png')}}" alt="brands image" draggable="false">
        </a>
    </li><!-- /.single-border-brands -->
    <li class="single-border-brands">
        <a href="#" class="wow flipInX d-block" data-wow-duration="2.5s">
            <img src="{{asset('public/assets/frontend/images/brands/brands-4.png')}}" alt="brands image" draggable="false">
        </a>
    </li><!-- /.single-border-brands -->
    <li class="single-border-brands">
        <a href="#" class="wow flipInX d-block" data-wow-duration="3s">
            <img src="{{asset('public/assets/frontend/images/brands/brands-3.png')}}" alt="brands image" draggable="false">
        </a>
    </li><!-- /.single-border-brands -->
    <li class="single-border-brands">
        <a href="#" class="wow flipInX d-block" data-wow-duration="3.5s">
            <img src="{{asset('public/assets/frontend/images/brands/brands-2.png')}}" alt="brands image" draggable="false">
        </a>
    </li><!-- /.single-border-brands -->
    <li class="single-border-brands">
        <a href="#" class="wow flipInX d-block" data-wow-duration="4s">
            <img src="{{asset('public/assets/frontend/images/brands/brands-1.png')}}" alt="brands image" draggable="false">
        </a>
    </li><!-- /.single-border-brands -->
</ul><!-- /.rt-border-brands -->
            </div><!-- /.col-lg-7 -->
        </div><!-- /.row -->
    </div><!-- /.containe -->
</section>




<!-- ==================End Js Link===================== -->

</body>


<!-- Mirrored from pixner.net/emigrar/emigrar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Jan 2021 02:49:17 GMT -->
</html>











@stop

