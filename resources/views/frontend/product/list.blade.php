@extends('frontend.layouts.master')
@section('content')
<!DOCTYPE html>
<html lang="en">

<body>

    <!-- /preloder -->
  <div class="rt-preloder">
    <div class="preloder-box">
        <img src="{{asset('public/assets/frontend/images/all-img/preloder.svg')}}" alt="preloder image" draggable="false">
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="rtmodal-1" tabindex="-1" role="dialog" aria-labelledby="rtmodal-1"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered rt-lgoinmodal " role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="rt-modal-headr rt-mb-20 one">
                    <img src="{{asset('public/assets/frontend/images/logo/Logo-icon.png')}}" alt="modal logo" draggable="false">
                    <h4>Login in to Emigrar</h4>
                    <p>Log in to get in the moment updates on the things
                        that interest you.</p>
                </div><!-- /.rt-modal-headr -->
                <div class="rt-modal-headr rt-mb-20 two">
                    <img src="{{asset('public/assets/frontend/images/logo/Logo-icon.png')}}" alt="modal logo" draggable="false">
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









<div class="rt-breadcump rt-breadcump-height with-logn-height">
    <div class="rt-page-bg rtbgprefix-cover" style="background-image: url({{asset('public/assets/frontend/images/backgrounds/bredcump.png')}})">
    </div><!-- /.rt-page-bg -->
    <div class="container">
        <div class="row rt-breadcump-height with-logn-height">
            <div class="col-12">
                <div class="breadcrumbs-content">
                    <h3>Hotels</h3>
                    <div class="breadcrumbs">
                        <span class="divider"><i class="icofont-home"></i></span>
                        <a href="#" title="Home">Home</a>
                        <span class="divider"><i class="icofont-simple-right"></i></span>
                        Hotels

                    </div><!-- /.breadcrumbs -->
                </div><!-- /.breadcrumbs-content -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->

    <div class="bredcump-search">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="rt-banner-searchbox flight-search wow fade-in-bottom" data-wow-duration="1s" data-wow-delay="1s">
                        <div class="tab-content" id="myTabContent">
                            <!-- <div class="tab-pane rtIncative" id="rt-item_a_first" role="tabpanel" aria-labelledby="rt-item_a_first">
                               <form action="#">
                                   <div class="rt-radio-group">
                                       <div class="custom-control custom-radio custom-control-inline">
                                           <input type="radio" id="customRadioInline1" name="customRadioInline1"
                                               class="custom-control-input">
                                           <label class="custom-control-label" for="customRadioInline1">One-way</label>
                                       </div>
                                       <div class="custom-control custom-radio custom-control-inline">
                                           <input type="radio" id="customRadioInline2" name="customRadioInline2"
                                               class="custom-control-input">
                                           <label class="custom-control-label"
                                               for="customRadioInline2">Round-trip</label>
                                       </div>
                                       <div class="custom-control custom-radio custom-control-inline">
                                           <input type="radio" id="customRadioInline3" name="customRadioInline3"
                                               class="custom-control-input">
                                           <label class="custom-control-label"
                                               for="customRadioInline3">Multi-city</label>
                                       </div>
                                       <div class="dropdown form-check-inline rt-searchlink mr-md-5">
                                           <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                               1 Adult
                                           </a>

                                           <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                               <a class="dropdown-item" href="#">Room one</a>
                                               <a class="dropdown-item" href="#">Room two</a>
                                               <a class="dropdown-item" href="#">Room three</a>
                                           </div>
                                       </div>
                                       <div class="dropdown form-check-inline rt-searchlink">
                                           <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink2"
                                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                               Economy
                                           </a>

                                           <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                                               <a class="dropdown-item" href="#">Room one</a>
                                               <a class="dropdown-item" href="#">Room two</a>
                                               <a class="dropdown-item" href="#">Room three</a>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="rt-input-group">
                                       <div class="single-input  col-rt-in-3">
                                           <select class="rt-selectactive banner-select" name="from"
                                               style="width: 100%">
                                               <option value="1">from</option>
                                               <option value="2">Alaska</option>
                                               <option value="3">Bahamas</option>
                                               <option value="4">Bermuda</option>
                                               <option value="5">Canada</option>
                                               <option value="6">Caribbean</option>
                                               <option value="7">Europe</option>
                                               <option value="8">Hawaii</option>
                                           </select>
                                           <span class="input-iconbadge"><img
                                                   src="{{asset('public/assets/frontend/images/icons-image/s_icon_1.png')}}" alt=""
                                                   draggable="false"></span>
                                       </div>
                                       <div class="single-input  col-rt-in-3">
                                           <select class="rt-selectactive banner-select" name="to" style="width: 100%">
                                               <option value="1">To</option>
                                               <option value="2">Alaska</option>
                                               <option value="3">Bahamas</option>
                                               <option value="4">Bermuda</option>
                                               <option value="5">Canada</option>
                                               <option value="6">Caribbean</option>
                                               <option value="7">Europe</option>
                                               <option value="8">Hawaii</option>
                                           </select>
                                           <span class="input-iconbadge"><img
                                                   src="{{asset('public/assets/frontend/images/icons-image/s_icon_2.png')}}" alt=""
                                                   draggable="false"></span>
                                       </div>
                                       <div class="single-input  col-rt-in-3">
                                           <input type="text" class="form-control rt-date-picker has-icon"
                                               placeholder="Depart">
                                           <span class="input-iconbadge"><i class="icofont-ui-calendar"></i></span>
                                       </div>
                                       <div class="single-input  col-rt-in-3">
                                           <input type="text" class="form-control rt-date-picker has-icon"
                                               placeholder="Return">
                                           <span class="input-iconbadge"><i class="icofont-ui-calendar"></i></span>
                                       </div>
                                       <div class="single-input  col-rt-in-1">
                                           <button type="submit"><i class="icofont-search"></i></button>
                                       </div>
                                   </div>
                               </form>
                            </div> -->
                            <div class="tab-pane  show active" id="rt-item_a_second" role="tabpanel" aria-labelledby="rt-item_a_second">
                                 <form action="{!!route('product.filter')!!}" enctype="multipart/form-data">
                                  @csrf                             
                                     <div class="rt-input-group" style="padding-top: 10px;padding-bottom: 10px;">
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
                                             <style type="text/css">
                                            .select2-container--default .select2-selection--single .select2-selection__rendered{
                                              padding-left: 15px;
                                            }
                                          </style>
                                            <select class="rt-selectactive banner-select" name="location" style="width: 100%">
                                              <option value="">Chọn vị trí</option>
                                              @foreach($city as $city)
                                                <option value="{{$city->id}}">{{$city->title}}</option>
                                              @endforeach
                                            </select>
                                         </div><!-- /.single-input -->
                                         <div class="single-input  col-rt-in-1">
                                             <button type="submit" name="search"><i class="icofont-search"></i></button>
                                         </div><!-- /.single-input -->
                                     </div><!-- /.rt-input-group -->
                                 </form><!-- ./ form -->
                            </div>
                            
<!--                             <div class="tab-pane  rtIncative" id="rt-item_a_third" role="tabpanel" aria-labelledby="rt-item_a_third">
                                <form action="#">

                                    <div class="rt-input-group">
                                        <div class="single-input  col-rt-in-3">
                                            <input type="text" class="form-control" placeholder="destination">
                                        </div>
                                        <div class="single-input  col-rt-in-3">
                                            <input type="text" class="form-control rt-date-picker has-icon"
                                                placeholder="Depart">
                                            <span class="input-iconbadge"><i class="icofont-ui-calendar"></i></span>
                                        </div>
                                        <div class="single-input  col-rt-in-3">
                                            <input type="text" class="form-control rt-date-picker has-icon"
                                                placeholder="Return">
                                            <span class="input-iconbadge"><i class="icofont-ui-calendar"></i></span>
                                        </div>
                                        <div class="single-input  col-rt-in-3">
                                            <input type="text" class="form-control" placeholder="keywords(optional)">
                                        </div>
                                        <div class="single-input  col-rt-in-1">
                                            <button type="submit"><i class="icofont-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div> -->
<!--                             <div class="tab-pane  rtIncative" id="rt-item_a_four" role="tabpanel" aria-labelledby="rt-item_a_four">
                                <form action="#">
                                    <div class="rt-input-group">
                                        <div class="single-input  col-rt-in-3">
                                            <select class="rt-selectactive banner-select" name="from"
                                                style="width: 100%">
                                                <option value="1">from</option>
                                                <option value="2">Alaska</option>
                                                <option value="3">Bahamas</option>
                                                <option value="4">Bermuda</option>
                                                <option value="5">Canada</option>
                                                <option value="6">Caribbean</option>
                                                <option value="7">Europe</option>
                                                <option value="8">Hawaii</option>
                                            </select>
                                        </div>
                                        <div class="single-input  col-rt-in-3">
                                            <select class="rt-selectactive banner-select" name="to" style="width: 100%">
                                                <option value="1">To</option>
                                                <option value="2">Alaska</option>
                                                <option value="3">Bahamas</option>
                                                <option value="4">Bermuda</option>
                                                <option value="5">Canada</option>
                                                <option value="6">Caribbean</option>
                                                <option value="7">Europe</option>
                                                <option value="8">Hawaii</option>
                                            </select>
                                        </div>
                                        <div class="single-input  col-rt-in-3">
                                            <input type="text" class="form-control rt-date-picker has-icon"
                                                placeholder="Depart">
                                            <span class="input-iconbadge"><i class="icofont-ui-calendar"></i></span>
                                        </div>
                                        <div class="single-input  col-rt-in-3">
                                            <input type="text" class="form-control" placeholder="train no( opt)">
                                        </div>
                                        <div class="single-input  col-rt-in-1">
                                            <button type="submit"><i class="icofont-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div> -->
                        </div>
                    </div><!-- /.rt-banner-searchbox -->
                    
                    
<!--                     <ul class="nav serachnavs wow fade-in-bottom" id="rtMultiTab" role="tablist" data-wow-duration="1.5s"
                        data-wow-delay="1.5s">
                        <li class="nav-item">
                            <a class="nav-link inactive" id="first-tab" data-target="#rt-item_b_first"
                                data-secondary="#rt-item_a_first" data-toggle="tab" href="#first" role="tab" aria-controls="first-tab"
                                aria-selected="false">
                                <i class="icofont-airplane"></i>
                                <span>Flights</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id="second-tab" data-target="#rt-item_b_second"
                                data-secondary="#rt-item_a_second" data-toggle="tab" href="#second" role="tab" aria-controls="second-tab"
                                aria-selected="true">
                    
                                <i class="icofont-hotel"></i>
                                <span>Hotels</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link inactive" id="third-tab" data-target="#rt-item_b_thrid"
                                data-secondary="#rt-item_a_third" data-toggle="tab" href="#third" role="tab" aria-controls="third-tab"
                                aria-selected="false">
                                <i class="icofont-car-alt-4"></i>
                                <span>Cars</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link inactive" id="four-tab" data-target="#rt-item_b_four"
                                data-secondary="#rt-item_a_four" data-toggle="tab" href="#four" role="tab" aria-controls="four-tab"
                                aria-selected="false">
                                <i class="icofont-train-line"></i>
                                <span>Trains</span>
                            </a>
                        </li>
                    </ul> -->
                </div><!-- /.col-lg-10 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
</div><!-- /.rt-bredcump -->







<div class="spacer-bottom"></div><!-- /.spacer-bottom -->
<section class="content-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="tab-content" id="rt-BototmTab">
    <div class="tab-pane rtIncative fade-in-bottom" id="rt-item_b_first" role="tabpanel"
        aria-labelledby="rt-item_b_first">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6 mx-auto">
                <div class="rt-sidebar-group">
    <div class="rt-widget widget_range-slider">
        <h3 class="rt-widget-title">
            Filter by Price
        </h3><!-- /.rt-widget-title -->

        <div class="slider-range"></div>
        <div class="price_slider_amount">
            <div class="clearfix">
                <div class="float-left">
                    <span>Price:</span>
                </div><!-- /.float-left -->
                <div class="float-right">
                    <input type="text" class="amount" name="price" placeholder="Add Your Price" />
                </div><!-- /.float-right -->
            </div><!-- /.clearfix -->
        </div>
        <div class="text-center">
            <input type="submit" value="Filter" class="rt-btn rt-gradient rounded-sm rt-sm text-uppercase" />
        </div><!-- /.text-center -->
    </div><!-- /.rt-widget -->
    <div class="rt-widget widget_plane_time">
        <h3 class="rt-widget-title">
            Stops
        </h3><!-- /.rt-widget-title -->
        <ul>
            <li class="clearfix">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="gridCheckrt-1">
                    <label class="form-check-label" for="gridCheckrt-1">
                        Nonstop(63)
                    </label>
                </div><!-- ./orm-group -->
                <span class="float-right">$711</span>
            </li>
            <li class="clearfix">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="gridCheckrt-2">
                    <label class="form-check-label" for="gridCheckrt-2">
                        1 Stop (34)
                    </label>
                </div><!-- ./orm-group -->
                <span class="float-right">$610</span>
            </li>
        </ul>
    </div><!-- /.rt-widget -->
    <div class="rt-widget widget_plane_time">
        <h3 class="rt-widget-title">
            Airlines included
        </h3><!-- /.rt-widget-title -->
        <ul>
            <li class="clearfix">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="gridCheckrt-3">
                    <label class="form-check-label" for="gridCheckrt-3">
                        Delta (16)
                    </label>
                </div><!-- ./orm-group -->
                <span class="float-right">$1,511</span>
            </li>
            <li class="clearfix">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="gridCheckrt-4">
                    <label class="form-check-label" for="gridCheckrt-4">
                        Aer Lingus (11)
                    </label>
                </div><!-- ./orm-group -->
                <span class="float-right">$1106</span>
            </li>
            <li class="clearfix">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="gridCheckrt-5">
                    <label class="form-check-label" for="gridCheckrt-5">
                        Iberia (7)
                    </label>
                </div><!-- ./orm-group -->
                <span class="float-right">$1885</span>
            </li>
            <li class="clearfix">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="gridCheckrt-51">
                    <label class="form-check-label" for="gridCheckrt-51">
                        British Airways (11)
                    </label>
                </div><!-- ./orm-group -->
                <span class="float-right">$$1185</span>
            </li>
            <li class="clearfix">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="gridCheckrt-6">
                    <label class="form-check-label" for="gridCheckrt-6">
                        KLM (7)
                    </label>
                </div><!-- ./orm-group -->
                <span class="float-right">$1885</span>
            </li>
            <li class="clearfix">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="gridCheckrt-6s">
                    <label class="form-check-label" for="gridCheckrt-6s">
                        Finnair (6)
                    </label>
                </div><!-- ./orm-group -->
                <span class="float-right">$1885</span>
            </li>
        </ul>
        <div class="show-more-links">
            <a href="#">Show more</a>
        </div><!-- /.show-more-links -->
    </div><!-- /.rt-widget -->
    <div class="rt-widget widget_plane_time">
        <h3 class="rt-widget-title">
            Departure time
        </h3><!-- /.rt-widget-title -->
        <ul>
            <li class="clearfix">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="gridCheckrt-11">
                    <label class="form-check-label" for="gridCheckrt-11">
                        Morning (5am - 11am)
                    </label>
                </div><!-- ./orm-group -->

            </li>
            <li class="clearfix">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="gridCheckrt-111">
                    <label class="form-check-label" for="gridCheckrt-111">
                        Afternoon (12pm - 5pm)
                    </label>
                </div><!-- ./orm-group -->

            </li>
            <li class="clearfix">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="gridCheckrt-1111">
                    <label class="form-check-label" for="gridCheckrt-1111">
                        Evening (6pm - 11pm)
                    </label>
                </div><!-- ./orm-group -->

            </li>
        </ul>

    </div><!-- /.rt-widget -->
    <div class="rt-widget widget_plane_time">
        <h3 class="rt-widget-title">
            Arrival time
        </h3><!-- /.rt-widget-title -->
        <ul>
            <li class="clearfix">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="gridCheckrt-22">
                    <label class="form-check-label" for="gridCheckrt-22">
                        Morning (5am - 11am)
                    </label>
                </div><!-- ./orm-group -->

            </li>
            <li class="clearfix">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="gridCheckrt-222">
                    <label class="form-check-label" for="gridCheckrt-222">
                        Afternoon (12pm -
                        5:pm)
                    </label>
                </div><!-- ./orm-group -->

            </li>
            <li class="clearfix">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="gridCheckrt-2222">
                    <label class="form-check-label" for="gridCheckrt-2222">
                        Evening (6pm - 11pm)
                    </label>
                </div><!-- ./orm-group -->

            </li>
        </ul>

    </div><!-- /.rt-widget -->
    <div class="rt-widget widget_plane_time">
        <h3 class="rt-widget-title">
            Departure airports
        </h3><!-- /.rt-widget-title -->
        <ul>
            <li class="clearfix">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="gridCheckrt-ex-1">
                    <label class="form-check-label" for="gridCheckrt-ex-1">
                        LHR (London) (82)
                    </label>
                </div><!-- ./orm-group -->
                <span class="float-right">$711</span>
            </li>
            <li class="clearfix">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="gridCheckrt-ex-2">
                    <label class="form-check-label" for="gridCheckrt-ex-2">
                        LGW (London) (10)
                    </label>
                </div><!-- ./orm-group -->
                <span class="float-right">$610</span>
            </li>
            <li class="clearfix">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="gridCheckrt-ex-3">
                    <label class="form-check-label" for="gridCheckrt-ex-3">
                        LCY (London) (5)
                    </label>
                </div><!-- ./orm-group -->
                <span class="float-right">$1106</span>
            </li>

        </ul>

    </div><!-- /.rt-widget -->
    <div class="rt-widget widget_plane_time">
        <h3 class="rt-widget-title">
            Arrival airports
        </h3><!-- /.rt-widget-title -->
        <ul>
            <li class="clearfix">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="gridCheckrt-ex-11">
                    <label class="form-check-label" for="gridCheckrt-ex-11">
                        JFK (New York) (70)
                    </label>
                </div><!-- ./orm-group -->
                <span class="float-right">$711</span>
            </li>
            <li class="clearfix">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="gridCheckrt-ex-22">
                    <label class="form-check-label" for="gridCheckrt-ex-22">
                        EWR (Newark) (24)
                    </label>
                </div><!-- ./orm-group -->
                <span class="float-right">$610</span>
            </li>
            <li class="clearfix">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="gridCheckrt-ex-33">
                    <label class="form-check-label" for="gridCheckrt-ex-33">
                        LGA (New York) (3)
                    </label>
                </div><!-- ./orm-group -->
                <span class="float-right">$1106</span>
            </li>

        </ul>

    </div><!-- /.rt-widget -->
</div><!-- /.rt-sidebar-group -->
            </div><!-- /.col-lg-3 -->
            <div class="col-xl-9 col-lg-10 mx-auto mt-5 mt-xl-0">
                <div class="row">
                           <div class="col-lg-12">
            <div class="flight-list-box rt-mb-30">
                <form action="#" class="row">
                    <div class="col-lg-3 col-md-6 mb-3 mb-lg-0">
                        <button class="rt-btn pill rt-sm rt-gradient d-block">Recommended</button>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-3 col-md-6 mb-3 mb-lg-0">
                        <select class="rt-selectactive banner-select" name="from" style="width: 100%">
                            <option value="1">Price</option>
                            <option value="2">100</option>
                            <option value="3">100</option>
                            <option value="4">400</option>
                            <option value="5">500</option>
                        </select>
                    </div><!-- /.col-lg-3 -->
                    <div class="col-lg-3 rt-input-group mini col-md-6  mb-3 mb-md-0">
                        <input type="text" class="rt-date-picker form-control" placeholder="Departure Time">
                    </div><!-- /.col-lg-3 -->
                    <div class="col-lg-3 rt-input-group mini col-md-6 ">
                        <input type="text" class="form-control rt-date-picker" placeholder="Arrival Time ">
                    </div><!-- /.col-lg-3 -->
                </form>
            </div><!-- /.flight-list-box -->
       </div><!-- /.col-lg-12 -->
        <div class="col-lg-12 col-md-6">
            <div class="flight-list-box rt-mb-30">
                <div
                    class="top-content d-flex flex-lg-row flex-column align-items-lg-center justify-content-left  justify-content-lg-between">
                    <div class="flight-logo">
                        <img src="{{asset('public/assets/frontend/images/all-img/flt-logo-1.png')}}" alt="flt logo" draggable="false">
                    </div><!-- /.flight-logo -->
                    <div class="pricing">
                        <h5>Scoot</h5>
                        <p>TR978 | Airbus A320-212</p>
                    </div><!-- /.pricing -->
                    <div class="flight-time d-flex justify-content-between align-items-lg-center">
                        <div class="left">
                            <span class="d-block">10:55</span>
                            <span class="d-block">HKG T2</span>
                        </div><!-- /.left -->
                        <div class="middle">
                            <img src="{{asset('public/assets/frontend/images/all-img/time-shape-line.png')}}" alt="time shape" draggable="false">
                        </div><!-- /.middle -->
                        <div class="right">
                            <span class="d-block">15.00</span>
                            <span class="d-block">SIN T2</span>
                        </div><!-- /.rght -->
                    </div><!-- /.flight-time -->
                    <div class="flight-detils">
                        <span class="d-block"><i class="icofont-clock-time"></i><!-- /.time -->4h5m</span>
                        <span class="d-block"><a href="#collapseExample" class="flt-d-clic" data-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="collapseExample">Flight details <i
                                    class="icofont-simple-down"></i></a></span>
                    </div><!-- /.flight-detils -->
                    <div class="trip">
                        <span class="d-blok">$610</span>
                        <span class="d-block">Roundtrip</span>
                    </div><!-- /.trip -->
                    <div class="book-now">
                        <a href="flight-details.html" class="rt-btn  pill rt-gradient text-uppercase">Book</a>
                    </div><!-- /.book-now -->
                </div><!-- /.top-content -->
                <div class="collapse bottom-content" id="collapseExample">
                    <p><span>Scoot - TR979 | Airbus A320 | Economy</span> <span><i class="icofont-clock-time"></i>4h5m</span></p>
                    <ul class="flight-timeline">
            
                        <li>
                            <span>Nov 12 10:55</span>
            
                        </li>
                        <li><span>HKG - Hong Kong Hong Kong International Airport T2</span></li>
                        <li>
                            <span>Nov 12 15:00</span>
            
                        </li>
                        <li><span>SIN - Singapore Changi Airport T2</span></li>
                    </ul>
                </div><!-- /.bottom content -->
            </div><!-- /.flight-box -->
        </div><!-- /.col-lg-12 -->
        <div class="col-lg-12 col-md-6">
            <div class="flight-list-box rt-mb-30">
                <div
                    class="top-content d-flex flex-lg-row flex-column align-items-lg-center justify-content-left  justify-content-lg-between">
                    <div class="flight-logo">
                        <img src="{{asset('public/assets/frontend/images/all-img/flt-logo-2.png')}}" alt="flt logo" draggable="false">
                    </div><!-- /.flight-logo -->
                    <div class="pricing">
                        <h5>Scoot</h5>
                        <p>TR978 | Airbus A320-212</p>
                    </div><!-- /.pricing -->
                    <div class="flight-time d-flex justify-content-between align-items-lg-center">
                        <div class="left">
                            <span class="d-block">10:55</span>
                            <span class="d-block">HKG T2</span>
                        </div><!-- /.left -->
                        <div class="middle">
                            <img src="{{asset('public/assets/frontend/images/all-img/time-shape-line.png')}}" alt="time shape" draggable="false">
                        </div><!-- /.middle -->
                        <div class="right">
                            <span class="d-block">15.00</span>
                            <span class="d-block">SIN T2</span>
                        </div><!-- /.rght -->
                    </div><!-- /.flight-time -->
                    <div class="flight-detils">
                        <span class="d-block"><i class="icofont-clock-time"></i><!-- /.time -->4h5m</span>
                        <span class="d-block"><a href="#collapseExample2" class="flt-d-clic" data-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="collapseExample2">Flight details <i
                                    class="icofont-simple-down"></i></a></span>
                    </div><!-- /.flight-detils -->
                    <div class="trip">
                        <span class="d-blok">$610</span>
                        <span class="d-block">Roundtrip</span>
                    </div><!-- /.trip -->
                    <div class="book-now">
                        <a href="flight-details.html" class="rt-btn  pill rt-gradient text-uppercase">Book</a>
                    </div><!-- /.book-now -->
                </div><!-- /.top-content -->
                <div class="collapse bottom-content" id="collapseExample2">
                    <p><span>Scoot - TR979 | Airbus A320 | Economy</span> <span><i class="icofont-clock-time"></i>4h5m</span></p>
                    <ul class="flight-timeline">
            
                        <li>
                            <span>Nov 12 10:55</span>
            
                        </li>
                        <li><span>HKG - Hong Kong Hong Kong International Airport T2</span></li>
                        <li>
                            <span>Nov 12 15:00</span>
            
                        </li>
                        <li><span>SIN - Singapore Changi Airport T2</span></li>
                    </ul>
                </div><!-- /.bottom content -->
            </div><!-- /.flight-box -->
        </div><!-- /.col-lg-12 -->
        <div class="col-lg-12 col-md-6">
            <div class="flight-list-box rt-mb-30">
                <div
                    class="top-content d-flex flex-lg-row flex-column align-items-lg-center justify-content-left  justify-content-lg-between">
                    <div class="flight-logo">
                        <img src="{{asset('public/assets/frontend/images/all-img/flt-logo-1.png')}}" alt="flt logo" draggable="false">
                    </div><!-- /.flight-logo -->
                    <div class="pricing">
                        <h5>Scoot</h5>
                        <p>TR978 | Airbus A320-212</p>
                    </div><!-- /.pricing -->
                    <div class="flight-time d-flex justify-content-between align-items-lg-center">
                        <div class="left">
                            <span class="d-block">10:55</span>
                            <span class="d-block">HKG T2</span>
                        </div><!-- /.left -->
                        <div class="middle">
                            <img src="{{asset('public/assets/frontend/images/all-img/time-shape-line.png')}}" alt="time shape" draggable="false">
                        </div><!-- /.middle -->
                        <div class="right">
                            <span class="d-block">15.00</span>
                            <span class="d-block">SIN T2</span>
                        </div><!-- /.rght -->
                    </div><!-- /.flight-time -->
                    <div class="flight-detils">
                        <span class="d-block"><i class="icofont-clock-time"></i><!-- /.time -->4h5m</span>
                        <span class="d-block"><a href="#collapseExample3" class="flt-d-clic" data-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="collapseExample3">Flight details <i
                                    class="icofont-simple-down"></i></a></span>
                    </div><!-- /.flight-detils -->
                    <div class="trip">
                        <span class="d-blok">$610</span>
                        <span class="d-block">Roundtrip</span>
                    </div><!-- /.trip -->
                    <div class="book-now">
                        <a href="flight-details.html" class="rt-btn  pill rt-gradient text-uppercase">Book</a>
                    </div><!-- /.book-now -->
                </div><!-- /.top-content -->
                <div class="collapse bottom-content" id="collapseExample3">
                    <p><span>Scoot - TR979 | Airbus A320 | Economy</span> <span><i class="icofont-clock-time"></i>4h5m</span></p>
                    <ul class="flight-timeline">
            
                        <li>
                            <span>Nov 12 10:55</span>
            
                        </li>
                        <li><span>HKG - Hong Kong Hong Kong International Airport T2</span></li>
                        <li>
                            <span>Nov 12 15:00</span>
            
                        </li>
                        <li><span>SIN - Singapore Changi Airport T2</span></li>
                    </ul>
                </div><!-- /.bottom content -->
            </div><!-- /.flight-box -->
        </div><!-- /.col-lg-12 -->
        <div class="col-lg-12 col-md-6">
            <div class="flight-list-box rt-mb-30">
                <div
                    class="top-content d-flex flex-lg-row flex-column align-items-lg-center justify-content-left  justify-content-lg-between">
                    <div class="flight-logo">
                        <img src="{{asset('public/assets/frontend/images/all-img/flt-logo-2.png')}}" alt="flt logo" draggable="false">
                    </div><!-- /.flight-logo -->
                    <div class="pricing">
                        <h5>Scoot</h5>
                        <p>TR978 | Airbus A320-212</p>
                    </div><!-- /.pricing -->
                    <div class="flight-time d-flex justify-content-between align-items-lg-center">
                        <div class="left">
                            <span class="d-block">10:55</span>
                            <span class="d-block">HKG T2</span>
                        </div><!-- /.left -->
                        <div class="middle">
                            <img src="{{asset('public/assets/frontend/images/all-img/time-shape-line.png')}}" alt="time shape" draggable="false">
                        </div><!-- /.middle -->
                        <div class="right">
                            <span class="d-block">15.00</span>
                            <span class="d-block">SIN T2</span>
                        </div><!-- /.rght -->
                    </div><!-- /.flight-time -->
                    <div class="flight-detils">
                        <span class="d-block"><i class="icofont-clock-time"></i><!-- /.time -->4h5m</span>
                        <span class="d-block"><a href="#collapseExample4" class="flt-d-clic" data-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="collapseExample4">Flight details <i
                                    class="icofont-simple-down"></i></a></span>
                    </div><!-- /.flight-detils -->
                    <div class="trip">
                        <span class="d-blok">$610</span>
                        <span class="d-block">Roundtrip</span>
                    </div><!-- /.trip -->
                    <div class="book-now">
                        <a href="flight-details.html" class="rt-btn  pill rt-gradient text-uppercase">Book</a>
                    </div><!-- /.book-now -->
                </div><!-- /.top-content -->
                <div class="collapse bottom-content" id="collapseExample4">
                    <p><span>Scoot - TR979 | Airbus A320 | Economy</span> <span><i class="icofont-clock-time"></i>4h5m</span></p>
                    <ul class="flight-timeline">
            
                        <li>
                            <span>Nov 12 10:55</span>
            
                        </li>
                        <li><span>HKG - Hong Kong Hong Kong International Airport T2</span></li>
                        <li>
                            <span>Nov 12 15:00</span>
            
                        </li>
                        <li><span>SIN - Singapore Changi Airport T2</span></li>
                    </ul>
                </div><!-- /.bottom content -->
            </div><!-- /.flight-box -->
        </div><!-- /.col-lg-12 -->
        <div class="col-lg-12 col-md-6">
            <div class="flight-list-box rt-mb-30">
                <div
                    class="top-content d-flex flex-lg-row flex-column align-items-lg-center justify-content-left  justify-content-lg-between">
                    <div class="flight-logo">
                        <img src="{{asset('public/assets/frontend/images/all-img/flt-logo-1.png')}}" alt="flt logo" draggable="false">
                    </div><!-- /.flight-logo -->
                    <div class="pricing">
                        <h5>Scoot</h5>
                        <p>TR978 | Airbus A320-212</p>
                    </div><!-- /.pricing -->
                    <div class="flight-time d-flex justify-content-between align-items-lg-center">
                        <div class="left">
                            <span class="d-block">10:55</span>
                            <span class="d-block">HKG T2</span>
                        </div><!-- /.left -->
                        <div class="middle">
                            <img src="{{asset('public/assets/frontend/images/all-img/time-shape-line.png')}}" alt="time shape" draggable="false">
                        </div><!-- /.middle -->
                        <div class="right">
                            <span class="d-block">15.00</span>
                            <span class="d-block">SIN T2</span>
                        </div><!-- /.rght -->
                    </div><!-- /.flight-time -->
                    <div class="flight-detils">
                        <span class="d-block"><i class="icofont-clock-time"></i><!-- /.time -->4h5m</span>
                        <span class="d-block"><a href="#collapseExample5" class="flt-d-clic" data-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="collapseExample5">Flight details <i
                                    class="icofont-simple-down"></i></a></span>
                    </div><!-- /.flight-detils -->
                    <div class="trip">
                        <span class="d-blok">$610</span>
                        <span class="d-block">Roundtrip</span>
                    </div><!-- /.trip -->
                    <div class="book-now">
                        <a href="flight-details.html" class="rt-btn  pill rt-gradient text-uppercase">Book</a>
                    </div><!-- /.book-now -->
                </div><!-- /.top-content -->
                <div class="collapse bottom-content" id="collapseExample5">
                    <p><span>Scoot - TR979 | Airbus A320 | Economy</span> <span><i class="icofont-clock-time"></i>4h5m</span></p>
                    <ul class="flight-timeline">
            
                        <li>
                            <span>Nov 12 10:55</span>
            
                        </li>
                        <li><span>HKG - Hong Kong Hong Kong International Airport T2</span></li>
                        <li>
                            <span>Nov 12 15:00</span>
            
                        </li>
                        <li><span>SIN - Singapore Changi Airport T2</span></li>
                    </ul>
                </div><!-- /.bottom content -->
            </div><!-- /.flight-box -->
        </div><!-- /.col-lg-12 -->
       <div class="col-lg-12 col-md-6">
            <div class="flight-list-box rt-mb-30">
                <div
                    class="top-content d-flex flex-lg-row flex-column align-items-lg-center justify-content-left  justify-content-lg-between">
                    <div class="flight-logo">
                        <img src="{{asset('public/assets/frontend/images/all-img/flt-logo-2.png')}}" alt="flt logo" draggable="false">
                    </div><!-- /.flight-logo -->
                    <div class="pricing">
                        <h5>Scoot</h5>
                        <p>TR978 | Airbus A320-212</p>
                    </div><!-- /.pricing -->
                    <div class="flight-time d-flex justify-content-between align-items-lg-center">
                        <div class="left">
                            <span class="d-block">10:55</span>
                            <span class="d-block">HKG T2</span>
                        </div><!-- /.left -->
                        <div class="middle">
                            <img src="{{asset('public/assets/frontend/images/all-img/time-shape-line.png')}}" alt="time shape" draggable="false">
                        </div><!-- /.middle -->
                        <div class="right">
                            <span class="d-block">15.00</span>
                            <span class="d-block">SIN T2</span>
                        </div><!-- /.rght -->
                    </div><!-- /.flight-time -->
                    <div class="flight-detils">
                        <span class="d-block"><i class="icofont-clock-time"></i><!-- /.time -->4h5m</span>
                        <span class="d-block"><a href="#collapseExample6" class="flt-d-clic" data-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="collapseExample6">Flight details <i
                                    class="icofont-simple-down"></i></a></span>
                    </div><!-- /.flight-detils -->
                    <div class="trip">
                        <span class="d-blok">$610</span>
                        <span class="d-block">Roundtrip</span>
                    </div><!-- /.trip -->
                    <div class="book-now">
                        <a href="flight-details.html" class="rt-btn  pill rt-gradient text-uppercase">Book</a>
                    </div><!-- /.book-now -->
                </div><!-- /.top-content -->
                <div class="collapse bottom-content" id="collapseExample6">
                    <p><span>Scoot - TR979 | Airbus A320 | Economy</span> <span><i class="icofont-clock-time"></i>4h5m</span></p>
                    <ul class="flight-timeline">
            
                        <li>
                            <span>Nov 12 10:55</span>
            
                        </li>
                        <li><span>HKG - Hong Kong Hong Kong International Airport T2</span></li>
                        <li>
                            <span>Nov 12 15:00</span>
            
                        </li>
                        <li><span>SIN - Singapore Changi Airport T2</span></li>
                    </ul>
                </div><!-- /.bottom content -->
            </div><!-- /.flight-box -->
       </div><!-- /.col-lg-12 -->
        <div class="col-lg-12 col-md-6">
            <div class="flight-list-box rt-mb-30">
                <div
                    class="top-content d-flex flex-lg-row flex-column align-items-lg-center justify-content-left  justify-content-lg-between">
                    <div class="flight-logo">
                        <img src="{{asset('public/assets/frontend/images/all-img/flt-logo-1.png')}}" alt="flt logo" draggable="false">
                    </div><!-- /.flight-logo -->
                    <div class="pricing">
                        <h5>Scoot</h5>
                        <p>TR978 | Airbus A320-212</p>
                    </div><!-- /.pricing -->
                    <div class="flight-time d-flex justify-content-between align-items-lg-center">
                        <div class="left">
                            <span class="d-block">10:55</span>
                            <span class="d-block">HKG T2</span>
                        </div><!-- /.left -->
                        <div class="middle">
                            <img src="{{asset('public/assets/frontend/images/all-img/time-shape-line.png')}}" alt="time shape" draggable="false">
                        </div><!-- /.middle -->
                        <div class="right">
                            <span class="d-block">15.00</span>
                            <span class="d-block">SIN T2</span>
                        </div><!-- /.rght -->
                    </div><!-- /.flight-time -->
                    <div class="flight-detils">
                        <span class="d-block"><i class="icofont-clock-time"></i><!-- /.time -->4h5m</span>
                        <span class="d-block"><a href="#collapseExample7" class="flt-d-clic" data-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="collapseExample7">Flight details <i
                                    class="icofont-simple-down"></i></a></span>
                    </div><!-- /.flight-detils -->
                    <div class="trip">
                        <span class="d-blok">$610</span>
                        <span class="d-block">Roundtrip</span>
                    </div><!-- /.trip -->
                    <div class="book-now">
                        <a href="flight-details.html" class="rt-btn  pill rt-gradient text-uppercase">Book</a>
                    </div><!-- /.book-now -->
                </div><!-- /.top-content -->
                <div class="collapse bottom-content" id="collapseExample7">
                    <p><span>Scoot - TR979 | Airbus A320 | Economy</span> <span><i class="icofont-clock-time"></i>4h5m</span></p>
                    <ul class="flight-timeline">
            
                        <li>
                            <span>Nov 12 10:55</span>
            
                        </li>
                        <li><span>HKG - Hong Kong Hong Kong International Airport T2</span></li>
                        <li>
                            <span>Nov 12 15:00</span>
            
                        </li>
                        <li><span>SIN - Singapore Changi Airport T2</span></li>
                    </ul>
                </div><!-- /.bottom content -->
            </div><!-- /.flight-box -->
        </div><!-- /.col-lg-6 -->
        <div class="col-lg-12 col-md-6">
            <div class="flight-list-box rt-mb-30">
                <div
                    class="top-content d-flex flex-lg-row flex-column align-items-lg-center justify-content-left  justify-content-lg-between">
                    <div class="flight-logo">
                        <img src="{{asset('public/assets/frontend/images/all-img/flt-logo-2.png')}}" alt="flt logo" draggable="false">
                    </div><!-- /.flight-logo -->
                    <div class="pricing">
                        <h5>Scoot</h5>
                        <p>TR978 | Airbus A320-212</p>
                    </div><!-- /.pricing -->
                    <div class="flight-time d-flex justify-content-between align-items-lg-center">
                        <div class="left">
                            <span class="d-block">10:55</span>
                            <span class="d-block">HKG T2</span>
                        </div><!-- /.left -->
                        <div class="middle">
                            <img src="{{asset('public/assets/frontend/images/all-img/time-shape-line.png')}}" alt="time shape" draggable="false">
                        </div><!-- /.middle -->
                        <div class="right">
                            <span class="d-block">15.00</span>
                            <span class="d-block">SIN T2</span>
                        </div><!-- /.rght -->
                    </div><!-- /.flight-time -->
                    <div class="flight-detils">
                        <span class="d-block"><i class="icofont-clock-time"></i><!-- /.time -->4h5m</span>
                        <span class="d-block"><a href="#collapseExample8" class="flt-d-clic" data-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="collapseExample8">Flight details <i
                                    class="icofont-simple-down"></i></a></span>
                    </div><!-- /.flight-detils -->
                    <div class="trip">
                        <span class="d-blok">$610</span>
                        <span class="d-block">Roundtrip</span>
                    </div><!-- /.trip -->
                    <div class="book-now">
                        <a href="flight-details.html" class="rt-btn  pill rt-gradient text-uppercase">Book</a>
                    </div><!-- /.book-now -->
                </div><!-- /.top-content -->
                <div class="collapse bottom-content" id="collapseExample8">
                    <p><span>Scoot - TR979 | Airbus A320 | Economy</span> <span><i class="icofont-clock-time"></i>4h5m</span></p>
                    <ul class="flight-timeline">
            
                        <li>
                            <span>Nov 12 10:55</span>
            
                        </li>
                        <li><span>HKG - Hong Kong Hong Kong International Airport T2</span></li>
                        <li>
                            <span>Nov 12 15:00</span>
            
                        </li>
                        <li><span>SIN - Singapore Changi Airport T2</span></li>
                    </ul>
                </div><!-- /.bottom content -->
            </div><!-- /.flight-box -->
        </div><!-- /.col-lg-12 -->
        <div class="col-lg-12 col-md-6">
            <div class="flight-list-box rt-mb-30">
                <div
                    class="top-content d-flex flex-lg-row flex-column align-items-lg-center justify-content-left  justify-content-lg-between">
                    <div class="flight-logo">
                        <img src="{{asset('public/assets/frontend/images/all-img/flt-logo-1.png')}}" alt="flt logo" draggable="false">
                    </div><!-- /.flight-logo -->
                    <div class="pricing">
                        <h5>Scoot</h5>
                        <p>TR978 | Airbus A320-212</p>
                    </div><!-- /.pricing -->
                    <div class="flight-time d-flex justify-content-between align-items-lg-center">
                        <div class="left">
                            <span class="d-block">10:55</span>
                            <span class="d-block">HKG T2</span>
                        </div><!-- /.left -->
                        <div class="middle">
                            <img src="{{asset('public/assets/frontend/images/all-img/time-shape-line.png')}}" alt="time shape" draggable="false">
                        </div><!-- /.middle -->
                        <div class="right">
                            <span class="d-block">15.00</span>
                            <span class="d-block">SIN T2</span>
                        </div><!-- /.rght -->
                    </div><!-- /.flight-time -->
                    <div class="flight-detils">
                        <span class="d-block"><i class="icofont-clock-time"></i><!-- /.time -->4h5m</span>
                        <span class="d-block"><a href="#collapseExample9" class="flt-d-clic" data-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="collapseExample9">Flight details <i
                                    class="icofont-simple-down"></i></a></span>
                    </div><!-- /.flight-detils -->
                    <div class="trip">
                        <span class="d-blok">$610</span>
                        <span class="d-block">Roundtrip</span>
                    </div><!-- /.trip -->
                    <div class="book-now">
                        <a href="flight-details.html" class="rt-btn  pill rt-gradient text-uppercase">Book</a>
                    </div><!-- /.book-now -->
                </div><!-- /.top-content -->
                <div class="collapse bottom-content" id="collapseExample9">
                    <p><span>Scoot - TR979 | Airbus A320 | Economy</span> <span><i class="icofont-clock-time"></i>4h5m</span></p>
                    <ul class="flight-timeline">
            
                        <li>
                            <span>Nov 12 10:55</span>
            
                        </li>
                        <li><span>HKG - Hong Kong Hong Kong International Airport T2</span></li>
                        <li>
                            <span>Nov 12 15:00</span>
            
                        </li>
                        <li><span>SIN - Singapore Changi Airport T2</span></li>
                    </ul>
                </div><!-- /.bottom content -->
            </div><!-- /.flight-box -->
        </div><!-- /.col-lg-12 -->
        <div class="col-lg-12 col-md-6">
            <div class="flight-list-box rt-mb-30">
                <div
                    class="top-content d-flex flex-lg-row flex-column align-items-lg-center justify-content-left  justify-content-lg-between">
                    <div class="flight-logo">
                        <img src="{{asset('public/assets/frontend/images/all-img/flt-logo-2.png')}}" alt="flt logo" draggable="false">
                    </div><!-- /.flight-logo -->
                    <div class="pricing">
                        <h5>Scoot</h5>
                        <p>TR978 | Airbus A320-212</p>
                    </div><!-- /.pricing -->
                    <div class="flight-time d-flex justify-content-between align-items-lg-center">
                        <div class="left">
                            <span class="d-block">10:55</span>
                            <span class="d-block">HKG T2</span>
                        </div><!-- /.left -->
                        <div class="middle">
                            <img src="{{asset('public/assets/frontend/images/all-img/time-shape-line.png')}}" alt="time shape" draggable="false">
                        </div><!-- /.middle -->
                        <div class="right">
                            <span class="d-block">15.00</span>
                            <span class="d-block">SIN T2</span>
                        </div><!-- /.rght -->
                    </div><!-- /.flight-time -->
                    <div class="flight-detils">
                        <span class="d-block"><i class="icofont-clock-time"></i><!-- /.time -->4h5m</span>
                        <span class="d-block"><a href="#collapseExample10" class="flt-d-clic" data-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="collapseExample10">Flight details <i
                                    class="icofont-simple-down"></i></a></span>
                    </div><!-- /.flight-detils -->
                    <div class="trip">
                        <span class="d-blok">$610</span>
                        <span class="d-block">Roundtrip</span>
                    </div><!-- /.trip -->
                    <div class="book-now">
                        <a href="flight-details.html" class="rt-btn  pill rt-gradient text-uppercase">Book</a>
                    </div><!-- /.book-now -->
                </div><!-- /.top-content -->
                <div class="collapse bottom-content" id="collapseExample10">
                    <p><span>Scoot - TR979 | Airbus A320 | Economy</span> <span><i class="icofont-clock-time"></i>4h5m</span></p>
                    <ul class="flight-timeline">
            
                        <li>
                            <span>Nov 12 10:55</span>
            
                        </li>
                        <li><span>HKG - Hong Kong Hong Kong International Airport T2</span></li>
                        <li>
                            <span>Nov 12 15:00</span>
            
                        </li>
                        <li><span>SIN - Singapore Changi Airport T2</span></li>
                    </ul>
                </div><!-- /.bottom content -->
            </div><!-- /.flight-box -->
        </div><!-- /.col-lg-12 -->
        <div class="col-lg-12 col-md-6">
            <div class="flight-list-box rt-mb-30">
                <div
                    class="top-content d-flex flex-lg-row flex-column align-items-lg-center justify-content-left  justify-content-lg-between">
                    <div class="flight-logo">
                        <img src="{{asset('public/assets/frontend/images/all-img/flt-logo-1.png')}}" alt="flt logo" draggable="false">
                    </div><!-- /.flight-logo -->
                    <div class="pricing">
                        <h5>Scoot</h5>
                        <p>TR978 | Airbus A320-212</p>
                    </div><!-- /.pricing -->
                    <div class="flight-time d-flex justify-content-between align-items-lg-center">
                        <div class="left">
                            <span class="d-block">10:55</span>
                            <span class="d-block">HKG T2</span>
                        </div><!-- /.left -->
                        <div class="middle">
                            <img src="{{asset('public/assets/frontend/images/all-img/time-shape-line.png')}}" alt="time shape" draggable="false">
                        </div><!-- /.middle -->
                        <div class="right">
                            <span class="d-block">15.00</span>
                            <span class="d-block">SIN T2</span>
                        </div><!-- /.rght -->
                    </div><!-- /.flight-time -->
                    <div class="flight-detils">
                        <span class="d-block"><i class="icofont-clock-time"></i><!-- /.time -->4h5m</span>
                        <span class="d-block"><a href="#collapseExample11" class="flt-d-clic" data-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="collapseExample11">Flight details <i
                                    class="icofont-simple-down"></i></a></span>
                    </div><!-- /.flight-detils -->
                    <div class="trip">
                        <span class="d-blok">$610</span>
                        <span class="d-block">Roundtrip</span>
                    </div><!-- /.trip -->
                    <div class="book-now">
                        <a href="flight-details.html" class="rt-btn  pill rt-gradient text-uppercase">Book</a>
                    </div><!-- /.book-now -->
                </div><!-- /.top-content -->
                <div class="collapse bottom-content" id="collapseExample11">
                    <p><span>Scoot - TR979 | Airbus A320 | Economy</span> <span><i class="icofont-clock-time"></i>4h5m</span></p>
                    <ul class="flight-timeline">
            
                        <li>
                            <span>Nov 12 10:55</span>
            
                        </li>
                        <li><span>HKG - Hong Kong Hong Kong International Airport T2</span></li>
                        <li>
                            <span>Nov 12 15:00</span>
            
                        </li>
                        <li><span>SIN - Singapore Changi Airport T2</span></li>
                    </ul>
                </div><!-- /.bottom content -->
            </div><!-- /.flight-box -->
        </div><!-- /.col-lg-12 -->
        <div class="col-lg-12 col-md-6">
            <div class="flight-list-box rt-mb-30">
                <div
                    class="top-content d-flex flex-lg-row flex-column align-items-lg-center justify-content-left  justify-content-lg-between">
                    <div class="flight-logo">
                        <img src="{{asset('public/assets/frontend/images/all-img/flt-logo-2.png')}}" alt="flt logo" draggable="false">
                    </div><!-- /.flight-logo -->
                    <div class="pricing">
                        <h5>Scoot</h5>
                        <p>TR978 | Airbus A320-212</p>
                    </div><!-- /.pricing -->
                    <div class="flight-time d-flex justify-content-between align-items-lg-center">
                        <div class="left">
                            <span class="d-block">10:55</span>
                            <span class="d-block">HKG T2</span>
                        </div><!-- /.left -->
                        <div class="middle">
                            <img src="{{asset('public/assets/frontend/images/all-img/time-shape-line.png')}}" alt="time shape" draggable="false">
                        </div><!-- /.middle -->
                        <div class="right">
                            <span class="d-block">15.00</span>
                            <span class="d-block">SIN T2</span>
                        </div><!-- /.rght -->
                    </div><!-- /.flight-time -->
                    <div class="flight-detils">
                        <span class="d-block"><i class="icofont-clock-time"></i><!-- /.time -->4h5m</span>
                        <span class="d-block"><a href="#collapseExample12" class="flt-d-clic" data-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="collapseExample12">Flight details <i
                                    class="icofont-simple-down"></i></a></span>
                    </div><!-- /.flight-detils -->
                    <div class="trip">
                        <span class="d-blok">$610</span>
                        <span class="d-block">Roundtrip</span>
                    </div><!-- /.trip -->
                    <div class="book-now">
                        <a href="flight-details.html" class="rt-btn  pill rt-gradient text-uppercase">Book</a>
                    </div><!-- /.book-now -->
                </div><!-- /.top-content -->
                <div class="collapse bottom-content" id="collapseExample12">
                    <p><span>Scoot - TR979 | Airbus A320 | Economy</span> <span><i class="icofont-clock-time"></i>4h5m</span></p>
                    <ul class="flight-timeline">
            
                        <li>
                            <span>Nov 12 10:55</span>
            
                        </li>
                        <li><span>HKG - Hong Kong Hong Kong International Airport T2</span></li>
                        <li>
                            <span>Nov 12 15:00</span>
            
                        </li>
                        <li><span>SIN - Singapore Changi Airport T2</span></li>
                    </ul>
                </div><!-- /.bottom content -->
            </div><!-- /.flight-box -->
        </div><!-- /.col-lg-12 -->
        <div class="col-lg-12 col-md-6">
            <div class="flight-list-box rt-mb-30">
                <div
                    class="top-content d-flex flex-lg-row flex-column align-items-lg-center justify-content-left  justify-content-lg-between">
                    <div class="flight-logo">
                        <img src="{{asset('public/assets/frontend/images/all-img/flt-logo-2.png')}}" alt="flt logo" draggable="false">
                    </div><!-- /.flight-logo -->
                    <div class="pricing">
                        <h5>Scoot</h5>
                        <p>TR978 | Airbus A320-212</p>
                    </div><!-- /.pricing -->
                    <div class="flight-time d-flex justify-content-between align-items-lg-center">
                        <div class="left">
                            <span class="d-block">10:55</span>
                            <span class="d-block">HKG T2</span>
                        </div><!-- /.left -->
                        <div class="middle">
                            <img src="{{asset('public/assets/frontend/images/all-img/time-shape-line.png')}}" alt="time shape" draggable="false">
                        </div><!-- /.middle -->
                        <div class="right">
                            <span class="d-block">15.00</span>
                            <span class="d-block">SIN T2</span>
                        </div><!-- /.rght -->
                    </div><!-- /.flight-time -->
                    <div class="flight-detils">
                        <span class="d-block"><i class="icofont-clock-time"></i><!-- /.time -->4h5m</span>
                        <span class="d-block"><a href="#collapseExample13" class="flt-d-clic" data-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="collapseExample13">Flight details <i
                                    class="icofont-simple-down"></i></a></span>
                    </div><!-- /.flight-detils -->
                    <div class="trip">
                        <span class="d-blok">$610</span>
                        <span class="d-block">Roundtrip</span>
                    </div><!-- /.trip -->
                    <div class="book-now">
                        <a href="flight-details.html" class="rt-btn  pill rt-gradient text-uppercase">Book</a>
                    </div><!-- /.book-now -->
                </div><!-- /.top-content -->
                <div class="collapse bottom-content" id="collapseExample13">
                    <p><span>Scoot - TR979 | Airbus A320 | Economy</span> <span><i class="icofont-clock-time"></i>4h5m</span></p>
                    <ul class="flight-timeline">
            
                        <li>
                            <span>Nov 12 10:55</span>
            
                        </li>
                        <li><span>HKG - Hong Kong Hong Kong International Airport T2</span></li>
                        <li>
                            <span>Nov 12 15:00</span>
            
                        </li>
                        <li><span>SIN - Singapore Changi Airport T2</span></li>
                    </ul>
                </div><!-- /.bottom content -->
            </div><!-- /.flight-box -->
        </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
                <nav aria-label="Page navigation example">
    <ul class="pagination  rt-paganation justify-content-center">
        <li class="page-item"><a class="page-link" href="#"><i class="icofont-rounded-double-left"></i></a>
        </li>
        <li class="page-item active"><a class="page-link" href="#">01</a></li>
        <li class="page-item"><a class="page-link" href="#">02</a></li>
        <li class="page-item"><a class="page-link" href="#">03</a></li>
        <li class="page-item"><a class="page-link" href="#"><i class="icofont-rounded-double-right"></i></a>
        </li>
    </ul>
</nav>
            </div><!-- /.col-lg-9 -->
        </div><!-- /.row -->
    </div>
    <div class="tab-pane show active fade-in-bottom" id="rt-item_b_second" role="tabpanel" aria-labelledby="rt-item_b_second">
        <div class="row">
            <div class="col-xl-3 mx-auto col-lg-3 col-md-6">
                <div class="rt-sidebar-group">
</div><!-- /.rt-sidebar-group -->
            </div><!-- /.col-lg-3 -->
            <div class="col-xl-12 col-lg-12 mt-5 mt-lg-0">
                @if(count($records)>0)
                @foreach($records as $key => $product)
                <div class="box-style__1 rt-mb-30">
                    <div class="hotel-inner-content row">
                        <div class="hotel-thumb col-md-3 mb-4 mb-md-0">
                           <div class="hotel-bg rtbgprefix-cover" style="background-image: url({!!$product->getFirstImage()!!});background-size: cover;"></div>
                        </div><!-- /.hotel-thumb -->
                        <div class="hotel-text col-md-9">
                            <div class="top mb-4 mb-md-0">
                                <h5><a href="{!! route('product.detail',['alias' => $product->alias])!!}">{!!$product->title!!}</a><span>
                                  @for($i=0;$i<$product->rating;$i++) 
                                  <i class="icofont-star review"></i>
                                  @endfor
                                  @for($i=0;$i<5-($product->rating);$i++) 
                                  <i class="icofont-star"></i>
                                  @endfor
                                </span></h5>
                                @foreach ($province as $item)
                                @foreach ($district as $di)
                                <p>
                                    {{$item->title}}
                                 <span>| {{$di->title}}</span>
                                 <span>| {{$product->meta_title}}</span></p>
                                @endforeach
                                @endforeach
                            </div><!-- /.top -->
                            <div class="middle-text d-md-flex justify-content-md-between mb-4 mb-md-0">
                                <div class="left">
                                    <span>( {{$num_review}}) Reviews</span>
                                </div><!-- /.left- -->
                                <div class="right text-left text-md-right mt-4 mt-md-0">
                                </div><!-- /.right -->
                            </div><!-- /.middle-text -->
                            <div class="footer-elements d-flex justify-content-md-between align-items-center">
                                <div class="left">
                                    <span data-tippy="wifi"><img src="{{asset('public/assets/frontend/images/all-img/hottel-cion-1.png')}}" alt="hotel iamge"  draggable="false"></span>
                                    <span data-tippy="dumble"><img src="{{asset('public/assets/frontend/images/all-img/hottel-cion-2.png')}}" alt="hotel iamge"  draggable="false"></span>
                                    <span data-tippy="resturent"><img src="{{asset('public/assets/frontend/images/all-img/hottel-cion-3.png')}}" alt="hotel iamge"  draggable="false"></span>
                                    <span data-tippy="sofa"><img src="{{asset('public/assets/frontend/images/all-img/hottel-cion-4.png')}}" alt="hotel iamge"  draggable="false"></span>
                                    <span data-tippy="watter"><img src="{{asset('public/assets/frontend/images/all-img/hottel-cion-5.png')}}" alt="hotel iamge"  draggable="false"></span>
                                    <span data-tippy="music"><img src="{{asset('public/assets/frontend/images/all-img/hottel-cion-6.png')}}" alt="hotel iamge"  draggable="false"></span>
                                    <span data-tippy="crolstve"><img src="{{asset('public/assets/frontend/images/all-img/hottel-cion-7.png')}}" alt="hotel iamge"  draggable="false"></span>
                                    <span data-tippy="doller"><img src="{{asset('public/assets/frontend/images/all-img/hottel-cion-8.png')}}" alt="hotel iamge"  draggable="false"></span>
                                    <span data-tippy="time"><img src="{{asset('public/assets/frontend/images/all-img/hottel-cion-9.png')}}" alt="hotel iamge"  draggable="false"></span>
                                </div><!-- /.left -->
                                <div class="right">
                                    <a href="{!! route('product.detail',['alias' => $product->alias])!!}" class="rt-btn rt-gradient pill rt-sm2 text-uppercase">View Details</a>
                                </div><!-- /.right -->
                            </div><!-- /.footer-elements -->
                        </div><!-- /.hotel-text -->
                    </div><!-- /.hotel-inner-content -->
                </div><!-- /.hotel-list-box -->
                @endforeach
                @endif
                <!-- <div class="box-style__1 rt-mb-30">
                    <div class="hotel-inner-content row">
                        <div class="hotel-thumb col-md-3 mb-4 mb-md-0">
                           <div class="hotel-bg rtbgprefix-cover" style="background-image: url({{asset('public/assets/frontend/images/all-img/hotel-1.jpg')}})">
                                <div class="inner-icon">
                                    <i class="icofont-gift"></i>
                                </div>
                            </div>
                        </div>
                        <div class="hotel-text col-md-9">
                            <div class="top mb-4 mb-md-0">
                                <h5>The Royal Pacific Hotel and Towers <span> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star review"></i><i class="icofont-star review"></i> <i class="icofont-star"></i></span></h5>
                                <p>Times Square | 4.8 km from downtown <span>| Near the subway</span></p>
                            </div>
                            <div class="middle-text d-md-flex justify-content-md-between mb-4 mb-md-0">
                                <div class="left">
                                    <span class="badge rt-gradinet-badge pill">4.3 <small>/5</small></span>
                                    <span>Excellent</span>
                                    <span>( 86 Reviews )</span>
                                    <div>
                                        <a href="#">Free Cancellation</a>
                                    </div>
                                </div>
                                <div class="right text-left text-md-right mt-4 mt-md-0">
                                    <span class="d-block">From USD</span>
                                    <span class="d-block">$364</span>
                                </div>
                            </div>
                            <div class="footer-elements d-flex justify-content-md-between align-items-center">
                                <div class="left">
                                    <span data-tippy="wifi"><img src="{{asset('public/assets/frontend/images/all-img/hottel-cion-1.png')}}" alt="hotel iamge"  draggable="false"></span>
                                    <span data-tippy="dumble"><img src="{{asset('public/assets/frontend/images/all-img/hottel-cion-2.png')}}" alt="hotel iamge"  draggable="false"></span>
                                    <span data-tippy="resturent"><img src="{{asset('public/assets/frontend/images/all-img/hottel-cion-3.png')}}" alt="hotel iamge"  draggable="false"></span>
                                    <span data-tippy="sofa"><img src="{{asset('public/assets/frontend/images/all-img/hottel-cion-4.png')}}" alt="hotel iamge"  draggable="false"></span>
                                    <span data-tippy="watter"><img src="{{asset('public/assets/frontend/images/all-img/hottel-cion-5.png')}}" alt="hotel iamge"  draggable="false"></span>
                                    <span data-tippy="music"><img src="{{asset('public/assets/frontend/images/all-img/hottel-cion-6.png')}}" alt="hotel iamge"  draggable="false"></span>
                                    <span data-tippy="crolstve"><img src="{{asset('public/assets/frontend/images/all-img/hottel-cion-7.png')}}" alt="hotel iamge"  draggable="false"></span>
                                    <span data-tippy="doller"><img src="{{asset('public/assets/frontend/images/all-img/hottel-cion-8.png')}}" alt="hotel iamge"  draggable="false"></span>
                                    <span data-tippy="time"><img src="{{asset('public/assets/frontend/images/all-img/hottel-cion-9.png')}}" alt="hotel iamge"  draggable="false"></span>
                                </div>
                                <div class="right">
                                    <a href="hotel-3.html" class="rt-btn rt-gradient pill rt-sm2 text-uppercase">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                
                <nav aria-label="Page navigation example">
    <ul class="pagination  rt-paganation justify-content-center">

        </li>
            {{$records->appends(Request::all())->links()}}
        </li>
    </ul>
</nav>
            
            </div><!-- /.col-lg-9 -->
        </div><!-- /.row -->
    </div>
    <div class="tab-pane rtIncative fade-in-bottom" id="rt-item_b_thrid" role="tabpanel" aria-labelledby="rt-item_b_thrid">
        <div class="row">
            <div class="col-lg-3 mx-auto col-md-7 mb-5 mb-lg-0">
                <div class="rt-sidebar-group">
    <div class="rt-widget widget_rating">
        <h3 class="rt-widget-title">
            Star Rating
        </h3><!-- /.rt-widget-title -->
        <ul>
            <li class="clearfix">
    
                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="car_gridCheckrt-1xs">
                    <label class="form-check-label" for="car_gridCheckrt-1xs">
                        <span>
                            <i class="icofont-star review"></i>
                            <i class="icofont-star review"></i>
                            <i class="icofont-star review"></i>
                            <i class="icofont-star review"></i>
                            <i class="icofont-star review"></i>
    
                        </span>
                    </label>
                </div><!-- ./orm-group -->
    
            </li>
            <li class="clearfix">
    
                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="car_gridCheckrt-2xs">
                    <label class="form-check-label" for="car_gridCheckrt-2xs">
                        <span>
                            <i class="icofont-star review"></i>
                            <i class="icofont-star review"></i>
                            <i class="icofont-star review"></i>
                            <i class="icofont-star review"></i>
                        </span>
                    </label>
                </div><!-- ./orm-group -->
    
            </li>
            <li class="clearfix">
    
                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="car_gridCheckrt-2xss">
                    <label class="form-check-label" for="car_gridCheckrt-2xss">
                        <span>
                            <i class="icofont-star review"></i>
                            <i class="icofont-star review"></i>
                            <i class="icofont-star review"></i>
                        </span>
                    </label>
                </div><!-- ./orm-group -->
    
            </li>
            <li class="clearfix">
    
                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="car_gridCheckrt-2xssa">
                    <label class="form-check-label" for="car_gridCheckrt-2xssa">
                        <span>
                            <i class="icofont-star review"></i>
                            <i class="icofont-star review"></i>
                        </span>
                    </label>
                </div><!-- ./orm-group -->
    
            </li>
        </ul>
    </div><!-- /.rt-widget -->
    <div class="rt-widget widget_plane_time">
        <h3 class="rt-widget-title">
            Payment options
        </h3><!-- /.rt-widget-title -->
        <ul>
            <li class="clearfix">
    
                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="car_gridCheckrt-1w">
                    <label class="form-check-label" for="car_gridCheckrt-1w">
                        Pay now (72)
                    </label>
                </div><!-- ./orm-group -->
                <span class="float-right">$30</span>
    
            </li>
            <li class="clearfix">
    
                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="car_gridCheckrt-2w">
                    <label class="form-check-label" for="car_gridCheckrt-2w">
                        Pay later (425)
                    </label>
                </div><!-- ./orm-group -->
                <span class="float-right">$32</span>
    
            </li>
        </ul>
    </div><!-- /.rt-widget -->
    <div class="rt-widget widget_plane_time">
        <h3 class="rt-widget-title">
            Car type
        </h3><!-- /.rt-widget-title -->
        <ul>
            <li class="clearfix">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="car_gridCheckrt-1w1">
                    <label class="form-check-label" for="car_gridCheckrt-1w1">
                        Economy (42)
                    </label>
                </div><!-- ./orm-group -->
                <span class="float-right">$30</span>
            </li>
            <li class="clearfix">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="car_gridCheckrt-2w1">
                    <label class="form-check-label" for="car_gridCheckrt-2w1">
                        Compact (42) 
                    </label>
                </div><!-- ./orm-group -->
                <span class="float-right">$30</span>
            </li>
            <li class="clearfix">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="car_gridCheckrt-2car-6">
                    <label class="form-check-label" for="car_gridCheckrt-2car-6">
                        Midsize (44) 
                    </label>
                </div><!-- ./orm-group -->
                <span class="float-right">$37</span>
            </li>
            <li class="clearfix">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="car_gridCheckrt-2car-5">
                    <label class="form-check-label" for="car_gridCheckrt-2car-5">
                        Standard (44) 
                    </label>
                </div><!-- ./orm-group -->
                <span class="float-right">$37</span>
            </li>
            <li class="clearfix">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="car_gridCheckrt-2car-4">
                    <label class="form-check-label" for="car_gridCheckrt-2car-4">
                        Full-size (44) 
                    </label>
                </div><!-- ./orm-group -->
                <span class="float-right">$37</span>
            </li>
            <li class="clearfix">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="car_gridCheckrt-2car-3">
                    <label class="form-check-label" for="car_gridCheckrt-2car-3">
                        Premium (60) 
                    </label>
                </div><!-- ./orm-group -->
                <span class="float-right">$38</span>
            </li>
            <li class="clearfix">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="car_gridCheckrt-2car-2">
                    <label class="form-check-label" for="car_gridCheckrt-2car-2">
                        Luxury (28) 
                    </label>
                </div><!-- ./orm-group -->
                <span class="float-right">$59</span>
            </li>
            <li class="clearfix">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="car_gridCheckrt-2car-1">
                    <label class="form-check-label" for="car_gridCheckrt-2car-1">
                        Sports Car (11) 
                    </label>
                </div><!-- ./orm-group -->
                <span class="float-right">$250</span>
            </li>
        </ul>
    </div><!-- /.rt-widget -->
    <div class="rt-widget widget_plane_time">
        <h3 class="rt-widget-title">
            Seats
        </h3><!-- /.rt-widget-title -->
        <ul>
            <li class="clearfix">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="car_gridCheckrt-3">
                    <label class="form-check-label" for="car_gridCheckrt-3">
                    Less than 4 seats 
                    </label>
                </div><!-- ./orm-group -->
                <span class="float-right">$1,853.7</span>
            </li>
            <li class="clearfix">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="car_gridCheckrt-4">
                    <label class="form-check-label" for="car_gridCheckrt-4">
                        4-5 Seats 
                    </label>
                </div><!-- ./orm-group -->
                <span class="float-right">$25.07</span>
            </li>
            <li class="clearfix">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="car_gridCheckrt-5">
                    <label class="form-check-label" for="car_gridCheckrt-5">
                    6-7 Seats 
                    </label>
                </div><!-- ./orm-group -->
                <span class="float-right">$200.4</span>
            </li>
            <li class="clearfix">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="car_gridCheckrt-51">
                    <label class="form-check-label" for="car_gridCheckrt-51">
                        8-9 Seats 
                    </label>
                </div><!-- ./orm-group -->
                <span class="float-right">$259.03</span>
            </li>
        </ul>
     
    </div><!-- /.rt-widget -->
    <div class="rt-widget widget_plane_time">
        <h3 class="rt-widget-title">
            Mileage Allowance
        </h3><!-- /.rt-widget-title -->
        <ul>
            <li class="clearfix">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="car_gridCheckrt-11">
                    <label class="form-check-label" for="car_gridCheckrt-11">
                        Unlimited Mileage 
                    </label>
                </div><!-- ./orm-group -->
                <span class="float-right">$58.94</span>

            </li>
            <li class="clearfix">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="car_gridCheckrt-111">
                    <label class="form-check-label" for="car_gridCheckrt-111">
                    Limited Mileage 
                    </label>
                </div><!-- ./orm-group -->
                <span class="float-right">$25.07</span>

            </li>
        </ul>

    </div><!-- /.rt-widget -->
    <div class="rt-widget widget_plane_time">
        <h3 class="rt-widget-title">
            Specifications
        </h3><!-- /.rt-widget-title -->
        <ul>
            <li class="clearfix">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="car_gridCheckrt-22">
                    <label class="form-check-label" for="car_gridCheckrt-22">
                    Automatic Transmission
                    </label>
                </div><!-- ./orm-group -->

            </li>
            <li class="clearfix">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="car_gridCheckrt-222">
                    <label class="form-check-label" for="car_gridCheckrt-222">
                        Manual Transmission
                    </label>
                </div><!-- ./orm-group -->

            </li>
            <li class="clearfix">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="car_gridCheckrt-2222">
                    <label class="form-check-label" for="car_gridCheckrt-2222">
                        Air Conditioning
                    </label>
                </div><!-- ./orm-group -->

            </li>
        </ul>

    </div><!-- /.rt-widget -->
    
</div><!-- /.rt-sidebar-group -->
            </div><!-- /.col-lg-3 -->
            <div class="col-lg-9">
                        <div class="flight-list-box rt-mb-30">
            <form action="#" class="row">
                    <div class="col-lg-3 col-md-6 mb-3 mb-lg-0">
                        <button class="rt-btn pill rt-sm rt-gradient d-block">Recommended</button>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-3 col-md-6 mb-3 mb-lg-0">
                        <select class="rt-selectactive banner-select" name="from" style="width: 100%">
                            <option value="1">Price</option>
                            <option value="2">100</option>
                            <option value="3">100</option>
                            <option value="4">400</option>
                            <option value="5">500</option>
                        </select>
                    </div><!-- /.col-lg-3 -->
                    <div class="col-lg-3 rt-input-group mini col-md-6  mb-3 mb-md-0">
                        <input type="text" class="rt-date-picker form-control" placeholder="Departure Time">
                    </div><!-- /.col-lg-3 -->
                    <div class="col-lg-3 rt-input-group mini col-md-6 ">
                        <input type="text" class="form-control rt-date-picker" placeholder="Arrival Time ">
                    </div><!-- /.col-lg-3 -->
                </form>
        </div><!-- /.flight-list-box -->
        <div class="flight-list-box rt-mb-30">
            <div class="top-content d-flex flex-md-row flex-column justify-content-lg-between">
                <div class="car-thumb mr-4 mr-lg-0 mb-5 mb-md-0">
                    <img src="{{asset('public/assets/frontend/images/all-img/car-1.png')}}" alt="car image" class="rt-border-primary2">
                </div><!-- /.car-thumb -->
                <div class="economy mb-5 mb-md-0">
                    <h5 class="f-size-16 rt-medium">Economy</h5>
                    <span class="d-block f-size-13 text-555">Hyundai i10 or Similar</span>
                    <span class="d-block text-444 rt-mb-5"> <span><i class="icofont-wheelchair"></i> 4</span> <span><i class="icofont-briefcase"></i> 2</span></span>
                    <span class="badge rt-gradinet-badge pill rt-mr-10">4.3 <small>/5</small></span>
                    <span class="primary-color">Excellent</span>
                    <span class="f-size-12 text-878">( 86 Reviews )</span>
                </div><!-- /.economy -->
                <div class="ck-list">
                    <ul class="rt-list">
                        <li class="d-block">
                            <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Automatic transmission
                        </li>
                        <li class="d-block">
                            <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Unlimited mileage
                        </li>
                        <li class="d-block">
                            <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Free Cancellation
                        </li>
                        <li class="d-block">
                            <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Instant Confirmation
                        </li>
                    </ul><!-- /.rt-list -->
                </div><!-- /.ck-list -->
                <div class="price-mant text-lg-right">
                    <span class="d-block f-size-12 text-878">7 days</span>
                    <span class="d-block text-primary f-size-24 rt-semiblod title-font">$275</span>
                    <a href="car-2.html" class="rt-btn rt-gradient pill rt-sm3 text-uppercase rt-mt-10">Select</a>
                </div><!-- /.price-mant -->
            </div><!-- /.top-content -->
            <div class="bottom-content row">
                    <div class="single-discribe col-md-4">
                        <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Pick-up</h3>
                        <p class="f-size-14 line-height-24 text-555">
                            323 West 34Th Street, <br>
                            Manhattan, New York, <br>
                            USA
                        </p>
                        <p class="f-size-14 line-height-24 text-555 rt-mb-0">
                            0.51 mi from New <br>
                            York city center
                        </p>
                    </div><!-- /.single-discribe -->
                    <div class="single-discribe col-md-4">
                        <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Drop-off</h3>
                        <p class="f-size-14 line-height-24 text-555">
                            323 West 34Th Street, <br>
                            Manhattan, New York, <br>
                            USA
                        </p>
                        <p class="f-size-14 line-height-24 text-555 rt-mb-0">
                            0.51 mi from New <br>
                            York city center
                        </p>
                    </div><!-- /.single-discribe -->
                    <div class="single-discribe col-md-4">
                        <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Included for Free</h3>
                        <ul class="rt-list">
                            <li class="d-block">
                                <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Automatic transmission
                            </li>
                            <li class="d-block">
                                <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Theft Protection
                            </li>
                            <li class="d-block">
                                <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Third Party Liability
                            </li>
                           
                        </ul><!-- /.rt-list -->
                    </div><!-- /.single-discribe -->
            </div><!-- /.bottom-content -->
        </div><!-- /.flight-box -->
        <div class="flight-list-box rt-mb-30">
            <div class="top-content d-flex flex-md-row flex-column justify-content-lg-between">
                <div class="car-thumb mr-4 mr-lg-0 mb-5 mb-md-0">
                    <img src="{{asset('public/assets/frontend/images/all-img/car-2.png')}}" alt="car image" class="rt-border-primary2">
                </div><!-- /.car-thumb -->
                <div class="economy mb-5 mb-md-0">
                    <h5 class="f-size-16 rt-medium">Economy</h5>
                    <span class="d-block f-size-13 text-555">Hyundai i10 or Similar</span>
                    <span class="d-block text-444 rt-mb-5"> <span><i class="icofont-wheelchair"></i> 4</span> <span><i class="icofont-briefcase"></i> 2</span></span>
                    <span class="badge rt-gradinet-badge pill rt-mr-10">4.3 <small>/5</small></span>
                    <span class="primary-color">Excellent</span>
                    <span class="f-size-12 text-878">( 86 Reviews )</span>
                </div><!-- /.economy -->
                <div class="ck-list">
                    <ul class="rt-list">
                        <li class="d-block">
                            <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Automatic transmission
                        </li>
                        <li class="d-block">
                            <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Unlimited mileage
                        </li>
                        <li class="d-block">
                            <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Free Cancellation
                        </li>
                        <li class="d-block">
                            <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Instant Confirmation
                        </li>
                    </ul><!-- /.rt-list -->
                </div><!-- /.ck-list -->
                <div class="price-mant text-lg-right">
                    <span class="d-block f-size-12 text-878">7 days</span>
                    <span class="d-block text-primary f-size-24 rt-semiblod title-font">$275</span>
                    <a href="car-2.html" class="rt-btn rt-gradient pill rt-sm3 text-uppercase rt-mt-10">Select</a>
                </div><!-- /.price-mant -->
            </div><!-- /.top-content -->
            <div class="bottom-content row">
                    <div class="single-discribe col-md-4">
                        <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Pick-up</h3>
                        <p class="f-size-14 line-height-24 text-555">
                            323 West 34Th Street, <br>
                            Manhattan, New York, <br>
                            USA
                        </p>
                        <p class="f-size-14 line-height-24 text-555 rt-mb-0">
                            0.51 mi from New <br>
                            York city center
                        </p>
                    </div><!-- /.single-discribe -->
                    <div class="single-discribe col-md-4">
                        <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Drop-off</h3>
                        <p class="f-size-14 line-height-24 text-555">
                            323 West 34Th Street, <br>
                            Manhattan, New York, <br>
                            USA
                        </p>
                        <p class="f-size-14 line-height-24 text-555 rt-mb-0">
                            0.51 mi from New <br>
                            York city center
                        </p>
                    </div><!-- /.single-discribe -->
                    <div class="single-discribe col-md-4">
                        <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Included for Free</h3>
                        <ul class="rt-list">
                            <li class="d-block">
                                <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Automatic transmission
                            </li>
                            <li class="d-block">
                                <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Theft Protection
                            </li>
                            <li class="d-block">
                                <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Third Party Liability
                            </li>
                           
                        </ul><!-- /.rt-list -->
                    </div><!-- /.single-discribe -->
            </div><!-- /.bottom-content -->
        </div><!-- /.flight-box -->
        <div class="flight-list-box rt-mb-30">
            <div class="top-content d-flex flex-md-row flex-column justify-content-lg-between">
                <div class="car-thumb mr-4 mr-lg-0 mb-5 mb-md-0">
                    <img src="{{asset('public/assets/frontend/images/all-img/car-3.png')}}" alt="car image" class="rt-border-primary2">
                </div><!-- /.car-thumb -->
                <div class="economy mb-5 mb-md-0">
                    <h5 class="f-size-16 rt-medium">Economy</h5>
                    <span class="d-block f-size-13 text-555">Hyundai i10 or Similar</span>
                    <span class="d-block text-444 rt-mb-5"> <span><i class="icofont-wheelchair"></i> 4</span> <span><i class="icofont-briefcase"></i> 2</span></span>
                    <span class="badge rt-gradinet-badge pill rt-mr-10">4.3 <small>/5</small></span>
                    <span class="primary-color">Excellent</span>
                    <span class="f-size-12 text-878">( 86 Reviews )</span>
                </div><!-- /.economy -->
                <div class="ck-list">
                    <ul class="rt-list">
                        <li class="d-block">
                            <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Automatic transmission
                        </li>
                        <li class="d-block">
                            <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Unlimited mileage
                        </li>
                        <li class="d-block">
                            <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Free Cancellation
                        </li>
                        <li class="d-block">
                            <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Instant Confirmation
                        </li>
                    </ul><!-- /.rt-list -->
                </div><!-- /.ck-list -->
                <div class="price-mant text-lg-right">
                    <span class="d-block f-size-12 text-878">7 days</span>
                    <span class="d-block text-primary f-size-24 rt-semiblod title-font">$275</span>
                    <a href="car-2.html" class="rt-btn rt-gradient pill rt-sm3 text-uppercase rt-mt-10">Select</a>
                </div><!-- /.price-mant -->
            </div><!-- /.top-content -->
            <div class="bottom-content row">
                    <div class="single-discribe col-md-4">
                        <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Pick-up</h3>
                        <p class="f-size-14 line-height-24 text-555">
                            323 West 34Th Street, <br>
                            Manhattan, New York, <br>
                            USA
                        </p>
                        <p class="f-size-14 line-height-24 text-555 rt-mb-0">
                            0.51 mi from New <br>
                            York city center
                        </p>
                    </div><!-- /.single-discribe -->
                    <div class="single-discribe col-md-4">
                        <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Drop-off</h3>
                        <p class="f-size-14 line-height-24 text-555">
                            323 West 34Th Street, <br>
                            Manhattan, New York, <br>
                            USA
                        </p>
                        <p class="f-size-14 line-height-24 text-555 rt-mb-0">
                            0.51 mi from New <br>
                            York city center
                        </p>
                    </div><!-- /.single-discribe -->
                    <div class="single-discribe col-md-4">
                        <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Included for Free</h3>
                        <ul class="rt-list">
                            <li class="d-block">
                                <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Automatic transmission
                            </li>
                            <li class="d-block">
                                <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Theft Protection
                            </li>
                            <li class="d-block">
                                <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Third Party Liability
                            </li>
                           
                        </ul><!-- /.rt-list -->
                    </div><!-- /.single-discribe -->
            </div><!-- /.bottom-content -->
        </div><!-- /.flight-box -->
        <div class="flight-list-box rt-mb-30">
            <div class="top-content d-flex flex-md-row flex-column justify-content-lg-between">
                <div class="car-thumb mr-4 mr-lg-0 mb-5 mb-md-0">
                    <img src="{{asset('public/assets/frontend/images/all-img/car-4.png')}}" alt="car image" class="rt-border-primary2">
                </div><!-- /.car-thumb -->
                <div class="economy mb-5 mb-md-0">
                    <h5 class="f-size-16 rt-medium">Economy</h5>
                    <span class="d-block f-size-13 text-555">Hyundai i10 or Similar</span>
                    <span class="d-block text-444 rt-mb-5"> <span><i class="icofont-wheelchair"></i> 4</span> <span><i class="icofont-briefcase"></i> 2</span></span>
                    <span class="badge rt-gradinet-badge pill rt-mr-10">4.3 <small>/5</small></span>
                    <span class="primary-color">Excellent</span>
                    <span class="f-size-12 text-878">( 86 Reviews )</span>
                </div><!-- /.economy -->
                <div class="ck-list">
                    <ul class="rt-list">
                        <li class="d-block">
                            <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Automatic transmission
                        </li>
                        <li class="d-block">
                            <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Unlimited mileage
                        </li>
                        <li class="d-block">
                            <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Free Cancellation
                        </li>
                        <li class="d-block">
                            <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Instant Confirmation
                        </li>
                    </ul><!-- /.rt-list -->
                </div><!-- /.ck-list -->
                <div class="price-mant text-lg-right">
                    <span class="d-block f-size-12 text-878">7 days</span>
                    <span class="d-block text-primary f-size-24 rt-semiblod title-font">$275</span>
                    <a href="car-2.html" class="rt-btn rt-gradient pill rt-sm3 text-uppercase rt-mt-10">Select</a>
                </div><!-- /.price-mant -->
            </div><!-- /.top-content -->
            <div class="bottom-content row">
                    <div class="single-discribe col-md-4">
                        <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Pick-up</h3>
                        <p class="f-size-14 line-height-24 text-555">
                            323 West 34Th Street, <br>
                            Manhattan, New York, <br>
                            USA
                        </p>
                        <p class="f-size-14 line-height-24 text-555 rt-mb-0">
                            0.51 mi from New <br>
                            York city center
                        </p>
                    </div><!-- /.single-discribe -->
                    <div class="single-discribe col-md-4">
                        <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Drop-off</h3>
                        <p class="f-size-14 line-height-24 text-555">
                            323 West 34Th Street, <br>
                            Manhattan, New York, <br>
                            USA
                        </p>
                        <p class="f-size-14 line-height-24 text-555 rt-mb-0">
                            0.51 mi from New <br>
                            York city center
                        </p>
                    </div><!-- /.single-discribe -->
                    <div class="single-discribe col-md-4">
                        <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Included for Free</h3>
                        <ul class="rt-list">
                            <li class="d-block">
                                <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Automatic transmission
                            </li>
                            <li class="d-block">
                                <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Theft Protection
                            </li>
                            <li class="d-block">
                                <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Third Party Liability
                            </li>
                           
                        </ul><!-- /.rt-list -->
                    </div><!-- /.single-discribe -->
            </div><!-- /.bottom-content -->
        </div><!-- /.flight-box -->
        <div class="flight-list-box rt-mb-30">
            <div class="top-content d-flex flex-md-row flex-column justify-content-lg-between">
                <div class="car-thumb mr-4 mr-lg-0 mb-5 mb-md-0">
                    <img src="{{asset('public/assets/frontend/images/all-img/car-5.png')}}" alt="car image" class="rt-border-primary2">
                </div><!-- /.car-thumb -->
                <div class="economy mb-5 mb-md-0">
                    <h5 class="f-size-16 rt-medium">Economy</h5>
                    <span class="d-block f-size-13 text-555">Hyundai i10 or Similar</span>
                    <span class="d-block text-444 rt-mb-5"> <span><i class="icofont-wheelchair"></i> 4</span> <span><i class="icofont-briefcase"></i> 2</span></span>
                    <span class="badge rt-gradinet-badge pill rt-mr-10">4.3 <small>/5</small></span>
                    <span class="primary-color">Excellent</span>
                    <span class="f-size-12 text-878">( 86 Reviews )</span>
                </div><!-- /.economy -->
                <div class="ck-list">
                    <ul class="rt-list">
                        <li class="d-block">
                            <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Automatic transmission
                        </li>
                        <li class="d-block">
                            <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Unlimited mileage
                        </li>
                        <li class="d-block">
                            <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Free Cancellation
                        </li>
                        <li class="d-block">
                            <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Instant Confirmation
                        </li>
                    </ul><!-- /.rt-list -->
                </div><!-- /.ck-list -->
                <div class="price-mant text-lg-right">
                    <span class="d-block f-size-12 text-878">7 days</span>
                    <span class="d-block text-primary f-size-24 rt-semiblod title-font">$275</span>
                    <a href="car-2.html" class="rt-btn rt-gradient pill rt-sm3 text-uppercase rt-mt-10">Select</a>
                </div><!-- /.price-mant -->
            </div><!-- /.top-content -->
            <div class="bottom-content row">
                    <div class="single-discribe col-md-4">
                        <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Pick-up</h3>
                        <p class="f-size-14 line-height-24 text-555">
                            323 West 34Th Street, <br>
                            Manhattan, New York, <br>
                            USA
                        </p>
                        <p class="f-size-14 line-height-24 text-555 rt-mb-0">
                            0.51 mi from New <br>
                            York city center
                        </p>
                    </div><!-- /.single-discribe -->
                    <div class="single-discribe col-md-4">
                        <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Drop-off</h3>
                        <p class="f-size-14 line-height-24 text-555">
                            323 West 34Th Street, <br>
                            Manhattan, New York, <br>
                            USA
                        </p>
                        <p class="f-size-14 line-height-24 text-555 rt-mb-0">
                            0.51 mi from New <br>
                            York city center
                        </p>
                    </div><!-- /.single-discribe -->
                    <div class="single-discribe col-md-4">
                        <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Included for Free</h3>
                        <ul class="rt-list">
                            <li class="d-block">
                                <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Automatic transmission
                            </li>
                            <li class="d-block">
                                <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Theft Protection
                            </li>
                            <li class="d-block">
                                <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Third Party Liability
                            </li>
                           
                        </ul><!-- /.rt-list -->
                    </div><!-- /.single-discribe -->
            </div><!-- /.bottom-content -->
        </div><!-- /.flight-box -->
        <div class="flight-list-box rt-mb-30">
            <div class="top-content d-flex flex-md-row flex-column justify-content-lg-between">
                <div class="car-thumb mr-4 mr-lg-0 mb-5 mb-md-0">
                    <img src="{{asset('public/assets/frontend/images/all-img/car-6.png')}}" alt="car image" class="rt-border-primary2">
                </div><!-- /.car-thumb -->
                <div class="economy mb-5 mb-md-0">
                    <h5 class="f-size-16 rt-medium">Economy</h5>
                    <span class="d-block f-size-13 text-555">Hyundai i10 or Similar</span>
                    <span class="d-block text-444 rt-mb-5"> <span><i class="icofont-wheelchair"></i> 4</span> <span><i class="icofont-briefcase"></i> 2</span></span>
                    <span class="badge rt-gradinet-badge pill rt-mr-10">4.3 <small>/5</small></span>
                    <span class="primary-color">Excellent</span>
                    <span class="f-size-12 text-878">( 86 Reviews )</span>
                </div><!-- /.economy -->
                <div class="ck-list">
                    <ul class="rt-list">
                        <li class="d-block">
                            <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Automatic transmission
                        </li>
                        <li class="d-block">
                            <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Unlimited mileage
                        </li>
                        <li class="d-block">
                            <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Free Cancellation
                        </li>
                        <li class="d-block">
                            <span class="primary-color rt-mr-3"><i class="icofont-check"></i></span> Instant Confirmation
                        </li>
                    </ul><!-- /.rt-list -->
                </div><!-- /.ck-list -->
                <div class="price-mant text-lg-right">
                    <span class="d-block f-size-12 text-878">7 days</span>
                    <span class="d-block text-primary f-size-24 rt-semiblod title-font">$275</span>
                    <a href="car-2.html" class="rt-btn rt-gradient pill rt-sm3 text-uppercase rt-mt-10">Select</a>
                </div><!-- /.price-mant -->
            </div><!-- /.top-content -->
            <div class="bottom-content row">
                    <div class="single-discribe col-md-4">
                        <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Pick-up</h3>
                        <p class="f-size-14 line-height-24 text-555">
                            323 West 34Th Street, <br>
                            Manhattan, New York, <br>
                            USA
                        </p>
                        <p class="f-size-14 line-height-24 text-555 rt-mb-0">
                            0.51 mi from New <br>
                            York city center
                        </p>
                    </div><!-- /.single-discribe -->
                    <div class="single-discribe col-md-4">
                        <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Drop-off</h3>
                        <p class="f-size-14 line-height-24 text-555">
                            323 West 34Th Street, <br>
                            Manhattan, New York, <br>
                            USA
                        </p>
                        <p class="f-size-14 line-height-24 text-555 rt-mb-0">
                            0.51 mi from New <br>
                            York city center
                        </p>
                    </div><!-- /.single-discribe -->
                    <div class="single-discribe col-md-4">
                        <h3 class="f-size-16 rt-medium text-424 rt-mb-10">Included for Free</h3>
                        <ul class="rt-list">
                            <li class="d-block">
                                <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Automatic transmission
                            </li>
                            <li class="d-block">
                                <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Theft Protection
                            </li>
                            <li class="d-block">
                                <span class="text-555 rt-mr-3"><i class="icofont-check"></i></span> Third Party Liability
                            </li>
                           
                        </ul><!-- /.rt-list -->
                    </div><!-- /.single-discribe -->
            </div><!-- /.bottom-content -->
        </div><!-- /.flight-box -->
        
      
                <nav aria-label="Page navigation example">
    <ul class="pagination  rt-paganation justify-content-center">
        <li class="page-item"><a class="page-link" href="#"><i class="icofont-rounded-double-left"></i></a>
        </li>
        <li class="page-item active"><a class="page-link" href="#">01</a></li>
        <li class="page-item"><a class="page-link" href="#">02</a></li>
        <li class="page-item"><a class="page-link" href="#">03</a></li>
        <li class="page-item"><a class="page-link" href="#"><i class="icofont-rounded-double-right"></i></a>
        </li>
    </ul>
</nav>
            </div><!-- /.col-lg-9 -->
        </div><!-- /.row -->
    </div>
    <div class="tab-pane rtIncative fade-in-bottom" id="rt-item_b_four" role="tabpanel" aria-labelledby="rt-item_b_four">
        <div class="row">
            <div class="col-lg-3 mx-auto mb-5 mb-lg-0 col-md-6">
                <div class="rt-sidebar-group">
    <div class="rt-widget widget_range-slider">
        <h3 class="rt-widget-title">
            Filter by Price
        </h3><!-- /.rt-widget-title -->

        <div class="slider-range"></div>
        <div class="price_slider_amount">
            <div class="clearfix">
                <div class="float-left">
                    <span>Price:</span>
                </div><!-- /.float-left -->
                <div class="float-right">
                    <input type="text" class="amount" name="price" placeholder="Add Your Price" />
                </div><!-- /.float-right -->
            </div><!-- /.clearfix -->
        </div>
        <div class="text-center">
            <input type="submit" value="Filter" class="rt-btn rt-gradient rounded-sm rt-sm text-uppercase" />
        </div><!-- /.text-center -->
    </div><!-- /.rt-widget -->
    <div class="rt-widget widget_plane_time">
        <h3 class="rt-widget-title">
            Departure Time
        </h3><!-- /.rt-widget-title -->
        <ul>
            <li class="clearfix">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="train_gridCheckrt-1">
                    <label class="form-check-label" for="train_gridCheckrt-1">
                        00:00-06:00
                    </label>
                </div><!-- ./orm-group -->
            </li>
            <li class="clearfix">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="train_gridCheckrt-2">
                    <label class="form-check-label" for="train_gridCheckrt-2">
                    06:00-12:00
                    </label>
                </div><!-- ./orm-group -->
            </li>
            <li class="clearfix">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="train_gridCheckrt-2-train-1">
                    <label class="form-check-label" for="train_gridCheckrt-2-train-1">
                    12:00-18:00
                    </label>
                </div><!-- ./orm-group -->
            </li>
            <li class="clearfix">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="train_gridCheckrt-2-train-2">
                    <label class="form-check-label" for="train_gridCheckrt-2-train-2">
                    18:00-24:00
                    </label>
                </div><!-- ./orm-group -->
            </li>
        </ul>
    </div><!-- /.rt-widget -->
    <div class="rt-widget widget_plane_time">
        <h3 class="rt-widget-title">
            Arrival Time
        </h3><!-- /.rt-widget-title -->
        <ul>
            <li class="clearfix">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="train_gridCheckrt-3tx">
                    <label class="form-check-label" for="train_gridCheckrt-3tx">
                    00:00-06:00
                    </label>
                </div><!-- ./orm-group -->
               
            </li>
            <li class="clearfix">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="train_gridCheckrt-4sa">
                    <label class="form-check-label" for="train_gridCheckrt-4sa">
                        06:00-12:00
                    </label>
                </div><!-- ./orm-group -->
                
            </li>
            <li class="clearfix">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="train_gridCheckrt-5">
                    <label class="form-check-label" for="train_gridCheckrt-5">
                    12:00-18:00
                    </label>
                </div><!-- ./orm-group -->
                
            </li>
            <li class="clearfix">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="train_gridCheckrt-51">
                    <label class="form-check-label" for="train_gridCheckrt-51">
                        18:00-24:00
                    </label>
                </div><!-- ./orm-group -->
            </li>
         </ul>
    </div><!-- /.rt-widget -->
    <div class="rt-widget widget_plane_time">
        <h3 class="rt-widget-title">
            Arrival Station
        </h3><!-- /.rt-widget-title -->
        <ul>
            <li class="clearfix">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="train_gridCheckrt-11">
                    <label class="form-check-label" for="train_gridCheckrt-11">
                        Beijing South
                    </label>
                </div><!-- ./orm-group -->

            </li>
            <li class="clearfix">

                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" id="train_gridCheckrt-111">
                    <label class="form-check-label" for="train_gridCheckrt-111">
                        Beijing 
                    </label>
                </div><!-- ./orm-group -->

            </li>
           
        </ul>

    </div><!-- /.rt-widget -->
</div><!-- /.rt-sidebar-group -->
            </div><!-- /.col-lg-3 -->
            <div class="col-lg-9">
                <div class="flight-list-box rt-mb-30">
    <form action="#" class="row">
        <div class="col-lg-3 col-md-6 mb-3 mb-lg-0">
            <button class="rt-btn pill rt-sm rt-gradient d-block">Recommended</button>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-3 col-md-6 mb-3 mb-lg-0">
            <select class="rt-selectactive banner-select" name="from" style="width: 100%">
                <option value="1">Price</option>
                <option value="2">100</option>
                <option value="3">100</option>
                <option value="4">400</option>
                <option value="5">500</option>
            </select>
        </div><!-- /.col-lg-3 -->
        <div class="col-lg-3 rt-input-group mini col-md-6  mb-3 mb-md-0">
            <input type="text" class="rt-date-picker form-control" placeholder="Departure Time">
        </div><!-- /.col-lg-3 -->
        <div class="col-lg-3 rt-input-group mini col-md-6 ">
            <input type="text" class="form-control rt-date-picker" placeholder="Arrival Time ">
        </div><!-- /.col-lg-3 -->
    </form>
</div><!-- /.flight-list-box -->

<div class="flight-list-box rt-mb-30 row">
    <div class="col-md-3 mb-md-0 mb-4">
        <div class="d-flex justify-content-between">
            <span class="rt-medium f-size-24 primary-color">G102</span>
            <ul class="rt-llist train-timeline">
                <li class="f-size-18 text-424">
                    06:26
                </li>
                <li class="f-size-18 text-424">
                    12:29
                </li>
            </ul>
        </div>
    </div><!-- /.col-md-4 -->
    <div class="col-md-3 mb-md-0 mb-4 text-center text-md-right train-border">
        <span class="f-size-12 text-424"><i class="icofont-clock-time rt-mr-3"></i>4h5m</span>
    </div><!-- /.col-md-4 -->
    <div class="col-md-6">
    <div class="d-flex justify-content-between rt-mb-15">
        <span class="f-size-14 text-333">2nd Class</span>
        <span class="f-size-24 text-primary rt-semiblod title-font"><span class="f-size-12">$</span>25.33</span>
        <a href="train-2.html" class="rt-btn rt-gradient rt-sm3 pill text-uppercase">Book</a>
    </div><!-- /.d-flex  -->
    <div class="d-flex justify-content-between rt-mb-15">
        <span class="f-size-14 text-333">2nd Class</span>
        <span class="f-size-24 text-primary rt-semiblod title-font"><span class="f-size-12">$</span>55.33</span>
        <a href="train-2.html" class="rt-btn rt-gradient rt-sm3 pill text-uppercase">Book</a>
    </div><!-- /.d-flex  -->
    <div class="d-flex justify-content-between">
        <span class="f-size-14 text-333">2nd Class</span>
        <span class="f-size-24 text-primary rt-semiblod title-font"><span class="f-size-12">$</span>55.33</span>
        <a href="train-2.html" class="rt-btn rt-gradient rt-sm3 pill text-uppercase">Book</a>
    </div><!-- /.d-flex  -->
    </div><!-- /.col-md-4 -->
</div><!-- /.flight-box -->
<div class="flight-list-box rt-mb-30 row">
    <div class="col-md-3 mb-md-0 mb-4">
        <div class="d-flex justify-content-between">
            <span class="rt-medium f-size-24 primary-color">G102</span>
            <ul class="rt-llist train-timeline">
                <li class="f-size-18 text-424">
                    06:26
                </li>
                <li class="f-size-18 text-424">
                    12:29
                </li>
            </ul>
        </div>
    </div><!-- /.col-md-4 -->
    <div class="col-md-3 mb-md-0 mb-4 text-center text-md-right train-border">
        <span class="f-size-12 text-424"><i class="icofont-clock-time rt-mr-3"></i>4h5m</span>
    </div><!-- /.col-md-4 -->
    <div class="col-md-6">
    <div class="d-flex justify-content-between rt-mb-15">
        <span class="f-size-14 text-333">2nd Class</span>
        <span class="f-size-24 text-primary rt-semiblod title-font"><span class="f-size-12">$</span>25.33</span>
        <a href="train-2.html" class="rt-btn rt-gradient rt-sm3 pill text-uppercase">Book</a>
    </div><!-- /.d-flex  -->
    <div class="d-flex justify-content-between rt-mb-15">
        <span class="f-size-14 text-333">2nd Class</span>
        <span class="f-size-24 text-primary rt-semiblod title-font"><span class="f-size-12">$</span>55.33</span>
        <a href="train-2.html" class="rt-btn rt-gradient rt-sm3 pill text-uppercase">Book</a>
    </div><!-- /.d-flex  -->
    <div class="d-flex justify-content-between">
        <span class="f-size-14 text-333">2nd Class</span>
        <span class="f-size-24 text-primary rt-semiblod title-font"><span class="f-size-12">$</span>55.33</span>
        <a href="train-2.html" class="rt-btn rt-gradient rt-sm3 pill text-uppercase">Book</a>
    </div><!-- /.d-flex  -->
    </div><!-- /.col-md-4 -->
</div><!-- /.flight-box -->
<div class="flight-list-box rt-mb-30 row">
    <div class="col-md-3 mb-md-0 mb-4">
        <div class="d-flex justify-content-between">
            <span class="rt-medium f-size-24 primary-color">G102</span>
            <ul class="rt-llist train-timeline">
                <li class="f-size-18 text-424">
                    06:26
                </li>
                <li class="f-size-18 text-424">
                    12:29
                </li>
            </ul>
        </div>
    </div><!-- /.col-md-4 -->
    <div class="col-md-3 mb-md-0 mb-4 text-center text-md-right train-border">
        <span class="f-size-12 text-424"><i class="icofont-clock-time rt-mr-3"></i>4h5m</span>
    </div><!-- /.col-md-4 -->
    <div class="col-md-6">
    <div class="d-flex justify-content-between rt-mb-15">
        <span class="f-size-14 text-333">2nd Class</span>
        <span class="f-size-24 text-primary rt-semiblod title-font"><span class="f-size-12">$</span>25.33</span>
        <a href="train-2.html" class="rt-btn rt-gradient rt-sm3 pill text-uppercase">Book</a>
    </div><!-- /.d-flex  -->
    <div class="d-flex justify-content-between rt-mb-15">
        <span class="f-size-14 text-333">2nd Class</span>
        <span class="f-size-24 text-primary rt-semiblod title-font"><span class="f-size-12">$</span>55.33</span>
        <a href="train-2.html" class="rt-btn rt-gradient rt-sm3 pill text-uppercase">Book</a>
    </div><!-- /.d-flex  -->
    <div class="d-flex justify-content-between">
        <span class="f-size-14 text-333">2nd Class</span>
        <span class="f-size-24 text-primary rt-semiblod title-font"><span class="f-size-12">$</span>55.33</span>
        <a href="train-2.html" class="rt-btn rt-gradient rt-sm3 pill text-uppercase">Book</a>
    </div><!-- /.d-flex  -->
    </div><!-- /.col-md-4 -->
</div><!-- /.flight-box -->
<div class="flight-list-box rt-mb-30 row">
    <div class="col-md-3 mb-md-0 mb-4">
        <div class="d-flex justify-content-between">
            <span class="rt-medium f-size-24 primary-color">G102</span>
            <ul class="rt-llist train-timeline">
                <li class="f-size-18 text-424">
                    06:26
                </li>
                <li class="f-size-18 text-424">
                    12:29
                </li>
            </ul>
        </div>
    </div><!-- /.col-md-4 -->
    <div class="col-md-3 mb-md-0 mb-4 text-center text-md-right train-border">
        <span class="f-size-12 text-424"><i class="icofont-clock-time rt-mr-3"></i>4h5m</span>
    </div><!-- /.col-md-4 -->
    <div class="col-md-6">
    <div class="d-flex justify-content-between rt-mb-15">
        <span class="f-size-14 text-333">2nd Class</span>
        <span class="f-size-24 text-primary rt-semiblod title-font"><span class="f-size-12">$</span>25.33</span>
        <a href="train-2.html" class="rt-btn rt-gradient rt-sm3 pill text-uppercase">Book</a>
    </div><!-- /.d-flex  -->
    <div class="d-flex justify-content-between rt-mb-15">
        <span class="f-size-14 text-333">2nd Class</span>
        <span class="f-size-24 text-primary rt-semiblod title-font"><span class="f-size-12">$</span>55.33</span>
        <a href="train-2.html" class="rt-btn rt-gradient rt-sm3 pill text-uppercase">Book</a>
    </div><!-- /.d-flex  -->
    <div class="d-flex justify-content-between">
        <span class="f-size-14 text-333">2nd Class</span>
        <span class="f-size-24 text-primary rt-semiblod title-font"><span class="f-size-12">$</span>55.33</span>
        <a href="train-2.html" class="rt-btn rt-gradient rt-sm3 pill text-uppercase">Book</a>
    </div><!-- /.d-flex  -->
    </div><!-- /.col-md-4 -->
</div><!-- /.flight-box -->
<div class="flight-list-box rt-mb-30 row">
    <div class="col-md-3 mb-md-0 mb-4">
        <div class="d-flex justify-content-between">
            <span class="rt-medium f-size-24 primary-color">G102</span>
            <ul class="rt-llist train-timeline">
                <li class="f-size-18 text-424">
                    06:26
                </li>
                <li class="f-size-18 text-424">
                    12:29
                </li>
            </ul>
        </div>
    </div><!-- /.col-md-4 -->
    <div class="col-md-3 mb-md-0 mb-4 text-center text-md-right train-border">
        <span class="f-size-12 text-424"><i class="icofont-clock-time rt-mr-3"></i>4h5m</span>
    </div><!-- /.col-md-4 -->
    <div class="col-md-6">
    <div class="d-flex justify-content-between rt-mb-15">
        <span class="f-size-14 text-333">2nd Class</span>
        <span class="f-size-24 text-primary rt-semiblod title-font"><span class="f-size-12">$</span>25.33</span>
        <a href="train-2.html" class="rt-btn rt-gradient rt-sm3 pill text-uppercase">Book</a>
    </div><!-- /.d-flex  -->
    <div class="d-flex justify-content-between rt-mb-15">
        <span class="f-size-14 text-333">2nd Class</span>
        <span class="f-size-24 text-primary rt-semiblod title-font"><span class="f-size-12">$</span>55.33</span>
        <a href="train-2.html" class="rt-btn rt-gradient rt-sm3 pill text-uppercase">Book</a>
    </div><!-- /.d-flex  -->
    <div class="d-flex justify-content-between">
        <span class="f-size-14 text-333">2nd Class</span>
        <span class="f-size-24 text-primary rt-semiblod title-font"><span class="f-size-12">$</span>55.33</span>
        <a href="train-2.html" class="rt-btn rt-gradient rt-sm3 pill text-uppercase">Book</a>
    </div><!-- /.d-flex  -->
    </div><!-- /.col-md-4 -->
</div><!-- /.flight-box -->
                <nav aria-label="Page navigation example">
    <ul class="pagination  rt-paganation justify-content-center">
        <li class="page-item"><a class="page-link" href="#"><i class="icofont-rounded-double-left"></i></a>
        </li>
        <li class="page-item active"><a class="page-link" href="#">01</a></li>
        <li class="page-item"><a class="page-link" href="#">02</a></li>
        <li class="page-item"><a class="page-link" href="#">03</a></li>
        <li class="page-item"><a class="page-link" href="#"><i class="icofont-rounded-double-right"></i></a>
        </li>
    </ul>
</nav>
            </div><!-- /.col-lg-9 -->
        </div><!-- /.row -->
    </div>
</div>
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

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
});
</script>

</html>

@stop
@section('script')
    @parent
    <script src="{!! asset('assets/global_assets/js/plugins/tables/datatables/datatables.min.js') !!}"></script>
    <script src="{!! asset('assets/global_assets/js/demo_pages/datatables_basic.js') !!}"></script>
@stop