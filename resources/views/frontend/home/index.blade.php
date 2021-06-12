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
                    <form id="filter" action="{!!route('product.filter')!!}" method="post" enctype="multipart/form-data" class="rt-form rt-line-form flight-lable">
                        @csrf
                        <div class="rt-input-group">
                            <div class="single-input  col-rt-in-3">
                                <input type="text" class="form-control" placeholder="Tên khách sạn" name="title">
                            </div><!-- /.single-input -->

                            <div class="single-input  col-rt-in-3">
                                <input type="text" class="form-control" placeholder="Giá thấp nhất" name="min_price">
                            </div><!-- /.single-input -->
                            <div class="single-input  col-rt-in-3">
                                <input type="text" class="form-control" placeholder="Giá cao nhất" name="max_price">
                            </div><!-- /.single-input -->
                            <div class="single-input  col-rt-in-3">
                                <select class="rt-selectactive banner-select" name="location" style="width: 100%">
                                    <option value="">Chọn vị trí</option>
                                      @foreach($city as $city)
                                        <option value="{{$city->id}}">{{$city->title}}</option>
                                      @endforeach
                                </select>
                            </div><!-- /.single-input -->
                            <div class="single-input  col-rt-in-1">
                                <button type="submit"><i class="icofont-search"></i></button>
                            </div><!-- /.single-input -->
                        </div><!-- /.rt-input-group -->
                    </form><!-- ./ form -->
                </div>
            </div>
        </div><!-- /.rt-banner-searchbox -->
        @if (session('status'))
        <div id="alert" class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
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
                            <span>Top Homestay đang được lựa chọn nhiều nhất</span>
                            {!!$product->title!!}
                        </h2><!-- /.rt-section-title -->
                        <div class="deal-bottom-content">
                            <div class="rating-box">
                                <span class="d-block">EXCELLENT</span>
                                <span class="d-block"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>  of 205 Reviews</span>
                                <span class="d-block">Reviewed by Kim - Denmark</span>
                            </div><!-- /.rating-box -->
                            <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
                            <h4>{!!$product->title!!}</h4>
                            <p>
                                {!!$product->description!!}
                            </p>
                            <div class="rt-button-group">
                                <a href="{!! route('product.detail',['alias' => $product->alias])!!}" class="rt-btn rt-gradient rt-rounded rt-Bshadow-2">Xem thêm</a>
                                <a href="#" class="rt-btn rt-outline-gradientL rt-rounded">Lưu vào danh sách yêu thích</a>
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
                    <p>Chúng tôi đã lập một danh sách các hoạt động được đề xuất dựa trên sở thích của bạn. Hãy lướt qua các Khách sạn nổi tiếng nhất của chúng tôi! Các Chuyến tham quan Nổi bật của chúng tôi có thể giúp bạn tìm được lựa chọn hoàn hảo cho mình !</p>
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

<script type="text/javascript">
    $(document).ready(function(){
    //$("#datepicker").datepicker({
    //minDate: 30
    //});
    window.setTimeout(function() {
    $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
        $(this).remove(); 
    });
}, 3000);
});
</script>
<!-- Mirrored from pixner.net/emigrar/emigrar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Jan 2021 02:49:17 GMT -->
</html>


<script type="text/javascript">
    $(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>


<script>

 function CheckSession() {
            var session = '<%=Session["status"] != null%>';
            if (session == false) {
                alert("Đặt phòng thành công");
            }
        }

setInterval(CheckSession(),500);

</script>







@stop

