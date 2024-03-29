@extends('frontend.layouts.master')
@section('content')



<!DOCTYPE html>
<html lang="en">
<body>
@if(Session::has('error'))
<div class="alert alert-danger">
  {{ Session::get('error')}}
</div>
@endif
@if (session('error'))
    <div class="alert alert-success">
        {{ session('error') }}
    </div>
@endif
@foreach($records as $key =>$product)

    <!-- /preloder -->
  <div class="rt-preloder">
    <div class="preloder-box">
        <img src="{{asset('public/assets/frontend/images/all-img/preloder.svg')}}" alt="preloder image" draggable="false">
    </div>
</div>

<style type="text/css">
    iframe {
        width: 100%;
    }
</style>

<!-- Modal -->
<div class="modal fade" id="rtmodal-1" tabindex="-1" role="dialog" aria-labelledby="rtmodal-1"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered rt-lgoinmodal " role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="rt-modal-headr rt-mb-20 one">
                    <img src="{{asset('public/assets/frontend/images/logo/Logo-icon.png')}}"  alt="modal logo" draggable="false">
                    <h4>Login in to Emigrar</h4>
                    <p>Log in to get in the moment updates on the things
                        that interest you.</p>
                </div><!-- /.rt-modal-headr -->
                <div class="rt-modal-headr rt-mb-20 two">
                    <img src="{{asset('public/assets/frontend/images/logo/Logo-icon.png')}}"  alt="modal logo" draggable="false">
                    <h4>Create your Account</h4>
                    <p>Log in to get in the moment updates on the things
                        that interest you.</p>
                </div><!-- /.rt-modal-headr -->
                <div class="rt-modal-input one">
                    <form action="#" class="rt-form">
                        <input type="text" class="form-control pill rt-mb-15" placeholder="User name">
                        <input type="password" class="form-control pill rt-mb-15" placeholder="Password">
                        <div class="form-group forgot-pass">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheckss">
                                <label class="form-check-label" for="gridCheckss">
                                     Remember Password
                                </label>
                            </div><!-- ./orm-group -->
                        </div>
                            <input type="submit" class="rt-btn rt-gradient pill d-block text-uppercase " value="Log In">
                    </form>
                    <div class="ac-register">
                        <span>Don’t have an account? <a href="#" class="open-creatac">Sign Up Now <i class="icofont-double-right"></i></a></span>
                    </div><!-- /.ac-register -->
                </div><!-- /.rt-modal-input -->
                <div class="rt-modal-input two">
                    <form action="#" class="rt-form">
                        <input type="text" class="form-control pill rt-mb-15" placeholder="User name">
                        <input type="password" class="form-control pill rt-mb-15" placeholder="Enter your mail address">
                        <input type="password" class="form-control pill rt-mb-15" placeholder="Password">
                        <div class="form-group forgot-pass">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck333">
                                <label class="form-check-label" for="gridCheck333">
                                    I'd like to hear about promos, new products,and much more!
                                </label>
                            </div><!-- ./orm-group -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck222">
                                <label class="form-check-label" for="gridCheck222">
                                    By clicking "Sign up" you agree to our Terms of Service and Privacy Policy
                                </label>
                            </div><!-- ./orm-group -->
                        </div>
                            <input type="submit" class="rt-btn rt-gradient pill d-block text-uppercase " value="Log In">
                    </form>
                    <div class="ac-register">
                        <span>Already have an account?<a href="#">LOGIN <i class="icofont-double-right"></i></a></span>

                    </div><!-- /.ac-register -->
                </div><!-- /.rt-modal-input -->
                <div class="rt-modal-footer">
                    <span>Or</span>
                    <h4>Sign Up with social media</h4>
                    <ul class="rt-social rt-circle-style2">
                
                        <li><a href="#"><i class="icofont-facebook"></i></a></li>
                        <li><a href="#"><i class="icofont-twitter"></i></a></li>
                        <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                    </ul>
                </div><!-- /.rt-modal-footer -->
            </div>
        </div>
    </div>
</div>










<div class="rt-breadcump rt-breadcump-height">
    <div class="rt-page-bg rtbgprefix-cover" style="background-image: url({{asset('public/assets/frontend/images/backgrounds/bredcump.png')}})">
    </div><!-- /.rt-page-bg -->
    <div class="container">
        <div class="row rt-breadcump-height">
            <div class="col-12">
                <div class="breadcrumbs-content">
                    <h3>{!!$product->title!!}</h3>
                    <div class="breadcrumbs">
                        <span class="divider"><i class="icofont-home"></i></span>
                        <a href="#" title="Home">Home</a>
                        <span class="divider"><i class="icofont-simple-right"></i></span>
                        {!!$product->title!!}

                    </div><!-- /.breadcrumbs -->
                </div><!-- /.breadcrumbs-content -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.rt-bredcump -->




@if (session('error'))
<div id="alert" class="alert alert-danger">
    {{ session('error') }}
</div>
@endif
<section class="content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="rt-duel-slider-main rt-mb-30">
                    @foreach($product->getImage() as $key =>$image)
                    <div class="single-main rtbgprefix-cover" style="background-image: url('{!!$image!!}')">
                        <div class="inner-badge badge-bg-1 f-size-14 rt-strong">
                        </div><!-- /.inner-badge -->
                    </div><!-- /.single-main -->
                    @endforeach
                </div><!-- /.rt-duel-slider-main -->
                <div class="rt-duel-slider-thumb">
                    @foreach($product->getImage() as $key =>$image)
                    <div class="single--thumb rtbgprefix-cover" style="background-image: url('{!!$image!!}')"></div><!-- /.single-thumb -->
                    @endforeach
                </div><!-- /.rt-duel-slider-thumb -->
            </div><!-- /.col-lg-7 -->
            <div class="col-lg-5 mt-5 mt-lg-0">
                <div class="hotel-inner-content">
                    <h5 class="f-size-18 rt-medium">{!!$product->title!!}</h5>
                    <p class="f-size-13"><span class="text-555">{!!$product->meta_title!!}</span></p>
                     <p class="rt-mt-15 rt-mb-20">
                                <span class="badge rt-gradinet-badge pill rt-mr-10">4.3 <small>/5</small></span>
                                <span class="primary-color rt-mr-10">Excellent</span>
                                <span class="f-size-12 text-878">{{$num_review}} Reviews</span>
                    </p>
                    <p class="f-size-14 text-333">"It is a good hotel with nice service, everything is so convenient. will choose it again next time i go there. "</p>
                    <p>
                        @foreach ($product_attribute as $p)
                        <span class="d-block "><span class="f-size-15 rt-pl-20">{!!$p!!}</span></span>
                        @endforeach                 
                    </p>
                    <div class="rt-divider style-one rt-mb-30"></div><!-- /.rt-divider -->
                    <div class="d-flex flex-md-row flex-column justify-content-md-between">
                    </div><!-- /.d-flex -->
                    <div class="rt-divider style-one rt-mt-30"></div><!-- /.rt-divider -->
                    <div class="rt-mt-25">
                        <ul class="rt-social normal-style-one ">
                            <li><span class="f-size-14"><strong>Share Link:</strong></span></li>
                            <li><a href="#"><i class="icofont-facebook"></i></a></li>
                            <li><a href="#"><i class="icofont-twitter"></i></a></li>
                            <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                            <li><a href="#"><i class="icofont-google-plus"></i></a></li>
                        </ul>
                    </div><!-- /. social -->
                </div><!-- /.hotel-text -->
            </div><!-- /.col-lg-5 -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-12 rt-mt-58">
                <div class="hotel-tabs">
                    <div class="flight-list-box rt-mb-40">
                        <ul class="nav rt-tab-nav-1 pill justify-content-lg-between pl-md-4 pr-md-4 justify-content-center" id="myTab-2" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="rt-itm_1-tab" data-toggle="tab" href="#rt-itm_1" role="tab"
                                    aria-controls="rt-itm_1" aria-selected="true">Tổng quan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="rt-itm_2-tab" data-toggle="tab" href="#rt-itm_2" role="tab"
                                    aria-controls="rt-itm_2" aria-selected="false">Phòng</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="rt-itm_3-tab" data-toggle="tab" href="#rt-itm_3" role="tab"
                                    aria-controls="rt-itm_3" aria-selected="false">Thông tin chi tiết</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="rt-itm_4-tab" data-toggle="tab" href="#rt-itm_4" role="tab"
                                    aria-controls="rt-itm_4" aria-selected="false">Dịch vụ và tiện nghi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="rt-itm_5-tab" data-toggle="tab" href="#rt-itm_5" role="tab"
                                    aria-controls="rt-itm_5" aria-selected="false">Chính sách</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="rt-itm_6-tab" data-toggle="tab" href="#rt-itm_6" role="tab"
                                    aria-controls="rt-itm_6" aria-selected="false">Nhận xét</a>
                            </li>
                        </ul>
                    </div><!-- /.hotle-del-box -->
                    
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="rt-itm_1" role="tabpanel" aria-labelledby="rt-itm_1-tab">
                                <div class="flight-list-box rt-mb-30">
                                    <div class="inner-content rt-pl-15">
                                        <h4 class="badge-hilighit color--1 f-size-14 text-white text-font text-uppercase rt-mb-30 rt-mt-15">Mô tả ngắn</h4>

                                        <p>
                                            {!!$product->description!!}
                                        </p>

                                    </div><!-- /.inner-content -->
                                </div><!-- /.flight-list-box -->
                                
                                <div class="googleMap">
                                    {!!$product->googlemap!!}
                                </div>
                            </div>
                            <div class="tab-pane fade" id="rt-itm_2" role="tabpanel" aria-labelledby="rt-itm_2-tab">
                                @foreach($room as $key => $room)
                                <div class="box-style__1 rt-light-gray rt-mb-30">
                                    <div class="row">
                                        <div class="col-md-5 col-lg-2 mx-auto">
                                            <span class="f-size-16 text-656 title-font rt-medium text-uppercase rt-mb-20 d-block rt-mt-10">Room Type</span>
                                            <div class="box-style__1 rt-light-bg">
                                                <div class="hote-roombgtab rtbgprefix-cover rt-mb-30" style="background-image: url({!!$room->getImage()!!})"></div><!-- /.hote-room -->
                                                <h5 class="text-uppercase f-size-14 rt-medium rt-mb-15">{!!$room->title!!}</h5>
                                            </div><!-- /.flight-list-box -->
                                        </div><!-- /.col-md-3 -->
                                        <div class="col-md-12 col-lg-10"> 
                                                     <div class="d-flex flex-md-row flex-column justify-content-md-between rt-mb-20 rt-mt-10">
                                                        <span class="f-size-16 text-656 title-font rt-medium text-uppercase">Diện tích</span>
                                                        <span class="f-size-16 text-656 title-font rt-medium text-uppercase">Loại</span>
                                                        <span class="f-size-16 text-656 title-font rt-medium text-uppercase">Tiện nghi</span>
                                                        <span class="f-size-16 text-656 title-font rt-medium text-uppercase">Chính sách</span>
                                                        <span class="f-size-16 text-656 title-font rt-medium text-uppercase">Giá phòng cho 1 đêm</span>
                                                     </div>
                                                  
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-6">
                                                            <ul class="rt-list d-flex flex-lg-row flex-column justify-content-md-between box-style__1 rt-light-bg rt-mb-10">
                                                                <li class="rt-pt-8">
                                                                    <span class="rt-mr-5 d-block"><img src="{{asset('public/assets/frontend/images/all-img/hottel-cion-10.png')}}"  alt=""></span>
                                                                    <span class="f-size-13 text-333">17 m²</span>
                                                                    <span class="rt-mr-5 d-block"><img src="{{asset('public/assets/frontend/images/all-img/hottel-cion-11.png')}}"  alt=""></span>
                                                                    <span class="f-size-13 text-333">Floor 8-15</span>
                                                                </li>
                                                                <li class="rt-pt-8">
                                                                    <span class="text-333"><i class="icofont-bed"></i> <i class="icofont-bed"></i></span>
                                                                    <span class="d-block">1 double bed or</span>
                                                                    <span class="d-block">2 single beds</span>
                                                                </li>
                                                                <li class="rt-pt-8">
                                                                    <span class="d-block"><img src="{{asset('public/assets/frontend/images/all-img/hottel-cion-1.png')}}"  alt="hotel iamge" draggable="false">
                                                                        <span class="f-size-13 rt-pl-20">Free in-room Wi-Fi</span></span>
                                                                    <span class="d-block"><img src="{{asset('public/assets/frontend/images/all-img/hottel-cion-2.png')}}"  alt="hotel iamge" draggable="false">
                                                                        <span class="f-size-13 rt-pl-15">Gym</span></span>
                                                                    <span class="d-block"><img src="{{asset('public/assets/frontend/images/all-img/hottel-cion-3.png')}}"  alt="hotel iamge" draggable="false">
                                                                        <span class="f-size-13 rt-pl-25">Western restaurant</span></span>
                                                                    <span class="d-block"><img src="{{asset('public/assets/frontend/images/all-img/hottel-cion-4.png')}}"  alt="hotel iamge" draggable="false">
                                                                        <span class="f-size-13 rt-pl-25">Front desk (24 hours)</span></span>
                                                                    <span class="d-block"><img src="{{asset('public/assets/frontend/images/all-img/hottel-cion-5.png')}}"  alt="hotel iamge" draggable="false">
                                                                        <span class="f-size-13 rt-pl-25">soft drinks</span></span>
                                                                </li>
                                                                <li class="rt-pt-8">
                                                            
                                                                    <p class="f-size-13 text-333 line-height-20"><span class="rt-pr-4"><i class="far fa-check-circle"></i></span>
                                                                        Free cancellation before Nov 10, <br>
                                                                        2018, 12:00 (hotel's local time)</p>
                                                                    <p class="f-size-13 text-333 line-height-20"><span class="rt-pr-4"><i class="far fa-check-circle"></i></span>
                                                                        Instant Confirmation</p>
                                                                    <p class="f-size-13 text-333 line-height-20"><span class="rt-pr-4"><i class="far fa-check-circle"></i></span>
                                                                        Summer promotion</p>
                                                            
                                                                </li>

                                                                <li class="rt-pt-8">
                                                                    @if(session()->has('username')) 
                                                                    <a href="#" class="rt-btn rt-gradient rt-sm2 pill text-uppercase" data-toggle="modal" data-target="#booking" >Book</a>
                                                                    @else
                                                                    <a href="#" class="rt-btn rt-gradient rt-sm2 pill text-uppercase" data-toggle="modal" data-target="#rtmodal-1" >Book</a>
                                                                    @endif
                                                                    <p class="f-size-13 text-2f7"><span class="rt-pr-5"><i class="icofont-check"></i></span>Price Guarantee</p>
                                                                    <span class="d-block f-size-12 text-878">From VNĐ</span>
                                                                    
                                                                    @if(date('m')>=1 && date('m')<=3)
                                                                    <span class="d-block f-size-24 primary-color rt-strong">{!!$room->price1!!}</span>
                                                                    @endif
                                                                    @if(date('m')>=4 && date('m')<=6)
                                                                    <span class="d-block f-size-24 primary-color rt-strong">{!!$room->price2!!}</span>
                                                                    @endif
                                                                    @if(date('m')>=7 && date('m')<=9)
                                                                    <span class="d-block f-size-24 primary-color rt-strong">{!!$room->price3!!}</span>
                                                                    @endif
                                                                    @if(date('m')>=10 && date('m')<=12)
                                                                    <span class="d-block f-size-24 primary-color rt-strong">{!!$room->price4!!}</span>
                                                                    @endif
                                                                    
                                                                    @if(date('m')>=1 && date('m')<=3)
                                                                    <span class="d-block f-size-12 text-444">Sau thuế {!!$room->price1 * 0.9!!}</span>
                                                                    @endif
                                                                    @if(date('m')>=4 && date('m')<=6)
                                                                    <span class="d-block f-size-12 text-444">Sau thuế {!!$room->price2 * 0.9!!}</span>
                                                                    @endif
                                                                    @if(date('m')>=7 && date('m')<=9)
                                                                    <span class="d-block f-size-12 text-444">Sau thuế {!!$room->price3 * 0.9!!}</span>
                                                                    @endif
                                                                    @if(date('m')>=10 && date('m')<=12)
                                                                    <span class="d-block f-size-12 text-444">Sau thuế {!!$room->price4 * 0.9!!}</span>
                                                                    @endif

                                                                </li>
                                                            </ul>
                                                        </div><!-- /.col-lg-12 -->
                                                    </div><!-- /.row -->
                                        </div><!-- /.col-md-9 -->
                                    </div><!-- /.row -->
                                </div><!-- /.flight-list-box -->
                                <!-- Modal -->
                                <div class="modal fade" id="booking" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header" style="display: flex;align-items: center;">
                                        <h5 class="modal-title" id="exampleModalLabel" >Chọn thời gian</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true" style="font-size: 50px;">&times;</span>
                                        </button>
                                      </div>
                                      <form action="{!!route('post.order')!!}" method="post" enctype="multipart/form-data">
                                        @csrf
                                      <div class="modal-body">
                                            <div class="rt-input-group">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="single-input  col-rt-in-4 col-6" style="padding: 0px;">
                                                           <input autocomplete="off" type="text" id ="datepicker" class="form-control rt-date-picker has-icon" placeholder="Ngày nhận phòng" name="checkin_time">
                                                           <span class="input-iconbadge"><i class="icofont-ui-calendar"></i></span>
                                                        </div><!-- /.single-input -->
                                                        <div class="single-input  col-rt-in-4 col-6" style="padding: 0px;">
                                                            <input autocomplete="off" type="text" id="datepicker1" class="form-control rt-date-picker has-icon" placeholder="Ngày trả phòng" name="checkout_time">
                                                            <span class="input-iconbadge"><i class="icofont-ui-calendar"></i></span>
                                                        </div><!-- /.single-input -->
                                                        <input type="hidden" value ="{!!$product->id!!}"name="product_id">
                                                        <input type="hidden" value ="{!!$room->id!!}"name="room_id">
                                                        <input type="hidden" value ="{!!$room->getValuePrice()!!}"name="price">
                                                        <input type="hidden" value ="{!!$room->price1!!}"name="price1">
                                                        <input type="hidden" value ="{!!$room->price2!!}"name="price2">
                                                        <input type="hidden" value ="{!!$room->price3!!}"name="price3">
                                                        <input type="hidden" value ="{!!$room->price4!!}"name="price4">
                                                    </div>
                                                </div>
                                            </div><!-- /.rt-input-group -->

                                      </div>
                                      <div class="modal-footer">
                                        <button class="rt-btn rt-sm2 pill text-uppercase" data-dismiss="modal" style="text-align: center;width: 50%;background: linear-gradient(to right, #000000, #434343);color: white;">Trở lại</button>
                                        <button type="submit" class="rt-btn rt-gradient rt-sm2 pill text-uppercase" style="text-align: center;width: 50%;color:white;">Thanh toán</button>
                                      </div>
                                      </form><!-- ./ form -->
                                    </div>
                                  </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="tab-pane fade" id="rt-itm_3" role="tabpanel" aria-labelledby="rt-itm_3-tab">

                                <div class="flight-list-box rt-mb-30">
                                    <h3 class="f-size-18 rt-semiblod rt-mt-15 rt-mb-30">Hotel Description</h3>
                                   
                                    <p>
                                        {!!$product->content!!}
                                    </p>                                
                                    
                                </div>
                                
                            </div>
                            <div class="tab-pane fade" id="rt-itm_4" role="tabpanel" aria-labelledby="rt-itm_4-tab">
                                
                              <div class="flight-list-box">
                                    <div class="inner-content rt-pt-10 rt-pl-15">
                                        <h4 class="f-size-18 rt-semiblod rt-mb-35 ">Services & Amenities</h4>
                                    </div><!-- /.inner-content -->
                                    <div class="media service-amitence-box rt-mb-30">
                                        <img src="{{asset('public/assets/frontend/images/all-img/hottel-cion-12.png')}}"  class="rt-pr-23" alt="hottel-cion">
                                        <div class="media-body rt-pl-23">
                                            <h5 class="f-size-16 rt-semiblod">Transportation Services</h5>
                                            <p class="f-size-13 text-333">
                                                <span class="rt-mr-40"><i class="icofont-check-circled primary-color rt-pr-4"></i> Airport pickup service</span>
                                                <span class="rt-mr-40"> <i class="icofont-check-circled primary-color"></i> Parking</span>
                                                <span> <i class="icofont-check-circled primary-color"></i> Car rental</span>
                                            </p>
                                        </div>
                                    </div><!-- /.service-amitence-box -->
                                    <div class="media service-amitence-box rt-mb-30">
                                        <img src="{{asset('public/assets/frontend/images/all-img/hottel-cion-13.png')}}"  class="rt-pr-23" alt="hottel-cion">
                                        <div class="media-body rt-pl-23">
                                            <h5 class="f-size-16 rt-semiblod">General</h5>
                                            <p class="f-size-13 text-333">
                                                <span class="rt-mr-40"><i class="icofont-check-circled primary-color rt-pr-4"></i> Free Wi-Fi areas</span>
                                                <span class="rt-mr-40"> <i class="icofont-check-circled primary-color"></i> Heating</span>
                                                <span class="rt-mr-40"> <i class="icofont-check-circled primary-color"></i> Elevator</span>
                                                <span class="rt-mr-40"> <i class="icofont-check-circled primary-color"></i> Newspaper in lobby</span>
                                                <span class="rt-mr-40"> <i class="icofont-check-circled primary-color"></i> CCTV in public areas</span> <br>
                                                <span class="rt-mr-40"> <i class="icofont-check-circled primary-color"></i> CCTV in public areas</span>
                                                <span> <i class="icofont-check-circled primary-color"></i>PA system</span>
                                            </p>
                                        </div>
                                    </div><!-- /.service-amitence-box -->
                                    <div class="media service-amitence-box rt-mb-30">
                                        <img src="{{asset('public/assets/frontend/images/all-img/hottel-cion-15.png')}}"  class="rt-pr-23" alt="hottel-cion">
                                        <div class="media-body rt-pl-23">
                                            <h5 class="f-size-16 rt-semiblod">Food & Drink</h5>
                                            <p class="f-size-13 text-333">
                                                <span class="rt-mr-40"><i class="icofont-check-circled primary-color rt-pr-4"></i> Western restaurant</span>
                                                <span class="rt-mr-40"> <i class="icofont-check-circled primary-color"></i> Chinese</span>
                                                <span> <i class="icofont-check-circled primary-color"></i>Café</span>
                                            </p>
                                        </div>
                                    </div><!-- /.service-amitence-box -->
                                    <div class="media service-amitence-box rt-mb-30">
                                        <img src="{{asset('public/assets/frontend/images/all-img/hottel-cion-14.png')}}"  class="rt-pr-23" alt="hottel-cion">
                                        <div class="media-body rt-pl-23">
                                            <h5 class="f-size-16 rt-semiblod">Front Desk Services</h5>
                                            <p class="f-size-13 text-333">
                                                <span class="rt-mr-40"><i class="icofont-check-circled primary-color rt-pr-4"></i> Luggage storage</span>
                                                <span class="rt-mr-40"> <i class="icofont-check-circled primary-color"></i> Porter</span>
                                                <span class="rt-mr-40"> <i class="icofont-check-circled primary-color"></i> Tourist map</span>
                                                <span class="rt-mr-40"> <i class="icofont-check-circled primary-color"></i> Ticket service</span>
                                                <span> <i class="icofont-check-circled primary-color"></i> Postal service</span>
                                            </p>
                                        </div>
                                    </div><!-- /.service-amitence-box -->
                                    
                              </div><!-- /.flight-list-box -->
                            </div><!-- ./ tab content -->
                            <div class="tab-pane fade" id="rt-itm_5" role="tabpanel" aria-labelledby="rt-itm_5-tab">
                                <div class="flight-list-box rt-mb-30">
                                    <div class="inner-content rt-pt-10 rt-pl-15">
                                        <h4 class="f-size-18 rt-semiblod rt-mb-35 ">Hotel Policies</h4>
                                    </div><!-- /.inner-content -->
                                    <div class="media service-amitence-box rt-mb-30">
                                        <img src="{{asset('public/assets/frontend/images/all-img/hottel-cion-16.png')}}"  class="rt-pr-23" alt="hottel-cion">
                                        <div class="media-body rt-pl-23">
                                            <h5 class="f-size-16 rt-semiblod">Check-in & Check-out</h5>
                                            <p class="f-size-13 text-333">
                                                <span class="rt-mr-40"><i class="icofont-check-circled primary-color rt-pr-4"></i> Check-in from 14:00 </span>
                                                <span class="rt-mr-40"> <i class="icofont-check-circled primary-color"></i> Check-out before 12:00</span>
                                            </p>
                                        </div>
                                    </div><!-- /.service-amitence-box -->
                                    <div class="media service-amitence-box rt-mb-30">
                                        <img src="{{asset('public/assets/frontend/images/all-img/hottel-cion-17.png')}}"  class="rt-pr-23" alt="hottel-cion">
                                        <div class="media-body rt-pl-23">
                                            <h5 class="f-size-16 rt-semiblod">Children and Extra Beds</h5>
                                            <p class="f-size-13 text-333">
                                                
                                                Guests aged under 18 must be accompanied by a parent or legal guardian.
                                            </p>
                                        </div>
                                    </div><!-- /.service-amitence-box -->
                                    <div class="media service-amitence-box rt-mb-30">
                                        <img src="{{asset('public/assets/frontend/images/all-img/hottel-cion-15.png')}}"  class="rt-pr-23" alt="hottel-cion">
                                        <div class="media-body rt-pl-23">
                                            <h5 class="f-size-16 rt-semiblod">Dining</h5>
                                            <p class="f-size-13 text-333">
                                            Buffet breakfast HK$130 ( Approximately $17 )
                                            </p>
                                        </div>
                                    </div><!-- /.service-amitence-box -->
                                    <div class="media service-amitence-box rt-mb-30">
                                        <img src="{{asset('public/assets/frontend/images/all-img/hottel-cion-14.png')}}"  class="rt-pr-23" alt="hottel-cion">
                                        <div class="media-body rt-pl-23">
                                            <h5 class="f-size-16 rt-semiblod rt-mb-10">Paying at the Hotel</h5>
                                            <div class="rt-footer-social">
                                                <ul>
                                                    <li><a href="#"><img src="{{asset('public/assets/frontend/images/brands/card-1.png')}}"  alt="cardimage" draggable="false"></a></li>
                                                    <li><a href="#"><img src="{{asset('public/assets/frontend/images/brands/card-2.png')}}"  alt="cardimage" draggable="false"></a></li>
                                                    <li><a href="#"><img src="{{asset('public/assets/frontend/images/brands/card-3.png')}}"  alt="cardimage" draggable="false"></a></li>
                                                    <li><a href="#"><img src="{{asset('public/assets/frontend/images/brands/card-4.png')}}"  alt="cardimage" draggable="false"></a></li>
                                                    <li><a href="#"><img src="{{asset('public/assets/frontend/images/brands/card-5.png')}}"  alt="cardimage" draggable="false"></a></li>
                                            
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- /.service-amitence-box -->
                                
                                </div><!-- /.flight-list-box -->
                                <div class="flight-list-box">
                                    <h3 class="f-size-18 rt-semiblod rt-mt-15 rt-mb-30">Cancellation</h3>
                                    <h3 class="f-size-14 text-uppercase rt-mt-15 rt-mb-30">CANCELLATIONS AND REFUNDS</h3>
                                
                                    <h4 class="f-size-14 rt-medium rt-mb-10">Our Fault</h4>
                                    
                                    <p class="f-size-14">
                                        We work very hard to ensure that all tours run as scheduled and enjoy a 99% success rate. When a tour cancels, and it is
                                        the fault of The Shoreditch Pub Crawl or one of the freelance guides we work with, we will refund your prebought ticket
                                        as well as offer up to 100% of the value of the original ticket price as credit towards the purchase of another tour as
                                        compensation. This credit cannot be used in any other way and will not be cashable.
                                    </p>
                                    <br>
                                    <h4 class="f-size-14 rt-medium rt-mb-10">Your Request</h4>
                                    
                                    <p class="f-size-14">
                                        Should you not be able to attend your tour and need to cancel a tour booking letting us know at least 24 hours before
                                        your tour, we will cancel your ticket and credit you 50% of the purchase price towards the purchase of an additional
                                        future tour. We have a no refund policy, unless we are at fault for the cancelation of your tour.
                                    </p>
                                    <br>
                                    <h4 class="f-size-14 rt-medium rt-mb-10">Acts of God</h4>
                                    <p class="f-size-14">
                                        We may not be held responsible should we be unable to offer a tour due to Acts of God, (tsunamis, earthquakes, volcanic
                                        dust clouds, extreme
                                        weather, etc.).
                                    </p>
                                
                                
                                </div>
                            </div>
                            <div class="tab-pane fade" id="rt-itm_6" role="tabpanel" aria-labelledby="rt-itm_6-tab">
                                <div class="flight-list-box rt-mb-30 row">
                                   <div class="col-12">
                                    <h4 class="f-seize-18 rt-semiblod rt-mb-30">Reviews <span class="f-size-14"></span></h4>
                                    @if(session()->has('username'))
                                    <form id="my_order" action="{!!route('review')!!}" method="post" enctype="multipart/form-data" class="rt-form rt-line-form flight-lable">
                                        @csrf
                                        <input type="hidden" value ="{!!$product_id!!}"name="product_id">   
                                        <input type="hidden" value ="{!!Session('username')!!}"name="user">  
                                    <div class="form-group">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  name="content"></textarea>
                                    </div>
                                    <button class="rt-btn rt-gradient pill rt-sm2" type="submit">Send</button>
                                    </form>
                                    @endif
                                    
                                    
                                        </div><!-- /.col-md-4 -->
                                    </div><!-- /.row -->
                                @foreach ($review as $r)
                                <div class="flight-list-box single-commnets row rt-mb-30">
                                    <div class="col-lg-9 col-md-8 pl-md-5">
                                            <h4 class="f-size-17 rt-strong">{{$r->user}} <span class="rt-pl-15 f-size-14"> </span></h4>
                                            <span class="f-size-13 text-878 d-block rt-mb-15">{{$r->created_at}}</span>
                                            <p class="f-size-14 text-333">
                                               {{$r->content}}
                                            </p>
                                    </div><!-- /.right-column -->
                                </div><!-- /.flight-list-box -->
                                @endforeach
                                   </div><!-- /.col-12 -->
                                </div><!-- /.flight-list-box -->
                            
                            </div>
                        </div>
                    
                </div><!-- /.hotel-tabs -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
        <input type="text" id="datepicker"  name = "datepicker" autocomplete="off">
    </div><!-- /.container -->
</section>

@endforeach
</body>
<script type="text/javascript">
    $(document).ready(function(){
    //$("#datepicker").datepicker({
    //minDate: 30
    //});
    var dates = $("#datepicker,#datepicker1").datepicker({
        minDate: "0",
        maxDate: "+2Y",
        onSelect: function(date) {
        for(var i = 0; i < dates.length; ++i) {
            if(dates[i].id < this.id)
                $(dates[i]).datepicker('option', 'maxDate', date);
            else if(dates[i].id > this.id)
                $(dates[i]).datepicker('option', 'minDate', date);
        }
    } 
    });
    window.setTimeout(function() {
    $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
        $(this).remove(); 
    });
}, 3000);
});
</script>

</html>



@stop