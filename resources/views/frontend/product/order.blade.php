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
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4 class="rt-strong text-uppercase rt-mb-20"> Thông tin đặt phòng </h4>
            </div><!-- /.col-12 -->
            <div class="col-xl-9">
                <div class="flt-dtls-box rt-mb-30">
                    <div class="upper-top-content d-md-flex flex-md-row justify-content-md-between align-items-center">
                        <div class="left">
                            <span>Candlewood Suites NYC - </span><span>Times Square</span>
                            <p>Times Square | 4.8 km from downtown   | Near the subway</p>
                        </div><!-- /.left -->
                        <div class="right">
                            <a href="#" class="rt-btn rt-gradient3 rt-Bshadow-3  pill text-uppercase rt-sm2">Update</a>
                        </div><!-- /.right -->
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
                                        <span class="d-block rt-strong heading-color-1">Tue,Nov 13,2018</span>
                                        <span class="d-block f-size-12">From 14:00</span>
                                    </div>
                                    <div>
                                        <span class="d-block f-size-12">Check-out:</span>
                                        <span class="d-block rt-strong heading-color-1">Fri,Nov 16,2018</span>
                                        <span class="d-block f-size-12">Before 12:00</span>
                                    </div>
                                    <div class="text-right"> 
                                        <span class="d-block rt-medium heading-color-1">3 Nights</span>
                                        <span class="d-block"><a href="#">Change Dates</a></span>
                                    </div>
                               </div><!-- /.top-2 -->
                              
                               <div class="rt-divider style-three"></div><!-- /.rt-divider -->
                              
                               <div class="footer3-elements rt-mt-20">
                                   <span class="d-block heading-color-1 rt-strong">Superior Room - Minimum 2 nights</span>
                                   
                                       <div class="clearfix f-size-12 text-555"><span class="float-left ">Max. guests per room</span> <span class="float-right">02</span></div>
                                       <div class="clearfix f-size-12 text-555"><span class="float-left">Bed</span> <span class="float-right">1 double bed or 2 single beds</span></div>
                                       <div class="clearfix f-size-12 text-555"><span class="float-left">Breakfast</span> <span class="float-right">No Breakfast</span></div>
                                   
                               </div><!-- /.footer3-elements -->
                            </div><!-- /.hotel-text -->
                        </div><!-- /.hotel-inner-content -->
                    </div><!-- /.flight-list-box -->
                </div><!-- /.flt-dtls-box -->
                <div
                    class="flight-list-box rt-mb-30 ask-for-login d-md-flex flex-md-row justify-content-md-between align-items-center pt-30">
                    <div class="left">
                        <h6 class="rt-strong">Already a Emigrar member?</h6>
                        <p>Sign in to earn points and make booking easier!</p>
                    </div><!-- /.left -->
                    <div class="right">
                        <a href="#" class="link-text rt-strong f-size-14" data-toggle="modal" data-target="#rtmodal-1">
                            <i class="fa fa-user rt-icon icon-gradinet-1 rt-circle mr-2 rt-hw-35"></i><!-- /.fa --> Sign
                            in</a>
                    </div><!-- /.left -->
                </div><!-- /.flight-list-box -->
                <div class="flight-list-box rt-mb-30 pt-30">
                    <h4 class="f-size-24 text-capitalize rt-mb-30  rt-semiblod">Passenger Info</h4>
                    <h6 class="text-333 rt-medium">Passenger 1: Adult ticket</h6>
                    <br>
                    <br>
                    <form action="#" class="rt-form rt-line-form flight-lable">
                        <div class="row">
                            <div class="col-md-6 rt-mb-30 ">
                                <label for="fst-name">First Name</label>
                                <input type="text" class="form-control" id="fst-name"
                                    placeholder="Enter Your First Name ">
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6 rt-mb-30">
                                <label for="lst-name">Last Name</label>
                                <input type="text" class="form-control" id="lst-name"
                                    placeholder="Enter Your Last Name ">
                            </div><!-- /.col-md-6 -->
                            <div class="col-lg-6 rt-mb-30">
                                <label for="select-1"></label>
                                <select id="select-1">
                                    <option value="1" disabled selected>Select or enter the first character</option>
                                    <option value="2">Alaska</option>
                                    <option value="3">Bahamas</option>
                                    <option value="4">Bermuda</option>
                                    <option value="5">Canada</option>
                                    <option value="6">Caribbean</option>
                                    <option value="7">Europe</option>
                                    <option value="8">Hawaii</option>
                                </select>
                            </div><!-- /.col-md-6 -->
                            <div class="col-lg-6 rt-mb-30">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Date</label>
                                        <br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2s" value="option2">
                                            <label class="form-check-label" for="inlineRadio2s">Female</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2ss" value="option2">
                                            <label class="form-check-label" for="inlineRadio2ss">Male</label>
                                        </div>
                                    </div><!-- /.col-md-6 -->
                                    <div class="col-md-6">
                                        <label for="st-date">date</label>
                                        <input type="text" class="form-control rt-date-picker" placeholder="date"
                                            id="st-date">
                                    </div><!-- /.col-md-6 -->
                                </div><!-- /.row -->
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6 rt-mb-30">
                                <label for="select-2">ID</label>
                                <select id="select-2">
                                    <option value="1">Passport</option>
                                    <option value="2">NID</option>
                                    <option value="3">NTO</option>

                                </select>
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6 rt-mb-30">
                                <label for="id-number">ID Number</label>
                                <input type="text" placeholder="ID Number" class="form-control">
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <p class="f-size-14">Please ensure the ID is valid for at least 6 months
                                    after the date of departure.</p>
                            </div><!-- /.col-12 -->
                        </div><!-- /.row -->
                    </form>
                </div><!-- /.flight-list-box -->
                <div class="flight-list-box rt-mb-30 pt-30">
                    <h6 class="text-333 rt-semiblod">Contact Details</h6> <br>
                    <form action="#" class="rt-form rt-line-form flight-lable">
                        <div class="row">
                            <div class="col-md-6 rt-mb-30">
                                <label for="contact-name">Contact name</label>
                                <input type="text" placeholder="Contact name" id="contact-name">
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6 rt-mb-30">
                                <label for="mbl-name">Mobile phone</label>
                                <input type="tel" placeholder="Enter Your Number" id="mbl-name">
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <label for="eml-name">Email</label>
                                <input type="tel" placeholder="Enter Your Email" id="eml-name">
                            </div><!-- /.col-md-6 -->
                        </div><!-- /.row -->
                    </form>
                </div><!-- /.flight-list-box -->
                <div class="flight-list-box pt-30">
                    <h4 class="f-size-24 rt-strong rt-mb-20">Promo Code</h4>
                    <form action="#" class="rt-form rt-line-form flight-lable">
                        <div class="row align-items-end">
                            <div class="col-md-6">
                                <label>Add promo code</label>
                                <input type="text" placeholder="Please enter promo code">
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <a href="#" class="rt-btn rt-gradient3 pill text-uppercase rt-sm2">Verify</a>
                            </div><!-- /.col-md- -->
                        </div><!-- /.row -->
                    </form>
                </div><!-- /.flight-list-box -->
            </div><!-- /.col-lg-9 -->
            <div class="col-lg-3 mx-auto">
                <div class="rt-sidebar-group">
                    <div class="rt-widget final-booking">

                        <ul>
                            <li class="clearfix">

                                <span>1 Phòng x 2 Đêm</span>
                                <br>
                                <span class="float-right">200 VNĐ</span>
                            </li>
                            <li class="clearfix">

                                <span>Thuế GTGT (VAT 10%)</span>
                                <br>
                                <span class="float-right">20 VNĐ</span>
                            </li>
                            <li class="clearfix sub-total">

                                <span>Tổng</span>
                                <span class="float-right">220 <small>VNĐ</small></span>
                            </li>

                        </ul>
                        <div class="text-center rt-mb-30">
                            <a href="#" class="rt-btn rt-gradient pill rt-sm2">Continue Booking</a>
                        </div><!-- /.text-center -->
                    </div><!-- /.rt-widget -->

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
                    </div><!-- /.plain-box -->
                </div><!-- /.rt-sidebar-group -->
            </div><!-- /.col-lg-3 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

</body>

</html>

@stop