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
                    <h3>My Trips</h3>
                    <div class="breadcrumbs">
                        <span class="divider"><i class="icofont-home"></i></span>
                        <a href="#" title="Home">Home</a>
                        <span class="divider"><i class="icofont-simple-right"></i></span>
                        My Trips
                    </div><!-- /.breadcrumbs -->
                </div><!-- /.breadcrumbs-content -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.rt-bredcump -->


<section class="contact-area">
    <div class="rt-design-elmnts rtbgprefix-contain" style="background-image: url({{asset('public/assets/frontend/images/all-img/abt_vec_3.png')}})">

    </div><!-- /.rt-design-elmnts -->
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="rt-section-title-wrapper">
                    <table class="table datatable-basic">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Người đặt</th>
                            <th>Số điện thoại</th>
                            <th>Trạng thái</th>
                            <th>Tác vụ</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($order as $key=>$record)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$record->contact}}</td>
                                <td>{{$record->mobile}}</td>
                                <td>
                                    @if($record->status==0)
                                        <span class="badge bg-grey-400">Chưa xem </span>
                                    @elseif($record->status==1)
                                        <span class="badge bg-warning-400">Đang xử lý</span>
                                    @elseif($record->status==2)
                                        <span class="badge bg-success-400">Xác nhận</span>
                                    @elseif($record->status==3)
                                        <span class="badge bg-danger-400">Từ chối</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <a href="{{route('order.detail', $record->id)}}" title="{!! trans('base.show') !!}" class="success"><i class="fa fa-eye "></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                        
                </div><!-- /.rt-section-title-wrapper -->
            </div><!-- /.col-lg-9 -->
        </div><!-- /.row -->
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
                        @foreach ($contact as $item)
                        <p>{{$item->address}}</p>
                        @endforeach
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
                        @foreach ($contact as $contact)
                        <p>{{$contact->phone}} <br>
                        {{$contact->email}}</p>
                        @endforeach
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
</section>



<!-- 
    ============= Brands area start==========
 -->

<section class="brands-area">
    
</section>

</body>

</html>

@stop