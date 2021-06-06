@extends('frontend.layouts.master')
@section('content')
<!DOCTYPE html>
<html lang="en">

<body>
@foreach($records as $key => $news)
    <!-- /preloder -->
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
                    <h3>{!!$news->title!!}</h3>
                    <div class="breadcrumbs">
                        <span class="divider"><i class="icofont-home"></i></span>
                        <a href="#" title="Home">Home</a>
                        <span class="divider"><i class="icofont-simple-right"></i></span>
                        <a href="{{route('news.index','tin-tuc')}}">Tin tức</a>
                        <span class="divider"><i class="icofont-simple-right"></i></span>
                        {!!$news->title!!}

                    </div><!-- /.breadcrumbs -->
                </div><!-- /.breadcrumbs-content -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.rt-bredcump -->

<section class="blog-content-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8">
                <article class="single-blg-post clearfix single-view">
    <a href="#" class="post-thumbnail">
        <img src="{!!$news->getFirstImage()!!}" alt="" style="width: 100%;">
        <div class="meta-date">
            <span style="font-size: 1em;">{{$news->created_at()}}</span>
        </div><!-- /.meta-date -->
    </a>
    <div class="entry-content">
        <header class="entry-header">
            <h2 class="entry-title">
                {!!$news->title!!}
            </h2>
            <div class="entry-meta">
                <span><a href="#"><i class="icofont-speech-comments"></i>20 Comments</a></span>
                <span><a href="#"><i class="icofont-eye-blocked"></i>466 View</a></span>
            </div><!-- .entry-meta -->
        </header><!-- .entry header -->
        <p>
            {!!$news->content!!}
        </p>
       

        <footer class="entry-footer">
           
            <ul class="rt-social rt-circle-style">
                <li><span><strong>SHARE:</strong></span></li>
                <li><a href="#"><i class="icofont-facebook"></i></a></li>
                <li><a href="#"><i class="icofont-twitter"></i></i></a></li>
                <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                <li><a href="#"><i class="icofont-google-plus"></i></a></li>
            </ul>
        </footer><!-- ./ footer -->
    </div><!-- .entry content -->
</article><!-- ./artice single blog -->



    <!--<div id="respond" class="comment-respond">
        <h3 id="reply-title" class="comment-reply-title">FeedBack</h3>
        <form>
            <p class="com">
                
                <input type="email" placeholder="Email" class="form-control">
            </p>
            <p class="com">
               
                <input type="text" placeholder="Subject" class="form-control">
            </p>
            <p class="com">
               
                <input type="text" placeholder="Name" class="form-control">
            </p>
            <p class="com">
                
                <textarea placeholder="your message" class="form-control"></textarea>
            </p>
            <div class="float-left">
                <input type="submit" value="post comment" class="rt-btn rt-gradient text-uppercase rt-rounded">
            </div>
        </form>
    </div>

</div>
            </div><!-- ./column -->
            <div class="col-xl-3 col-lg-4 d-lg-block d-none">
                <div class="sidebar-group">

    <div class="widget">
        <h2 class="widget-title">Latest Post</h2>
        <div class="rt-widget-recent-posts">
            <ul class="posts">
                <li>
                    <a href="#"><img src="{{asset('public/assets/frontend/images/all-img/rcp-1.jpg')}}" alt="Make your everyday life easy from now" class="widget-posts-img"></a>
                    <div class="widget-posts-descr">
                        <a href="#" class="title">
                        {{$news->title}}</a>
                        <div class="date">{{$news->created_at}}</div>
                    </div>
                </li><!-- ./ single post -->
            </ul>

        </div>
    </div><!-- ./  single widget -->

    
    
</div><!-- ./sidebar -->
            </div><!-- ./column -->
        </div><!-- ./row -->
    </div><!-- ./ copntainer -->
</section>

@endforeach
</body>

</html>

@stop