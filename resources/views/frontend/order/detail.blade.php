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










<div class="rt-breadcump rt-breadcump-height">
    <div class="rt-page-bg rtbgprefix-cover" style="background-image: url({{asset('public/assets/frontend/images/backgrounds/bredcump.png')}})">
    </div><!-- /.rt-page-bg -->
    <div class="container">
        <div class="row rt-breadcump-height">
            <div class="col-12">
                <div class="breadcrumbs-content">
                    <h3>Contact Us</h3>
                    <div class="breadcrumbs">
                        <span class="divider"><i class="icofont-home"></i></span>
                        <a href="#" title="Home">Home</a>
                        <span class="divider"><i class="icofont-simple-right"></i></span>
                        Contact Us

                    </div><!-- /.breadcrumbs -->
                </div><!-- /.breadcrumbs-content -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.rt-bredcump -->


<section class="contact-area">

    </div><!-- /.rt-design-elmnts -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    
                    <table class="table">
                        <tbody>
                        <tr>
                            <td>
                                <h6 class="mb-0">Ngày đặt:</h6>
                            </td>
                            <td><span>{{$record->created_at()}}</span></td>
                        </tr>
                        <tr>
                            <td>
                                <h6 class="mb-0">Trạng thái:</h6>
                            </td>
                            <td>
                                @if($record->status==0)
                                    <span class="badge bg-grey-400" >Chưa xem </span>
                                @elseif($record->status==1)
                                    <span class="badge bg-warning-400">Đang xử lý</span>
                                @elseif($record->status==2)
                                    <span class="badge bg-success-400">Xác nhận</span>
                                @elseif($record->status==3)
                                    <span class="badge bg-danger-400">Từ chối</span>
                                @endif
                            </td>
                        </tr>
                        </tbody>
                    </table>

                </div>
                
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Thông tin người dùng</h5>
                    </div>
                    <table class="table">
                        <tbody>
                        <tr>
                            <td>
                                <h6 class="mb-0">Họ tên:</h6>
                            </td>
                            <td><span>{{$record->contact}}</span></td>
                        </tr>
                        <tr>
                            <td>
                                <h6 class="mb-0">Số điện thoại:</h6>
                            </td>
                            <td><span>{{$record->mobile}}</span></td>
                        </tr>
                        <tr>
                            <td>
                                <h6 class="mb-0">Email:</h6>
                            </td>
                            <td><span>{{$record->email}}</span></td>
                        </tr>
                        <tr>
                            <td>
                                <h6 class="mb-0">Địa chỉ:</h6>
                            </td>
                            <td><span>{{$record->address}}</span></td>
                        </tr>
                        <tr>
                            <td>
                                <h6 class="mb-0">Ghi chú:</h6>
                            </td>
                            <td><span>{{$record->note}}</span></td>
                        </tr>
                        </tbody>
                    </table>

                </div>
            </div>
            <div class = "col-md-12">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Chi tiết phòng</h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>
                    <table class="table datatable-basic">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên</th>
                            <th>Phòng</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($record->products as $key=>$product)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$product->title}}</td>
                                @foreach($record->rooms as $key=>$product)
                                    <td>{{$product->title}}</td>
                                    <td >{{number_format($product->price)}}</td>
                                    <td >{{number_format($product->pivot->quantity)}}</td>
                                    <td >{{number_format($product->pivot->quantity*$product->price)}}</td>
                                @endforeach
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div> 
            </div>
        </div>
        
        <div class="section-title-spacer"></div><!-- /.section-title-spacer -->
    </div><!-- /.container -->
</section>


<section class="rt-map-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mx-auto col-md-6">
                <div class="rt-single-icon-box icon-center text-center justify-content-center shdoaw-style wow fadeInUp">
                    <div class="icon-thumb">
                        <img src="{{asset('public/assets/frontend/images/icons-image/con-1.png')}}" alt="box-icon" draggable="false">
                    </div><!-- /.icon-thumb -->
                    <div class="iconbox-content">
                        <h5>Our Address</h5>
                        <p>971-949 8th Ave <br>
                        New York, NY</p>
                    </div><!-- /.iconbox-content -->
                </div><!-- /.rt-single-icon-box -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mx-auto col-md-6">
                <div class="rt-single-icon-box icon-center text-center justify-content-center shdoaw-style wow fadeInUp" data-wow-duration="1.5s">
                    <div class="icon-thumb">
                        <img src="{{asset('public/assets/frontend/images/icons-image/con-2.png')}}" alt="box-icon" draggable="false">
                    </div><!-- /.icon-thumb -->
                    <div class="iconbox-content">
                        <h5>Phone & Email</h5>
                        <p>(123) 456 7890 <br>
                        contact@example.com</p>
                    </div><!-- /.iconbox-content -->
                </div><!-- /.rt-single-icon-box -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 mx-auto col-md-6">
                <div class="rt-single-icon-box icon-center text-center justify-content-center shdoaw-style wow fadeInUp" data-wow-duration="2s">
                    <div class="icon-thumb">
                        <img src="{{asset('public/assets/frontend/images/icons-image/con-3.png')}}" alt="box-icon" draggable="false">
                    </div><!-- /.icon-thumb -->
                    <div class="iconbox-content">
                        <h5>Stay In Touch</h5>
                        <ul class="rt-social rt-circle-style">
                            
                            <li><a href="#"><i class="icofont-facebook"></i></a></li>
                            <li><a href="#"><i class="icofont-twitter"></i></a></li>
                            <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                        </ul>
                    </div><!-- /.iconbox-content -->
                </div><!-- /.rt-single-icon-box -->
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
    <div class="googleMap">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116834.1509316622!2d90.34928591742289!3d23.780620653401414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1569663745803!5m2!1sen!2sbd"
            width="100%" height="582" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
</section>



<!-- 
    ============= Brands area start==========
 -->

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

</body>

</html>

@stop