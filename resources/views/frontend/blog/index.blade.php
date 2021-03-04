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
                    <h3>Blog 02</h3>
                    <div class="breadcrumbs">
                        <span class="divider"><i class="icofont-home"></i></span>
                        <a href="#" title="Home">Home</a>
                        <span class="divider"><i class="icofont-simple-right"></i></span>
                        Blog 02

                    </div><!-- /.breadcrumbs -->
                </div><!-- /.breadcrumbs-content -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.rt-bredcump -->

<div class="blog-content-area">
    <div class="container">
        <div class="row">
                <div class="col-lg-4 col-md-6 mx-auto">
<article class="single-blg-post grid-view standard-post wow fadeInUp" data-wow-duration="1s">
        <a href="#" class="post-thumbnail">
            <img src="{{asset('public/assets/frontend/images/all-img/mpost-1.jpg')}}"alt="">
            <div class="meta-date">
                <span>22</span>
                <span>Dec</span>
            </div><!-- /.meta-date -->
        </a>
        <div class="entry-content">
            <header class="entry-header">
                <h2 class="entry-title">
                    <a href="#" rel="bookmark">Elements of a Strong Corporate Travel Program</a>
                </h2>
                <div class="entry-meta">
                    <span><a href="#"><i class="icofont-speech-comments"></i>20 Comments</a></span>
                    <span><a href="#"><i class="icofont-eye-blocked"></i>466 View</a></span>
                </div><!-- .entry-meta -->
            </header><!-- .entry header -->
            <p>
                This article will give you the basic points to consider when putting together or revamping your corporate travel.
            </p>
            <footer class="entry-footer text-center">
                <a href="#">read more</a>
            </footer><!-- ./ footer -->
        </div><!-- .entry content -->
    </article><!-- ./artice single blog -->
</div><!-- /.col-lg-4 -->
<div class="col-lg-4 col-md-6 mx-auto">
<article class="single-blg-post grid-view standard-post wow fadeInUp" data-wow-duration="1.5s">
        <a href="#" class="post-thumbnail">
            <img src="{{asset('public/assets/frontend/images/all-img/mpost-2.jpg')}}"alt="">
            <div class="meta-date">
                <span>22</span>
                <span>Dec</span>
            </div><!-- /.meta-date -->
        </a>
        <div class="entry-content">
            <header class="entry-header">
                <h2 class="entry-title">
                    <a href="#" rel="bookmark">Closer To Truth:
                    Is Time Travel
                    Possible?</a>
                </h2>
                <div class="entry-meta">
                    <span><a href="#"><i class="icofont-speech-comments"></i>20 Comments</a></span>
                    <span><a href="#"><i class="icofont-eye-blocked"></i>466 View</a></span>
                </div><!-- .entry-meta -->
            </header><!-- .entry header -->
            <p>
                This article will give you the basic points to consider when putting together or revamping your corporate travel.
            </p>
            <footer class="entry-footer text-center">
                <a href="#">read more</a>
            </footer><!-- ./ footer -->
        </div><!-- .entry content -->
    </article><!-- ./artice single blog -->
</div><!-- /.col-lg-4 -->
<div class="col-lg-4 col-md-6 mx-auto">
<article class="single-blg-post grid-view standard-post wow fadeInUp" data-wow-duration="2s">
        <a href="#" class="post-thumbnail">
            <img src="{{asset('public/assets/frontend/images/all-img/mpost-3.jpg')}}"alt="">
            <div class="meta-date">
                <span>22</span>
                <span>Dec</span>
            </div><!-- /.meta-date -->
        </a>
        <div class="entry-content">
            <header class="entry-header">
                <h2 class="entry-title">
                    <a href="#" rel="bookmark">Travel Risk
                    Management and Foreseeable Risk</a>
                </h2>
                <div class="entry-meta">
                    <span><a href="#"><i class="icofont-speech-comments"></i>20 Comments</a></span>
                    <span><a href="#"><i class="icofont-eye-blocked"></i>466 View</a></span>
                </div><!-- .entry-meta -->
            </header><!-- .entry header -->
            <p>
                This article will give you the basic points to consider when putting together or revamping your corporate travel.
            </p>
            <footer class="entry-footer text-center">
                <a href="#">read more</a>
            </footer><!-- ./ footer -->
        </div><!-- .entry content -->
    </article><!-- ./artice single blog -->
</div><!-- /.col-lg-4 -->
<div class="col-lg-4 col-md-6 mx-auto">
<article class="single-blg-post grid-view standard-post wow fadeInUp" data-wow-duration="2.5s">
        <a href="#" class="post-thumbnail">
            <img src="{{asset('public/assets/frontend/images/all-img/mpost-4.jpg')}}"alt="">
            <div class="meta-date">
                <span>22</span>
                <span>Dec</span>
            </div><!-- /.meta-date -->
        </a>
        <div class="entry-content">
            <header class="entry-header">
                <h2 class="entry-title">
                    <a href="#" rel="bookmark">How to Become a Group Leader and Travel Free</a>
                </h2>
                <div class="entry-meta">
                    <span><a href="#"><i class="icofont-speech-comments"></i>20 Comments</a></span>
                    <span><a href="#"><i class="icofont-eye-blocked"></i>466 View</a></span>
                </div><!-- .entry-meta -->
            </header><!-- .entry header -->
            <p>
                This article will give you the basic points to consider when putting together or revamping your corporate travel.
            </p>
            <footer class="entry-footer text-center">
                <a href="#">read more</a>
            </footer><!-- ./ footer -->
        </div><!-- .entry content -->
    </article><!-- ./artice single blog -->
</div><!-- /.col-lg-4 -->
<div class="col-lg-4 col-md-6 mx-auto">
<article class="single-blg-post grid-view standard-post wow fadeInUp" data-wow-duration="2s">
        <a href="#" class="post-thumbnail">
            <img src="{{asset('public/assets/frontend/images/all-img/mpost-5.jpg')}}"alt="">
            <div class="meta-date">
                <span>22</span>
                <span>Dec</span>
            </div><!-- /.meta-date -->
        </a>
        <div class="entry-content">
            <header class="entry-header">
                <h2 class="entry-title">
                    <a href="#" rel="bookmark">Best Traveling
                    Experience at
                    Affordable Cost</a>
                </h2>
                <div class="entry-meta">
                    <span><a href="#"><i class="icofont-speech-comments"></i>20 Comments</a></span>
                    <span><a href="#"><i class="icofont-eye-blocked"></i>466 View</a></span>
                </div><!-- .entry-meta -->
            </header><!-- .entry header -->
            <p>
                This article will give you the basic points to consider when putting together or revamping your corporate travel.
            </p>
            <footer class="entry-footer text-center">
                <a href="#">read more</a>
            </footer><!-- ./ footer -->
        </div><!-- .entry content -->
    </article><!-- ./artice single blog -->
</div><!-- /.col-lg-4 -->
<div class="col-lg-4 col-md-6 mx-auto">
<article class="single-blg-post grid-view standard-post wow fadeInUp" data-wow-duration="2s">
        <a href="#" class="post-thumbnail">
            <img src="{{asset('public/assets/frontend/images/all-img/mpost-6.jpg')}}"alt="">
            <div class="meta-date">
                <span>22</span>
                <span>Dec</span>
            </div><!-- /.meta-date -->
        </a>
        <div class="entry-content">
            <header class="entry-header">
                <h2 class="entry-title">
                    <a href="#" rel="bookmark">Is There a Travel Consultant on Your Team?</a>
                </h2>
                <div class="entry-meta">
                    <span><a href="#"><i class="icofont-speech-comments"></i>20 Comments</a></span>
                    <span><a href="#"><i class="icofont-eye-blocked"></i>466 View</a></span>
                </div><!-- .entry-meta -->
            </header><!-- .entry header -->
            <p>
                This article will give you the basic points to consider when putting together or revamping your corporate travel.
            </p>
            <footer class="entry-footer text-center">
                <a href="#">read more</a>
            </footer><!-- ./ footer -->
        </div><!-- .entry content -->
    </article><!-- ./artice single blog -->
</div><!-- /.col-lg-4 -->
<div class="col-lg-4 col-md-6 mx-auto">
<article class="single-blg-post grid-view standard-post wow fadeInUp" data-wow-duration="3s">
        <a href="#" class="post-thumbnail">
            <img src="{{asset('public/assets/frontend/images/all-img/mpost-7.jpg')}}"alt="">
            <div class="meta-date">
                <span>22</span>
                <span>Dec</span>
            </div><!-- /.meta-date -->
        </a>
        <div class="entry-content">
            <header class="entry-header">
                <h2 class="entry-title">
                    <a href="#" rel="bookmark">A Short Note About the Variety of Travellers</a>
                </h2>
                <div class="entry-meta">
                    <span><a href="#"><i class="icofont-speech-comments"></i>20 Comments</a></span>
                    <span><a href="#"><i class="icofont-eye-blocked"></i>466 View</a></span>
                </div><!-- .entry-meta -->
            </header><!-- .entry header -->
            <p>
                This article will give you the basic points to consider when putting together or revamping your corporate travel.
            </p>
            <footer class="entry-footer text-center">
                <a href="#">read more</a>
            </footer><!-- ./ footer -->
        </div><!-- .entry content -->
    </article><!-- ./artice single blog -->
</div><!-- /.col-lg-4 -->
<div class="col-lg-4 col-md-6 mx-auto">
<article class="single-blg-post grid-view standard-post wow fadeInUp" data-wow-duration="2s">
        <a href="#" class="post-thumbnail">
            <img src="{{asset('public/assets/frontend/images/all-img/mpost-8.jpg')}}"alt="">
            <div class="meta-date">
                <span>22</span>
                <span>Dec</span>
            </div><!-- /.meta-date -->
        </a>
        <div class="entry-content">
            <header class="entry-header">
                <h2 class="entry-title">
                    <a href="#" rel="bookmark">Travelings Commandments of Wise Travel</a>
                </h2>
                <div class="entry-meta">
                    <span><a href="#"><i class="icofont-speech-comments"></i>20 Comments</a></span>
                    <span><a href="#"><i class="icofont-eye-blocked"></i>466 View</a></span>
                </div><!-- .entry-meta -->
            </header><!-- .entry header -->
            <p>
                This article will give you the basic points to consider when putting together or revamping your corporate travel.
            </p>
            <footer class="entry-footer text-center">
                <a href="#">read more</a>
            </footer><!-- ./ footer -->
        </div><!-- .entry content -->
    </article><!-- ./artice single blog -->
</div><!-- /.col-lg-4 -->
<div class="col-lg-4 col-md-6 mx-auto">
<article class="single-blg-post grid-view standard-post wow fadeInUp" data-wow-duration="3s">
        <a href="#" class="post-thumbnail">
            <img src="{{asset('public/assets/frontend/images/all-img/mpost-9.jpg')}}"alt="">
            <div class="meta-date">
                <span>22</span>
                <span>Dec</span>
            </div><!-- /.meta-date -->
        </a>
        <div class="entry-content">
            <header class="entry-header">
                <h2 class="entry-title">
                    <a href="#" rel="bookmark">The Health
                    Benefits of Humor When Traveling</a>
                </h2>
                <div class="entry-meta">
                    <span><a href="#"><i class="icofont-speech-comments"></i>20 Comments</a></span>
                    <span><a href="#"><i class="icofont-eye-blocked"></i>466 View</a></span>
                </div><!-- .entry-meta -->
            </header><!-- .entry header -->
            <p>
                This article will give you the basic points to consider when putting together or revamping your corporate travel.
            </p>
            <footer class="entry-footer text-center">
                <a href="#">read more</a>
            </footer><!-- ./ footer -->
        </div><!-- .entry content -->
    </article><!-- ./artice single blog -->
</div><!-- /.col-lg-4 -->
<div class="col-12">
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
</div><!-- /.col-12 -->

        </div><!-- ./row -->
    </div><!-- ./ copntainer -->
</div>

</body>

</html>
@stop