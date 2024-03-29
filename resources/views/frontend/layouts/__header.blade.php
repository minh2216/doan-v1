<script src="{{asset('public/assets/frontend/js/jquery-2.2.4.min.js')}}"></script>
<style type="text/css">
    @media only screen and (max-width: 600px) {
          .single-rt-banner {
            margin-top: 100px;
          }
}
</style>
<header class="rt-site-header  rt-fixed-top white-menu">
    <div class="top-header d-none d-md-block">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <ul class="text-center text-md-left top-message">
                    <li><a href="#" onclick="myFunction()" style="<?php if($link!='/')echo("color: #fff;")?>"> <i class="icofont-headphone-alt" style="<?php if($link!='/')echo("color: #fff;")?>"></i>Support</a></li>
                    <li><a href="mailto:minh@75202@st.vimaru.edu.vn" style="<?php if($link!='/')echo("color: #fff;")?>"><i class="icofont-email" style="<?php if($link!='/')echo("color: #fff;")?>"></i>minh@75202@st.vimaru.edu.vn</a></li>
                </ul>
            </div><!-- end top header single -->
            <div class="col-md-6">
                <ul class="text-center text-md-right top-social">
                    @if(session()->has('username'))
                    <li><a href="{!!route('detail.order')!!}"><i class="fas fa-briefcase"></i>My Trips</a></li>
                    @endif
                    <li><a href="#" data-target="#rtmodal-1" data-toggle="modal">
                        @if(session()->has('username')) 
                        <a href="#" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-globe-americas"></i>{!!Session('username')!!}</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{!!route('account.logout')!!}" data-action="logout">Log out</a>
                        </div> 
                        @else 
                        <i class="far fa-user-circle"></i>Sign in / Register 
                        @endif
                        </a>
                    </li>
                </ul>
            </div><!-- end top header single -->
        </div>
    </div>
</div> <!-- end top header -->


    <div class="main-header rt-sticky">
      <nav class="navbar">
        <div class="container">
          <a href="{{route('home.index')}}" class="brand-logo"><img src="@if($link=='/'){{asset('public/assets/frontend/images/logo/logo.png')}}@else{{asset('public/assets/frontend/images/logo/logo-white.png')}}@endif" alt="" style="width: 100px;"></a>
          <a href="{{route('home.index')}}" class="sticky-logo"><img src="{{asset('public/assets/frontend/images/logo/logo.png')}}" alt="" style="width: 100px;"></a>
          <div class="ml-auto d-flex align-items-center">
            

<div class="main-menu">
    <ul>
        <li class="current-menu-item"><a href="{{route('home.index')}}">Trang chủ</a></li>
        <li><a href="{{route('product.index', 'khach-san')}} ">Khách sạn</a></li>
        <li><a href="{{route('product.index', 'homestay')}} ">Homestay</a></li>
        <li> <a href="{{route('news.index','tin-tuc')}}">Tin tức</a></li>
    </ul>
    <div class="mobile-menu">
        <div class="menu-click">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div><!-- end main menu -->
            <div class="rt-nav-tolls d-flex align-items-center">
    <span class="d-md-inline d-none"><a href="{{route('contact.index')}}" class="rt-btn rt-gradient2 rt-rounded text-uppercase rt-Bshadow-1">Liên hệ</a></span>
</div>
    
          </div>
        </div>
      </nav>
    </div><!-- /.bootom-header -->

  </header>

  <!-- Modal -->
<div class="modal fade" id="rtmodal-1" tabindex="-1" role="dialog" aria-labelledby="rtmodal-1"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered rt-lgoinmodal " role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="rt-modal-headr rt-mb-20 one">
                    <img src="{{asset('public/assets/frontend/images/logo/Logo-icon.png')}}" alt="modal logo" draggable="false">
                    <h4>Đăng nhập</h4>
                </div><!-- /.rt-modal-headr -->
                <div class="rt-modal-headr rt-mb-20 two">
                    <img src="{{asset('public/assets/frontend/images/logo/Logo-icon.png')}}" alt="modal logo" draggable="false">
                    <h4>Đăng ký</h4>
                </div><!-- /.rt-modal-headr -->
                <div class="rt-modal-input one">
                    <form action="{!!route('account.login')!!}" method="POST" enctype="multipart/form-data" class="rt-form">
                        @csrf
                        <input type="text" class="form-control pill rt-mb-15" placeholder="User name" name="username">
                        <input type="password" class="form-control pill rt-mb-15" placeholder="Password" name="password">
                        <div class="form-group forgot-pass">
                        </div>
                            <input type="submit" class="rt-btn rt-gradient pill d-block text-uppercase " value="Log In">
                    </form>
                    <div class="ac-register">
                        <span>Bạn không có tài khoản? <a href="#" class="open-creatac">Đăng ký ngay <i class="icofont-double-right"></i></a></span>
                    </div><!-- /.ac-register -->
                </div><!-- /.rt-modal-input -->
                <div class="rt-modal-input two">
                    <form action="{!!route('account.create')!!}" method="POST" enctype="multipart/form-data" class="rt-form">
                        @csrf
                        <input type="text" class="form-control pill rt-mb-15" placeholder="User name" name="username" >

                        <input type="email" class="form-control pill rt-mb-15" placeholder="Enter your mail address" name="email" >

                        <input type="password" class="form-control pill rt-mb-15" placeholder="Password" name="password" >
                        <input type="text" class="form-control pill rt-mb-15" placeholder="Full name" name="full_name" >
                        <div class="form-group forgot-pass">
                            <div class="form-check">
                                
                            </div><!-- ./orm-group -->
                            <div class="form-check">
                            </div><!-- ./orm-group -->
                        </div>
                            <input type="submit" class="rt-btn rt-gradient pill d-block text-uppercase " value="Sign Up">
                    </form>
                    <div class="ac-register">
                        <span>Bạn đã có tài khoản?<a href="#" class="open-login">ĐĂNG NHẬP <i class="icofont-double-right"></i></a></span>

                    </div><!-- /.ac-register -->
                </div><!-- /.rt-modal-input -->
                <div class="rt-modal-footer">
                    <span>Or</span>
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

<script type="text/javascript">
    $( document ).ready(function() {
        $('#rtmodal-1').modal('<?php if(Session('create')=='failed' || Session('login')=='failed') {echo('show');} else {echo('hide');} ?>');
    });

</script>

<!--
        $(".rt-modal-input.one, .rt-modal-headr.one").css("display", "<?php if(Session('login')=='failed') {echo('block');} ?>");
        $(".rt-modal-input.two , .rt-modal-headr.two").css("display", "<?php if(Session('create')=='failed') {echo('block');} ?>");
!>