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
                    <h3>Single Blog</h3>
                    <div class="breadcrumbs">
                        <span class="divider"><i class="icofont-home"></i></span>
                        <a href="#" title="Home">Home</a>
                        <span class="divider"><i class="icofont-simple-right"></i></span>
                        Single blog

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
        <img src="{{asset('public/assets/frontend/images/all-img/single-post-1.jpg')}}" alt="">
        <div class="meta-date">
            <span>22</span>
            <span>Dec</span>
        </div><!-- /.meta-date -->
    </a>
    <div class="entry-content">
        <header class="entry-header">
            <h2 class="entry-title">
                At Your Own Risk - 10 Countries Where Travel
                Insurance Won't Be Able To Help You
            </h2>
            <div class="entry-meta">
                <span><a href="#"><i class="icofont-speech-comments"></i>20 Comments</a></span>
                <span><a href="#"><i class="icofont-eye-blocked"></i>466 View</a></span>
            </div><!-- .entry-meta -->
        </header><!-- .entry header -->
        <p>
            The foreign and commonwealth office draws up an extensive list of countries that should not be travelled to
            quite
            regularly and it is from that our, and other global travel insurance providers', underwriters decide which
            countries
            travel insurance should be provided for. We look at the government travel advice and decide from that
            whether or not we
            can provide insurance to travellers.
        </p>
        <blockquote>
            Lorem ipsum dolor sit amet, tota aliquip vel eu, cum cu velaccumsa molestiae ius etiam erant appellantur vel
            ei. Ad
            volutpat vis oite.

        </blockquote>
      
           <p>Although global travel insurance does, by its nature, cover the majority of the world, the current climate
        ensures that
        there are some places where the likelihood of incident means that UK travel insurance providers are unable
        to offer protection.</p>

            <p>
                Thankfully, the list is clear of the majority of popular holiday destinations, and you're unlikely to have
                your big
                holiday plans affected. The most likely group to have their travel plans altered by the foreign office's
                travel advice
                are business travellers.
            </p>

        <p>The foreign office's travel advice is not to travel to the following countries, even if it means losing
        business - the
        risk from the
        warzones listed below is just too great to make the reward worth the danger:</p>
           

           <p>Here's our top 10 countries to avoid travelling to, and the reasons for the high risk factor! The risk is
        far from
        conclusive (the foreign office's travel advice lists many more countries), but to me, these are the ones
        that all
        travellers should avoid like the plague:</p>

       
        <div class="row">
            <div class="col-lg-7">
                Lsom unice nas nibh dolor, malesuada et bibendum elit teger ameti consectet ur adipiscing elit. consectetur
                nibah
                is nec eros eget nsl ametysom unice nas nibh dolo males uada et bibendum elit teger ameti nec eros eg et nsl
                ame
                is nec eros eget nsl ametysom unice nas nibh.
                <ul>
                    <li>Aliquam erat volutpat.</li>
                    <li>Exercitation photo booth stumptown tote bag Banksy</li>
                    <li>Tempor duis single-origin coffee</li>
                    <li>Magnis dis parturient montes</li>
                    <li>Tumblr kale chips single-origin coffee</li>
                    <li>Butcher sapiente banh mi brunch nisi</li>
                </ul>
            </div><!-- /.col-lg-8 -->
           <div class="col-lg-4 offset-lg-1">
                <figure>
                    <img src="{{asset('public/assets/frontend/images/all-img/post-inner.jpg')}}" alt="">
                </figure>
           </div><!-- /.col-lg-4 -->

        </div>

        <p>is nec eros eget nsl ametysom unice nas nibh dolo males uada
        elit teger ameti nec eros eg et nsl amet consectur ms friis nec
        ametysom unice nas nibh is nec eros eget nsl,,,,</p>
        <p>
            nsom unice nas nibh dolor, malesuada et bibendum elit teger ameti consectet ur adipiscing elit. consectetur
            nibah
            is nec eros eget nsl ametysom unice nas nibh dolo males uada et bibendum elit teger ameti nec eros eg et nsl
            ame
            is nec eros eget nsl ametysom unice nas nibh dolo males uada et bibendum elit teger ameti nec eros eg et nsl
            ame
            ngilla nec eros eg et nsl amet consectursectur.
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
                <div class="author-box">
    <h3 class="author-title">About The Author</h3>
    
    <div class="media auhor-bio-data align-items-center">
        <div class="bio-thumb mr-5">
            <img src="{{asset('public/assets/frontend/images/all-img/main-author.jpg')}}" class=" rounded-circle" alt="auhtor aimage">
            <ul class="rt-social text-center mt-4">
                <li><a href="#"><i class="icofont-facebook"></i></a></li>
                <li><a href="#"><i class="icofont-twitter"></i></i></a></li>
                <li><a href="#"><i class="icofont-linkedin"></i></a></li>
            </ul><!-- /.rt-social -->
        </div><!-- /.bio-inner -->
        <div class="media-body">
            <h5>Angel Smith</h5>
            Aenean et mauris eu leo fermentum ullamcorper sit amet vel leo. Ut posuere, sapien at rhoncus faucibus, ex mi placerat
            risus, eu tincidunt velit velit ac eros. Pellentesque elementum vulputate tortor, et fringilla dolor
            elementum vitae. Fusce cursus, justo a fringilla pulvinar, lacus urna tristique leo.
        </div>
    </div>
</div><!-- /.author-box -->
                <div id="comments" class="comments-area">

    <h2 class="comments-title">
       COMMENTS(3) </h2><!-- .comments-title -->
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
    <div class="widget widget_subscribe">
        <h3 class="widget-title"><span>Subscriber</span>
        For NewsLetter</h3>
        <form>
            <input type="text" placeholder="Enter your email address" class="form-control">
            <div class="text-center">
                <button class="rt-btn rt-gradient pill text-uppercase" value="submit">
                    subscribe
                </button>
            </div><!-- /.text-center -->
        </form>
    </div><!--  ./ single widget -->
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

</body>

</html>

@stop