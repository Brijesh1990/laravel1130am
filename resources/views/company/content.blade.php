@extends('company.layout')
@section('title_name')
Home page
@endsection
@section('content')

<!-- slider here -->

<div id="fwslider"><!-- start slider -->
        <div class="slider_container">
            <div class="slide"> 
                <!-- Slide image -->
                    <img src="{{ asset('company/images/slider1.jpg')}}">
                <!-- /Slide image -->
                <!-- Texts container -->
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <!-- Text title -->
                        <h4 class="title">i want to feel What you wanted!</h4>
                        <!-- /Text title -->
                        <!-- Text description -->
                        <p class="description">A super clean and easy to use Modern templates Lorem ipsum dolor sit amet</p>
                        <!-- /Text description -->
                    </div>
                </div>
                 <!-- /Texts container -->
            </div>
            <!-- /Duplicate to create more slides -->
            <div class="slide">
                <img src="{{ asset('company/images/slider2.jpg')}}">
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <h4 class="title">Lorem ipsum dolor sit amet</h4>
                        <p class="description">Pellentesque non neque egestas libero. Nam sed porta est. Vestibulum id massa eu odio rhoncus eleifend.</p>
                    </div>
                </div>
            </div>
            <!--/slide -->
        </div>
        <div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>
    </div><!--/slider -->

<div class="main_bg"><!-- start main -->
    <div class="container">
        <div class="main_grid">
            <div class="top_grid"><!-- start top_grid -->
                    <div class="col-md-10 span1_of_1">
                            <h3>some of our top services</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    </div>
                    <div class="col-md-2 span1_of_2">
                        <a class="btn" href="single-page.html">view more</a>
                    </div>
                    <div class="clearfix"></div>
            </div>
            <div class="span_of_4"><!-- start span_of_4 -->
                <div class="col-md-3 span1_of_4">
                    <div class="span4_of_list">
                        <span class="active"><i class="fa fa-thumbs-o-up"></i></span>
                        <h3>suspendisse</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        <div class="read_more">
                            <a class="btn btn-2 active" href="single-page.html">view more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 span1_of_4">
                    <div class="span4_of_list">
                        <span><i class="fa fa-lock"></i></span>
                        <h3>maecenas</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        <div class="read_more">
                            <a class="btn  btn-2b" href="single-page.html">view more</a>
                        </div>	
                    </div>	
                </div>
                <div class="col-md-3 span1_of_4">
                    <div class="span4_of_list">
                        <span><i class="fa fa-flag"></i></span>
                        <h3>aliquam</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        <div class="read_more">
                            <a class="btn btn-2b" href="single-page.html">view more</a>
                        </div>		
                    </div>
                </div>
                <div class="col-md-3 span1_of_4">
                    <div class="span4_of_list">
                        <span><i class="fa fa-flask"></i></span>
                        <h3>habitasse</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        <div class="read_more">
                            <a class="btn btn-2b" href="single-page.html">view more</a>
                        </div>						
                    </div>
                </div>
                <div class="clearfix"></div>
            </div><!-- end span_of_4 -->
        </div>
    </div>
    </div>
    <div class="main1_bg"><!-- start main1 -->
    <div class="container">
        <div class="main slider_text texxt-center">
            <h4>why modus versus</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    </div>
    </div>
    <!-- start banner -->
    <div id="bannerBg">
    <div id="containingDiv">
                <div id="allinone_carousel_charming">
                    <div class="myloader"></div>
                    <!-- CONTENT -->
                    <ul class="allinone_carousel_list">
                           <li><img src="{{ asset('company/images/slider_pic1.jpg')}}" alt="" class="img-responsive"/></li>
                        <li><img src="{{ asset('company/images/slider_pic2.jpg')}}" alt="" class="img-responsive"/></li>
                        <li><img src="{{ asset('company/images/slider_pic3.jpg')}}" alt="" class="img-responsive"/></li>
                        <li><img src="{{ asset('company/images/slider_pic4.jpg')}}" alt="" class="img-responsive"/></li>
                        <li><img src="{{ asset('company/images/slider_pic5.jpg')}}" alt="" class="img-responsive"/></li>
                        <li><img src="{{ asset('company/images/slider_pic3.jpg')}}" alt="" class="img-responsive"/></li>
                        <li><img src="{{ asset('company/images/slider_pic4.jpg')}}" alt="" class="img-responsive"/></li>
                        <li><img src="{{ asset('company/images/slider_pic5.jpg')}}" alt="" class="img-responsive"/></li>
                          
                    </ul>    
              </div>
    </div>
    </div>
     <!-- end banner -->
    </div>
    <div class="main_btm"><!-- start main_btm -->
    <div class="container">
        <div class="main span_of_3">
            <div class="col-md-3 span1_of_3">
                <h4>why choose us?</h4>
                <ul class="list-unstyled nav_list">
                    <li><a href="#">Lorem ipsum dolor sit amet, consectetur</a></li>
                    <li><a href="#">Nullam nec sapien eget metus</a></li>
                    <li><a href="#">Curabitur pellentesque mauris tempor </a></li>
                    <li><a href="#">Mauris dictum neque ornare nibh feugiat</a></li>
                    <li><a href="#">Lorem ipsum dolor sit amet, consectetur</a></li>
                    <li><a href="#">Nullam nec sapien eget metus</a></li>
                    <li><a href="#">Curabitur pellentesque mauris tempor </a></li>
                    <li><a href="#">Curabitur pellentesque mauris tempor </a></li>
                    <li><a href="#">Mauris dictum neque ornare nibh feugiat</a></li>
                    <li><a href="#">Lorem ipsum dolor sit amet, consectetur</a></li>
                </ul>
            </div>	
            <div class="col-md-6 span1_of_3">
                <h5>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,<span>randomised words which don't </span> look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </h5>
                    <!-- start circle -->
                    <ul class="list-unstyled circle_list">
                        <li>
                            <div class="safari chart">
                              <div class="tag">50%</div>
                            </div>			
                            <h4 class="style">meier</h4>			
                        </li>
                        <li>
                            <div class="moz chart">
                              <div class="tag">75%</div>
                            </div>			
                            <h4 class="style">johnson</h4>			
                        </li>
                        <li>
                            <div class="google chart">
                              <div class="tag">90%</div>
                            </div>	
                            <h4 class="style">junghanns</h4>					
                        </li>
                    </ul>
                    <!-- end circle -->
            </div>	
            <div class="col-md-3 span1_of_3">
                <h4>what client's say ?</h4>
                <div class="clients">
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos </p>
                </div>
                
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="cau_hide">
        <div class="cursual"><!--  start cursual  -->
            <h4>our happy clients<span class="line"></span></h4>
        </div>
        <div id="owl-demo" class="owl-carousel"><!----start-img-cursual---->
            <div class="item">
                <div class="cau_left">
                    <img class="lazyOwl" data-src="{{ asset('company/images/c1.png')}}" alt="Lazy Owl Image">
                </div>
            </div>
            <div class="item">
                <div class="cau_left">
                    <img class="lazyOwl" data-src="{{ asset('company/images/c2.png')}}" alt="Lazy Owl Image">
                </div>
            </div>
            <div class="item">
                <div class="cau_left">
                    <img class="lazyOwl" data-src="{{ asset('company/images/c3.png')}}" alt="Lazy Owl Image">
                </div>
            </div>
            <div class="item">
                <div class="cau_left">
                    <img class="lazyOwl" data-src="{{ asset('company/images/c1.png')}}" alt="Lazy Owl Image">
                </div>
            </div>
            <div class="item">
                <div class="cau_left">
                    <img class="lazyOwl" data-src="{{ asset('company/images/c2.png')}}" alt="Lazy Owl Image">
                </div>
            </div>
            <div class="item">
                <div class="cau_left">
                    <img class="lazyOwl" data-src="{{ asset('company/images/c3.png')}}" alt="Lazy Owl Image">
                </div>
            </div>
            <div class="item">
                <div class="cau_left">
                    <img class="lazyOwl" data-src="{{ asset('company/images/c1.png')}}" alt="Lazy Owl Image">
                </div>
            </div>	
            <div class="item">
                <div class="cau_left">
                    <img class="lazyOwl" data-src="{{ asset('company/images/c4.png')}}" alt="Lazy Owl Image">
                </div>
            </div>	
            <div class="item">
                <div class="cau_left">
                    <img class="lazyOwl" data-src="{{ asset('company/images/c1.png')}}" alt="Lazy Owl Image">
                </div>
            </div>
            <div class="item">
                <div class="cau_left">
                    <img class="lazyOwl" data-src="{{ asset('company/images/c2.png')}}" alt="Lazy Owl Image">
                </div>
            </div>
            <div class="item">
                <div class="cau_left">
                    <img class="lazyOwl" data-src="{{ asset('company/images/c3.png')}}" alt="Lazy Owl Image">
                </div>
            </div>
            <div class="item">
                <div class="cau_left">
                    <img class="lazyOwl" data-src="{{ asset('company/images/c1.png')}}" alt="Lazy Owl Image">
                </div>
            </div>
            <div class="item">
                <div class="cau_left">
                    <img class="lazyOwl" data-src="{{ asset('company/images/c2.png')}}" alt="Lazy Owl Image">
                </div>
            </div>
        </div><!----//End-img-cursual---->
        </div>
    </div>
    </div>
    @endsection