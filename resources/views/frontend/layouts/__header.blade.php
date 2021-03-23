<header class="rt-site-header  rt-fixed-top white-menu">
    <div class="top-header d-none d-md-block">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <ul class="text-center text-md-left top-message">
                    <li style="<?php if($link!='/')echo("color: #fff;")?>"> <i class="icofont-headphone-alt" style="<?php if($link!='/')echo("color: #fff;")?>"></i>Support</li>
                    <li><a href="mailto:info@emigrar.com " style="<?php if($link!='/')echo("color: #fff;")?>"><i class="icofont-email" style="<?php if($link!='/')echo("color: #fff;")?>"></i>info@emigrar.com</a></li>
                </ul>
            </div><!-- end top header single -->
            <div class="col-md-6">
                <ul class="text-center text-md-right top-social">
                    <li><a href="#" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false"><i class="fas fa-globe-americas"></i>Englishs</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">English</a>
                            <a class="dropdown-item" href="#">French</a>
                            <a class="dropdown-item" href="#">Trukis</a>
                        </div>
                        </li>
                    <li><a href="#"><i class="fas fa-briefcase"></i>My Trips</a></li>
                    <li><a href="#" data-target="#rtmodal-1" data-toggle="modal"><i class="far fa-user-circle"></i>Sign in | Join</a></li>
                </ul>
            </div><!-- end top header single -->
        </div>
    </div>
</div> <!-- end top header -->


    <div class="main-header rt-sticky">
      <nav class="navbar">
        <div class="container">
          <a href="{{route('home.index')}}" class="brand-logo"><img src="@if($link=='/'){{asset('public/assets/frontend/images/logo/logo.png')}}@else{{asset('public/assets/frontend/images/logo/logo-white.png')}}@endif" alt=""></a>
          <a href="{{route('home.index')}}" class="sticky-logo"><img src="{{asset('public/assets/frontend/images/logo/logo.png')}}" alt=""></a>
          <div class="ml-auto d-flex align-items-center">
            

<div class="main-menu">
    <ul>
        <li class="current-menu-item"><a href="{{route('home.index')}}">Home</a></li>
        <li><a href="{{route('product.index', 'khach-san')}} ">Hotel</a></li>
        <li><a href="{{route('thong-tin-sp.index')}}">Detail-Hotel</a></li>
        <li class="menu-item-has-children"><a href="#">Pages</a>
            <ul class="sub-menu">
                <li> <a href="{{route('blog.index')}}">Blog</a></li>
                <li> <a href="{{route('blog.detail')}}">Detail-Blog</a></li>
            </ul>
        </li>

    
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
    <span class="d-md-inline d-none"><a href="{{route('contact.index')}}" class="rt-btn rt-gradient2 rt-rounded text-uppercase rt-Bshadow-1">Contact
            Us</a></span>
</div>
    
          </div>
        </div>
      </nav>
    </div><!-- /.bootom-header -->

  </header>