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
            <span>22</span>
            <span>Dec</span>
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

                <div id="comments" class="comments-area">

    <h2 class="comments-title">
       COMMENTS (3) </h2><!-- .comments-title -->
    <ol class="comment-list">
        <li class="comment even thread-even depth-1">
            <div id="div-comment-4" class="comment-body">
                <footer class="comment-meta">
                    <div class="comment-author vcard">
                        <img src="{{asset('public/assets/frontend/images/all-img/cmnt-1.jpg')}}" class="avatar" alt="comment user">
                        <b class="fn"><a href="http://tommcfarlin.com/" rel="external nofollow" class="url">Angel Smith</a></b>  </div><!-- .comment-author -->

                    <div class="comment-metadata">
                        <a href="#">
                            <time datetime="2012-09-03T10:18:04+00:00">
                                November 20, 2018 at 8:31 pm</time>
                        </a>
                    </div><!-- .comment-metadata -->

                </footer><!-- .comment-meta -->

                <div class="comment-content">
                    <p>Maecenas at turpis ut lacus posuere dapibus. Fusce et sollicitudin libero, id vehicula sem. Morbi pharetra nisl eget neque commodo facilisis. Nunc malesuada dolor vitae feugiat fermentum.
                    </p>
                </div><!-- .comment-content -->

                <div class="reply"><a rel="nofollow" class="comment-reply-link" href="#"
                        aria-label="Reply to Tom McFarlin">Reply <i class="icofont-reply-all"></i></a></div>
            </div><!-- .comment-body -->
            <ol class="children">
                <li class="comment even thread-even depth-1">
                    <div class="comment-body">
                        <footer class="comment-meta">
                            <div class="comment-author vcard">
                                <img src="{{asset('public/assets/frontend/images/all-img/cmnt-2.jpg')}}" class="avatar" alt="comment user">
                                <b class="fn"><a href="http://tommcfarlin.com/" rel="external nofollow"
                                        class="url">Mahedi Amin</a></b>  </div>
                            <!-- .comment-author -->

                            <div class="comment-metadata">
                                <a href="#">
                                    <time datetime="2012-09-03T10:18:04+00:00">
                                        September 3, 2012 at 10:18 am </time>
                                </a>
                            </div><!-- .comment-metadata -->

                        </footer><!-- .comment-meta -->

                        <div class="comment-content">
                            <p>Maecenas at turpis ut lacus posuere dapibus. Fusce et sollicitudin libero, id vehicula sem. Morbi pharetra nisl eget neque commodo facilisis. Nunc malesuada dolor vitae feugiat fermentum.</p>
                        </div><!-- .comment-content -->

                        <div class="reply"><a rel="nofollow" class="comment-reply-link" href="#"
                                aria-label="Reply to Tom McFarlin">Reply <i class="icofont-reply-all"></i></a></div>
                    </div><!-- .comment-body -->
                </li><!-- #comment-## -->
            </ol>
        </li><!-- #comment-## -->
        <li class="comment odd alt thread-odd thread-alt depth-1">
            <div id="div-comment-3" class="comment-body">
                <footer class="comment-meta">
                    <div class="comment-author vcard">
                        <img alt="" src="{{asset('public/assets/frontend/images/all-img/cmnt-3.jpg')}}" class="avatar  photo">
                        <b class="fn"><a href="http://chrisam.es/" rel="external nofollow" class="url">Chris Ames</a></b>
                         </div><!-- .comment-author -->

                    <div class="comment-metadata">
                        <a href="#">
                            <time datetime="2013-01-04T10:15:32+00:00">
                                January 4, 2013 at 10:15 am </time>
                        </a>
                    </div><!-- .comment-metadata -->

                </footer><!-- .comment-meta -->

                <div class="comment-content">
                    <p>
                        Maecenas at turpis ut lacus posuere dapibus. Fusce et sollicitudin libero, id vehicula sem. Morbi pharetra nisl eget neque commodo facilisis. Nunc malesuada dolor vitae feugiat fermentum.
                    </p>

                </div><!-- .comment-content -->

                <div class="reply"><a rel="nofollow" class="comment-reply-link" href="#"
                        aria-label="Reply to Chris Ames">Reply <i class="icofont-reply-all"></i></a></div>
            </div><!-- .comment-body -->
        </li><!-- #comment-## -->

    </ol><!-- .comment-list -->

    <div id="respond" class="comment-respond">
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
                        <a href="#" class="title">Base Tendriling
                        Travel Expenses</a>
                        <div class="date">December 2, 2018</div>
                    </div>
                </li><!-- ./ single post -->
                <li>
                    <a href="#"><img src="{{asset('public/assets/frontend/images/all-img/rcp-2.jpg')}}"
                            alt="Make your everyday life easy from now" class="widget-posts-img"></a>
                    <div class="widget-posts-descr">
                        <a href="#" class="title">Travel Pre And
                        Post Internet</a>
                        <div class="date">2 days ago</div>
                    </div>
                </li><!-- ./ single post -->
                <li>
                    <a href="#"><img src="{{asset('public/assets/frontend/images/all-img/rcp-3.jpg')}}"
                            alt="Make your everyday life easy from now" class="widget-posts-img"></a>
                    <div class="widget-posts-descr">
                        <a href="#" class="title">Travelling Tips
                        for the Disabled</a>
                        <div class="date">2 days ago</div>
                    </div>
                </li><!-- ./ single post -->
                <li>
                    <a href="#"><img src="{{asset('public/assets/frontend/images/all-img/rcp-4.jpg')}}"
                            alt="Make your everyday life easy from now" class="widget-posts-img"></a>
                    <div class="widget-posts-descr">
                        <a href="#" class="title">15 Travelers
                        That I Have Met</a>
                        <div class="date">December 2, 2018</div>
                    </div>
                </li><!-- ./ single post -->
            </ul>

        </div>
    </div><!-- ./  single widget -->
    <div class="widget widget_categories">
        <h2 class="widget-title">Categories</h2>
        <ul>
            <li><a href="#">Traveling</a> <span>(33)</span></li>
            <li><a href="#">World Tour</a> <span>(77)</span></li>
            <li><a href="#">Guide</a> <span>(49)</span></li>
            <li><a href="#">Explore</a> <span>(70)</span></li>
            <li><a href="#">Design</a> <span>(89)</span></li>
        </ul>
    </div><!-- ./  single widget -->

    <div class="widget widget_archive">
        <h2 class="widget-title">Archives</h2>
        <ul>
            <li><a href="#" >May 2018</a> <span>(33)</span></li>
            <li><a href="#" >Jun 2018</a><span>(77)</span></li>
            <li><a href="#" >July 2018</a><span>(49)</span></li>
            <li><a href="#" >Feb 2017</a><span>(70)</span></li>
            <li><a href="#">APl 2017</a> <span>(89)</span></li>
        </ul>
    </div><!-- ./  single widget -->
    <div class="widget widget_tag_cloud">
        <h2 class="widget-title">tags</h2>
        <div class="tagcloud">
            
                <a href="#" class="tag-cloud-link">Traveller</a>
                <a href="#" class="tag-cloud-link">adventure</a>
                <a href="#" class="tag-cloud-link">Beach</a>
                <a href="#" class="tag-cloud-link">Dream</a>
                <a href="#" class="tag-cloud-link">Wach</a>
            
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