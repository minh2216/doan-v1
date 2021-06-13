@extends('frontend.layouts.master')
@section('content')
<!DOCTYPE html>
<html lang="en">

<body>

<!-- /.preloder-box -->
<div class="rt-preloder">
    <div class="preloder-box">
        <img src="{{asset('public/assets/frontend/images/all-img/preloder.svg')}}" alt="preloder image" draggable="false">
    </div>
</div>


<div class="rt-breadcump rt-breadcump-height">
    <div class="rt-page-bg rtbgprefix-cover" style="background-image: url({{asset('public/assets/frontend/images/backgrounds/bredcump.png')}})">
    </div><!-- /.rt-page-bg -->
    <div class="container">
        <div class="row rt-breadcump-height">
            <div class="col-12">
                <div class="breadcrumbs-content">
                    <h3>Hotel</h3>
                    <div class="breadcrumbs">
                        <span class="divider"><i class="icofont-home"></i></span>
                        <a href="#" title="Home">Home</a>
                        <span class="divider"><i class="icofont-simple-right"></i></span>
                        <a href="#">China</a>
                        <span class="divider"><i class="icofont-simple-right"></i></span>
                        <a href="#">Hotels</a>
                        <span class="divider"><i class="icofont-simple-right"></i></span>
                        <a href="#" title="Home">Hong Kong Hotels</a>
                        <span class="divider"><i class="icofont-simple-right"></i></span>
                        Empire Hotel Kowloon - Tsim Sha Tsui

                    </div><!-- /.breadcrumbs -->
                </div><!-- /.breadcrumbs-content -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.rt-bredcump -->




<section class="content-area">
    <form id="my_order" action="{!!route('post.order-detail')!!}" method="post" enctype="multipart/form-data" class="rt-form rt-line-form flight-lable">
        @csrf
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4 class="rt-strong text-uppercase rt-mb-20"> Thông tin đặt phòng </h4>
            </div><!-- /.col-12 -->
            <div class="col-xl-9">
                <div class="flt-dtls-box rt-mb-30">
                    <div class="upper-top-content d-md-flex flex-md-row justify-content-md-between align-items-center">
                        <div class="left">
                            @foreach ($province as $item)
                                @foreach ($district as $di)
                                <p>
                                  <span>  {{$item->title}}</span>
                                 <span>| {{$di->title}}</span>
                                 <span>| {{$record->meta_title}}</span></p>
                                @endforeach
                                @endforeach
                        </div><!-- /.left -->
                    </div><!-- /.upper-top-content -->
                    <div class="flight-list-box">
                        <div class="hotel-inner-content row">
                            <div class="hotel-thumb col-md-3">
                                <div class="hotel-bg rtbgprefix-cover" style="background-image: url({{asset('public/assets/frontend/images/all-img/hotel-2.jpg')}})">
                                    <div class="inner-icon">
                                        <i class="icofont-gift"></i>
                                    </div><!-- /.inner-icon -->
                                </div>
                            </div><!-- /.hotel-thumb -->
                            <div class="hotel-text col-md-9">
                               <div class="top-2 d-flex flex-column flex-md-row justify-content-md-between rt-mb-20">
                                    <div>
                                        <span class="d-block f-size-12">Check-in:</span>
                                        <span class="d-block rt-strong heading-color-1">{{($checkin_date)}}</span>
                                        <span class="d-block f-size-12">From 14:00</span>
                                    </div>
                                    <div>
                                        <span class="d-block f-size-12">Check-out:</span>
                                        <span class="d-block rt-strong heading-color-1">{{$checkout_date}}</span>
                                        <span class="d-block f-size-12">Before 12:00</span>
                                    </div>
                                    <div class="text-right"> 
                                        <span class="d-block rt-medium heading-color-1">{{$time}} Nights</span>
                                        <span class="d-block"><a href="#">Change Dates</a></span>   
                                    </div>
                               </div><!-- /.top-2 -->
                              
                               <div class="rt-divider style-three"></div><!-- /.rt-divider -->
                              
                               <div class="footer3-elements rt-mt-20">
                                   <span class="d-block heading-color-1 rt-strong">Tiện ich</span>
                                   @foreach($room_fac as $fac)
                                       <div class="clearfix f-size-12 text-555"><span class="float-left ">{{$fac}}</span> <span class="float-right"></span></div>
                                   @endforeach
                               </div><!-- /.footer3-elements -->
                            </div><!-- /.hotel-text -->
                        </div><!-- /.hotel-inner-content -->
                    </div><!-- /.flight-list-box -->
                </div><!-- /.flt-dtls-box -->

                <div class="flight-list-box rt-mb-30 pt-30">
                    <h6 class="text-333 rt-semiblod">Contact Details</h6> <br>
                        <div class="row">
                            <div class="col-md-6 rt-mb-30">
                                <label for="contact-name">Contact name</label>
                                <input type="text" placeholder="Contact name" name="contact" required="">
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6 rt-mb-30">
                                <label for="mbl-name">Mobile phone</label>
                                <input type="text" placeholder="Enter Your Number" name="mobile">
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <label for="eml-name">Email</label>
                                <input type="text" placeholder="Enter Your Email" name="email">
                            </div><!-- /.col-md-6 -->
                            <input type="hidden" value="{{$cost}}" name="total" >
                            <input type="hidden" value ="{!!$product_id!!}"name="product_id">
                            <input type="hidden" value ="{!!$room_id!!}"name="room_id">
                            <input type="hidden" value ="{!!$cost!!}"name="price">
                            <input type="hidden" value ="{!!$checkin_date!!}"name="checkin_date">
                            <input type="hidden" value ="{!!$checkout_date!!}"name="checkout_date">
                        </div><!-- /.row -->
                </div><!-- /.flight-list-box -->
<!--                 <div class="flight-list-box pt-30">
                    <h4 class="f-size-24 rt-strong rt-mb-20">Promo Code</h4>
                    <form action="#" class="rt-form rt-line-form flight-lable">
                        <div class="row align-items-end">
                            <div class="col-md-6">
                                <label>Add promo code</label>
                                <input type="text" placeholder="Please enter promo code">
                            </div>
                            <div class="col-md-6">
                                <a href="#" class="rt-btn rt-gradient3 pill text-uppercase rt-sm2">Verify</a>
                            </div>
                        </div>
                    </form>
                </div> -->
            </div><!-- /.col-lg-9 -->
            <div class="col-lg-3 mx-auto">
                <div class="rt-sidebar-group">
                    <div class="rt-widget final-booking">

                        <ul>
                            <li class="clearfix">
                                @if($mua!='')<span>Bạn đã đặt phòng vào {{$mua}} </span><br>@endif
                                <span>Giá phòng tại thời điểm này là: </span>
                                <br>
                                <span>1 Phòng x {{$time}} Đêm</span>
                                <br>
                                <span class="float-right">{{$total_price}} VNĐ</span>
                            </li>
                            <li class="clearfix">

                                <span>Thuế GTGT (VAT 10%)</span>
                                <br>
                                <span class="float-right">{{$tax}} VNĐ</span>
                            </li>
                            <li class="clearfix sub-total">

                                <span>Tổng</span>
                                <span class="float-right">{{$cost}} <small>VNĐ</small></span>
                            </li>

                        </ul>
                        <div class="text-center rt-mb-30">
                            <a  href="javascript:{}" onclick="document.getElementById('my_order').submit();" class="rt-btn rt-gradient pill rt-sm2" type="submit">Continue Booking</a>
                        </div><!-- /.text-center -->
                    </div><!-- /.rt-widget -->
<!-- 
                    <div class="plain-box pl-md-3">
                        <p class="rt-strong">Payment Method</p>
                        <div class="rt-footer-social">
                            <ul>
                                <li><a href="#"><img src="{{asset('public/assets/frontend/images/brands/card-1.png')}}" alt="cardimage"
                                            draggable="false"></a></li>
                                <li><a href="#"><img src="{{asset('public/assets/frontend/images/brands/card-2.png')}}" alt="cardimage"
                                            draggable="false"></a></li>
                                <li><a href="#"><img src="{{asset('public/assets/frontend/images/brands/card-3.png')}}" alt="cardimage"
                                            draggable="false"></a></li>
                                <li><a href="#"><img src="{{asset('public/assets/frontend/images/brands/card-4.png')}}" alt="cardimage"
                                            draggable="false"></a></li>
                                <li><a href="#"><img src="{{asset('public/assets/frontend/images/brands/card-5.png')}}" alt="cardimage"
                                            draggable="false"></a></li>

                            </ul>
                        </div>
                    </div> -->
                </div><!-- /.rt-sidebar-group -->
            </div><!-- /.col-lg-3 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</form>
</section>

</body>

</html>

@stop