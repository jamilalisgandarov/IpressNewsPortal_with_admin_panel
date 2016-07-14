@extends('layouts.homepage')

@section('content')


<section id="slider-wrap" class="hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="container-fluid padding sliderFrame">
                        <div class="sliderImageFrame  padding ">
                            <div class="sliderImgFull">
                                <div class="category"></div>
                                <div class="rating"></div>
                            </div>
                        </div>
                        <div class=" sliderMain padding ">
                            <div class="sliderMainTrack">
                                <div class="sliderTrack">
                                @foreach(($newsAll->take(6)) as $slider)
                                <div class="sliderNews noselect activeSlider triangle ">
                                        <div class="col-md-12 sliderNewsTitle"><h4 class="sliderNewsTitleColored">{{$slider->title_az}}</h4></div>
                                        <div class="col-md-12 sliderNewsText"><span>{{str_limit($slider->short_desc_az,80)}}</span></div>
                                </div>
                                @endforeach
                                   {{--  <div class="sliderNews noselect activeSlider triangle ">
                                        <div class="col-md-12 sliderNewsTitle"><h4 class="sliderNewsTitleColored">Here is the big title</h4></div>
                                        <div class="col-md-12 sliderNewsText"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span></div>
                                    </div>
                                    <div class="sliderNews noselect">
                                        <div class="col-md-12 sliderNewsTitle"><h4>Here is the big title</h4></div>
                                        <div class="col-md-12 sliderNewsText"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span></div>
                                    </div>
                                    <div class="sliderNews noselect">
                                        <div class="overlaySlider"></div>
                                        <div class="col-md-12 sliderNewsTitle"><h4>Here is the big title</h4></div>
                                        <div class="col-md-12 sliderNewsText"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span></div>
                                    </div>
                                    <div class="sliderNews noselect">
                                        <div class="col-md-12 sliderNewsTitle"><h4>Here is the big title</h4></div>
                                        <div class="col-md-12 sliderNewsText"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span></div>
                                    </div>
                                    <div class="sliderNews noselect">
                                        <div class="col-md-12 sliderNewsTitle"><h4>Here is the big title</h4></div>
                                        <div class="col-md-12 sliderNewsText"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span></div>
                                    </div>
                                    <div class="sliderNews noselect">
                                        <div class="col-md-12 sliderNewsTitle"><h4>Here is the big title</h4></div>
                                        <div class="col-md-12 sliderNewsText"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span></div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <div class="container">
        <div class="row">
<!-- This section for Etibar -->
<section id="content-wrap" class="col-md-9">
                <div class="main row">
                    <div class="col-md-8 col-xs-12 high" style="padding-right: 8px;">
    <!-- post of the day  -->
                        <div class=" row">
                        <div class="day_post col-md-12">
                            <div class="col-md-12 regtangle">
                                <p>Post of the day</p>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="row day_post_img ">
                                            <a href="#">
                                                <img src="<?php echo 'images/news_img/'.$newsAll->first()->main_img ?>" alt="" >
                                            </a>
                                           <!--  <div class="society"><p>Society</p></div> -->
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 day_post_text">
                                        <div>
                                            <h3>{{str_limit($newsAll->first()->title_az,50)}}</h3>
                                            <p>3 hours ago / 0 comments</p>
                                            <p>{!! str_limit($newsAll->first()->short_desc_az ,200) !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    <!--     lifestyle -->
                        <div class="lifestyle col-md-12">
                            <div class="col-md-12 regtangle">
                                <p>Lifestyle</p>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="row high_img_div">
                                            <a href="#">
                                                <img src="https://wallpaperscraft.com/image/sunset_mountain_lake_landscape_86139_1920x1080.jpg" alt="">
                                             </a>
                                        </div>
                                        <div class="row text">
                                            <h3>{{str_limit($newsAll->first()->title_az,20)}}</h3>
                                            <p>3 hours ago / 0 comments</p>
                                            <p>{!! str_limit($newsAll->first()->short_desc_az ,100)!!}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 small">
                                        <div class="row">
                                            <div class="col-md-4 col-xs-4 small_img">
                                                <a href="#">
                                                    <img src="http://www.themebin.com/wp-content/uploads/hd-wallpapers/1920x1200/modern_hd.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="col-md-8 col-xs-8 small_text">
                                                <a href="#"> 
                                                <h5>A New Yorker doesn't necessarily come from</h5></a>
                                                <p>3 minutes ago /<a href=""> 0 comments</a></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-xs-4 small_img">
                                                <a href="#">
                                                    <img src="assets/images/content/1.png" alt="">
                                                </a>
                                            </div>
                                            <div class="col-md-8 col-xs-8 small_text">
                                                <a href="#"> 
                                                <h5>A New Yorker doesn't necessarily come from</h5></a>
                                                <p>3 minutes ago /<a href=""> 0 comments</a></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-xs-4 small_img">
                                                <a href="#">
                                                    <img src="http://www.intrawallpaper.com/static/images/dream_village_hd-HD_Zl7opxD.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="col-md-8 col-xs-8 small_text">
                                                <a href="#"> 
                                                <h5>A New Yorker doesn't necessarily come from</h5></a>
                                                <p>3 minutes ago /<a href=""> 0 comments</a></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-xs-4 small_img">
                                                <a href="#">
                                                    <img src="assets/images/content/1.png" alt="">
                                                </a>
                                            </div>
                                            <div class="col-md-8 col-xs-8 small_text">
                                                <a href="#"> 
                                                <h5>A New Yorker doesn't necessarily come from</h5></a>
                                                <p>3 minutes ago /<a href=""> 0 comments</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    <!-- caorusel posts -->
                        <div class="carousel_posts col-md-12">
                            <div class="col-md-12 regtangle">
                                <p>Carousel Posts</p>
                                    <div class="controller">
                                        
                                    </div>
                            </div>
                            <div class="col-md-12 carousel_main">
                                <div class="over">
                                    <div class="carousel_move" id="carousel_move" draggable="true">
                                        <div class="carousel_item">
                                            <a href="#">
                                                <img src="http://www.intrawallpaper.com/static/images/dream_village_hd-HD_Zl7opxD.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="carousel_item">
                                            <a href="#">
                                                <img src="http://www.themebin.com/wp-content/uploads/hd-wallpapers/1920x1200/modern_hd.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="carousel_item">
                                            <a href="#">
                                                <img src="assets/images/content/1.png" alt="">
                                            </a>
                                        </div>
                                        <div class="carousel_item">
                                            <a href="#">
                                                <img src="http://www.themebin.com/wp-content/uploads/hd-wallpapers/1920x1200/modern_hd.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="carousel_item">
                                            <a href="#">
                                                <img src="assets/images/content/1.png" alt="">
                                            </a>
                                        </div>
                                        <div class="carousel_item">
                                            <a href="#">
                                                <img src="http://www.intrawallpaper.com/static/images/dream_village_hd-HD_Zl7opxD.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="carousel_item">
                                            <a href="#">
                                                <img src="assets/images/content/1.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="right"><i class="fa fa-3x fa-chevron-right" aria-hidden="true"></i></div>
                                    <div class="left"><i class="fa fa-3x fa-chevron-left" aria-hidden="true"></i></div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xs-12 ad">
                                <div class="ads hidden-xs ">
                                    
                                </div>
                            </div>
                        </div>
    <!-- the music -->
                        <div class="music col-md-12">
                            <div class="col-md-12 regtangle">
                                <p>Music</p> 
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="row high_img_div">
                                            <a href="#">
                                                <img src="http://www.intrawallpaper.com/static/images/dream_village_hd-HD_Zl7opxD.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="row text">
                                            <h3>Here's What Instagram</h3>
                                            <p>3 hours ago / 0 comments</p>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. when an unknown printer took a galley.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 small">
                                        <div class="row">
                                            <div class="col-md-4 col-xs-4 small_img">
                                                <a href="#">
                                                    <img src="assets/images/content/1.png" alt="">
                                                </a>
                                            </div>
                                            <div class="col-md-8 col-xs-8 small_text">
                                                <a href="#"> 
                                                <h5>A New Yorker doesn't necessarily come from</h5></a>
                                                <p>3 minutes ago /<a href=""> 0 comments</a></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-xs-4 small_img">
                                                <a href="#">
                                                    <img src="assets/images/content/1.png" alt="">
                                                </a>
                                            </div>
                                            <div class="col-md-8 col-xs-8 small_text">
                                                <a href="#"> 
                                                <h5>A New Yorker doesn't necessarily come from</h5></a>
                                                <p>3 minutes ago /<a href=""> 0 comments</a></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-xs-4 small_img">
                                                <a href="#">
                                                    <img src="assets/images/content/1.png" alt="">
                                                </a>
                                            </div>
                                            <div class="col-md-8 col-xs-8 small_text">
                                                <a href="#"> 
                                                <h5>A New Yorker doesn't necessarily come from</h5></a>
                                                <p>3 minutes ago /<a href=""> 0 comments</a></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-xs-4 small_img">
                                                <a href="#">
                                                    <img src="assets/images/content/1.png" alt="">
                                                </a>
                                            </div>
                                            <div class="col-md-8 col-xs-8 small_text">
                                                <a href="#"> 
                                                <h5>A New Yorker doesn't necessarily come from</h5></a>
                                                <p>3 minutes ago /<a href=""> 0 comments</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    <!-- the world news -->
                        <div class="world_news col-md-12">
                            <div class="col-md-12 regtangle">
                                <p>World News</p>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="row high_img_div">
                                            <a href="#">
                                                <img src="assets/images/content/1.png" alt="">
                                            </a>
                                        </div>
                                        <div class="row text">
                                            <h3>Here's What Instagram</h3>
                                            <p>3 hours ago / 0 comments</p>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. when an unknown printer took a galley.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 small">
                                        <div class="row">
                                            <div class="col-md-4 col-xs-4 small_img">
                                                <a href="#">
                                                    <img src="http://www.intrawallpaper.com/static/images/hd-wallpaper-6_NLl9H49.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="col-md-8 col-xs-8 small_text">
                                                <a href="#"> 
                                                <h5>A New Yorker doesn't necessarily come from</h5></a>
                                                <p>3 minutes ago /<a href=""> 0 comments</a></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-xs-4 small_img">
                                                <a href="#">
                                                    <img src="assets/images/content//1.png" alt="">
                                                </a>
                                            </div>
                                            <div class="col-md-8 col-xs-8 small_text">
                                                <a href="#"> 
                                                    <h5>A New Yorker doesn't necessarily come from</h5>
                                                </a>
                                                <p>3 minutes ago /<a href=""> 0 comments</a></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-xs-4 small_img">
                                                <a href="#">
                                                    <img src="assets/images/content/1.png" alt="">
                                                </a>
                                            </div>
                                            <div class="col-md-8 col-xs-8 small_text">
                                                <a href="#"> 
                                                <h5>A New Yorker doesn't necessarily come from</h5></a>
                                                <p>3 minutes ago /<a href=""> 0 comments</a></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-xs-4 small_img">
                                                <a href="#">
                                                    <img src="assets/images/content/1.png" alt="">
                                                </a>
                                            </div>
                                            <div class="col-md-8 col-xs-8 small_text">
                                                <a href="#"> 
                                                <h5>A New Yorker doesn't necessarily come from</h5></a>
                                                <p>3 minutes ago /<a href=""> 0 comments</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
    <!-- next slide -->
                    <div class="col-md-4 col-xs-12 small_slide">
                        <div class="video_widget">
                            <div class="col-md-12 regtangle">
                                <p>Video Widget</p>
                            </div>
                            <div class="col-md-12 video_widget_iframe">
                                <div class="row">
                                    <div class="">
                                       <iframe width="100%" height="165px" src="https://www.youtube.com/embed/XlTxzElSJ7I?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="calendar col-md-12">
                            
                        </div>
    <!-- random posts -->
                        <div class="random_posts col-md-12">
                            <div class="row">
                                <div class="col-md-12 regtangle">
                                    <p>Random Posts</p>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="news_img_text">
                                            <img src="http://discoveryazerbaijan.az/wp-content/uploads/2016/07/1420390564_baki_42cc6d1955f27336cfe0d90e4f68f0a8-70x70.jpg" alt="">
                                            <div class="news">
                                                <a href="#"><p>Lifestyle Here's What insragram Ads will Look Like.
                                                </p></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="news_img_text">
                                            <img src="https://newevolutiondesigns.com/images/freebies/tropical-beach-background-8.jpg" alt="">
                                            <div class="news">
                                                <p>Lifestyle Here's What insragram Ads will Look Like.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="news_img_text">
                                            <img src="http://feelgrafix.com/data/wallpaper-hd/Wallpaper-HD-16.jpg" alt="">
                                            <div class="news">
                                                <p>Lifestyle Here's What insragram Ads will Look Like.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="news_img_text">
                                            <img src="http://mingecevir.org/wp-content/uploads/2016/02/99056624-70x70.jpg" alt="">
                                            <div class="news">
                                                <p>Lifestyle Here's What insragram Ads will Look Like.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    <!-- popular tags    -->
                        <div class="popular_tags col-md-12">
                            <div class="row">
                                <div class="col-md-12 regtangle">
                                    <p>Popular Tags</p>
                                </div>
                                <div class="col-md-12 popular_tags_item">
                                    <div class="row">
                                        <div class="tag">
                                            <p>Business</p>
                                        </div>
                                        <div class="tag">
                                            <p>Sports</p>
                                        </div>
                                        <div class="tag">
                                            <p>Show business</p>
                                        </div>
                                        <div class="tag">
                                            <p>worldpress themes</p>
                                        </div>
                                        <div class="tag">
                                            <p>popular</p>
                                        </div>
                                        <div class="tag">
                                            <p>tags</p>
                                        </div>
                                        <div class="tag">
                                            <p>popular tags</p>
                                        </div>
                                        <div class="tag">
                                            <p>world</p>
                                        </div>
                                        <div class="tag">
                                            <p>popular tags</p>
                                        </div>
                                        <div class="tag">
                                            <p>popular tags</p>
                                        </div>
                                        <div class="tag">
                                            <p>popular tags</p>
                                        </div>
                                        <div class="tag">
                                            <p>popular tags</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    <!-- fb widget -->
                    <div class="fb_vidget col-md-12 col-xs-12">
                        <div class="row">
                            <div class="col-md-12 regtangle">
                                    <p>Like Us</p>
                            </div>
                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FLanguage-Camp-462197510643034%2F&tabs=timeline&width=340&height=200&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            </section>
            <!-- This section for Sabina -->
            <!-- This section for Sabina -->
        <section id="sidebar-wrap">
          <div class="container">
            <div class="row">
              <div class="col-md-3 col-xs-12">
                <div class="row">
                <div class="doublePort regtangle">
                <p>What's Hot</p></div>
                <div class="iPressSlide">
                  <!-- slider bootstrap -->
                    
                    <div id="ICarousel" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators right">
                        <li data-target="#ICarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#ICarousel" data-slide-to="1">
                          
                        </li>
                        <li data-target="#ICarousel" data-slide-to="2"></li>
                      </ol>
                      

                      <!-- Wrapper for slides -->
                      <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="row">
                  <div  class="col-md-4 col-xs-4">
                  <div class="smallBox"></div>
                  <div class="smallBox"></div>
                  <div class="smallBox"></div>
                  <div class="smallBox"></div>
                  <div class="smallBox"></div>
                </div>
                <div class="col-md-8 col-xs-8">
 <div class="textBox"><p>A New Yorker doesn't necessarily come from.</p>
<span>3 minutes ago </span><div class="back"><div class="reyt">9.45</div><i class="fa fa-star-o star" aria-hidden="true"></i></div></div>
<div class="textBox"><p>Can you guess the most 'overpaid' actor?</p>
<span>12 days ago</span><div class="back"><div class="reyt">8</div><i class="fa fa-star-o star" aria-hidden="true"></i></div></div>
                  <div class="textBox"><p>A New Yorker doesn't 
necessarily come from.</p>
<span>3 month ago</span></div>
                  <div class="textBox"><p>Can you guess the most 
'overpaid' actor?</p>
<span>2 days ago</span></div>
                  <div class="textBox"><p>A New Yorker doesn't 
necessarily come from.</p>
<span>12 month ago</span></div>
                  
                </div>
                </div>
                  </div>
                  <div class="item">
                            <div class="row">
                  <div  class="col-md-4 col-xs-4">
                  <div class="smallBox"></div>
                  <div class="smallBox"></div>
                  <div class="smallBox"></div>
                  <div class="smallBox"></div>
                  <div class="smallBox"></div>
                </div>
                <div class="col-md-8 col-xs-8">
 <div class="textBox"><p>A New Yorker doesn't necessarily come from.</p>
<span>3 minutes ago </span><div class="back"><div class="reyt">9.45</div><i class="fa fa-star-o star" aria-hidden="true"></i></div></div>
<div class="textBox"><p>Can you guess the most 'overpaid' actor?</p>
<span>12 days ago</span><div class="back"><div class="reyt">8</div><i class="fa fa-star-o star" aria-hidden="true"></i></div></div>
                  <div class="textBox"><p>A New Yorker doesn't 
necessarily come from.</p>
<span>3 month ago</span></div>
                  <div class="textBox"><p>Can you guess the most 
'overpaid' actor?</p>
<span>2 days ago</span></div>
                  <div class="textBox"><p>A New Yorker doesn't 
necessarily come from.</p>
<span>12 month ago</span></div>
                  
                </div>
                </div>
                  </div>
                  <div class="item">
                            <div class="row">
                  <div  class="col-md-4 col-xs-4">
                  <div class="smallBox"></div>
                  <div class="smallBox"></div>
                  <div class="smallBox"></div>
                  <div class="smallBox"></div>
                  <div class="smallBox"></div>
                </div>
                <div class="col-md-8 col-xs-8">
                 <div class="textBox"><p>A New Yorker doesn't necessarily come from.</p>
                <span>3 minutes ago </span><div class="back"><div class="reyt">9.45</div><i class="fa fa-star-o star" aria-hidden="true"></i></div></div>
                <div class="textBox"><p>Can you guess the most 'overpaid' actor?</p>
                <span>12 days ago</span><div class="back"><div class="reyt">8</div><i class="fa fa-star-o star" aria-hidden="true"></i></div></div>
                  <div class="textBox"><p>A New Yorker doesn't 
necessarily come from.</p>
                <span>3 month ago</span></div>
                  <div class="textBox"><p>Can you guess the most 
'overpaid' actor?</p>
<span>2 days ago</span></div>
                  <div class="textBox"><p>A New Yorker doesn't 
necessarily come from.</p>
<span>12 month ago</span></div>
                  
                </div>
                </div>
                  </div>
                         </div>
                     </div>
                  <!-- slider bootstrap -->
                </div>
                </div>
              <div class="row">
              <br>
                <div class="doublePort regtangle"><p>Footbal result</p></div>
                <div class="result">
                <span>Saturday,7 December 2013 year</span>
                <br><br>
                  <table>
                        <tr><td style="text-align: right"><p>Real Madrid</p></td><td><p>4 - 1</p></td><td><p>Man City</p></td ></tr>
                        <tr><td style="text-align: right"><p>Barcelona</p></td><td><p>2 - 0</p></td><td><p>AC Milan</p></td ></tr>
                        <tr><td style="text-align: right"><p>Alterico Madrid</p></td><td><p>2 - 2</p></td><td><p>AS Roma</p></td ></tr>
                        <tr><td style="text-align: right"><p>Lion</p></td><td><p>0 - 3</p></td><td><p>Inter</p></td ></tr>
                        </table>
                </div>
                <br>
                <div class="iPressSlide">
                  <!-- slider bootstrap -->
                    
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators" >
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                      </ol>
                      <!-- Wrapper for slides -->
                      <div class="carousel-inner" role="listbox">
                        <div class="item active">
                          <div id="newsOne"><span>iPress Tweets @iPress<hr>iPress Tweets @iPressjhgfjsdf jdhb djhdg jdhg djhg ajdhg jdhfv jdhfb djhcbg djhg jdhfg djhffg djahg jdh gjahdg jhdghdugh aoidhg ;adkhgadjhfadfh gldjgLorem ipsum dolor sit</span></div>
                        </div>
                        <div class="item">
                          <div id="newsOne"><span>iPress Tweets @iPress<hr>iPress Tweets @iPressjhgfjsdf jdhb djhdg jdhg djhg ajdhg jdhfv jdhfb djhcbg djhg jdhfg djhffg djahg jdh gjahdg jhdghdugh aoidhg ;adkhgadjhfadfh gldjgLorem ipsum dolor sit</span></div>
                        </div>
                        
                        <div class="item">
                          <div id="newsOne"><span>iPress Tweets @iPress<hr>iPress Tweets @iPressjhgfjsdf jdhb djhdg jdhg djhg ajdhg jdhfv jdhfb djhcbg djhg jdhfg djhffg djahg jdh gjahdg jhdghdugh aoidhg ;adkhgadjhfadfh gldjgLorem ipsum dolor sit</span></div>
                        </div>
                        <div class="item">
                          <div id="newsOne"><span>iPress Tweets @iPress<hr>iPress Tweets @iPressjhgfjsdf jdhb djhdg jdhg djhg ajdhg jdhfv jdhfb djhcbg djhg jdhfg djhffg djahg jdh gjahdg jhdghdugh aoidhg ;adkhgadjhfadfh gldjgLorem ipsum dolor sit</span></div>
                        </div>
                        
                      </div>
                      
                    </div>
                  <!-- slider bootstrap -->
                </div>
              </div>
              <div class="row">
                 <br>
                <div class="doublePort regtangle"><p>Polls</p></div>
                <div class="radiusBtns">
                  <h4 style="text-align: center"><p>How is my site</p></h4>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                      Amazing
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                      Good
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                      Can be inproved
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                      Not comments
                    </label>
                    <br>
                    <br>
                    <button  type="button" class="btnHover btn btn-vote btn-sm">Vote</button>
                    <button  type="button" class="btnHover btn btn-result btn-sm">View Result</button>
                    <br>
                  </div>
                </div>
              </div>
                 <div class="row">
                 <br>
                  <div class="doublePort regtangle"><p>Reset Comments</p></div>
                  <div class="row">
                  <div  class="col-md-4 col-xs-4">
                  <div class="smallBox"></div>
                  <div class="line"></div>
                  <div class="smallBox"></div>
                  <div class="line"></div>
                  <div class="smallBox"></div>
                  <div class="line"></div>
                  <div class="smallBox"></div>
                </div>
                <div class="col-md-8 col-xs-8 shrift">
                      <div class="textBox"><b>Alex:</b>
                        <p>Welcome to WordPress
                        This is your first co...</p>
                        <span>3 minutes ago </span>
                        </div>
                            <div class="line"></div>
                  <div class="textBox"><b>Karoon:</b>

                        <p>Welcome to WordPress
                        This is your first co...</p>
                        <span>3 minutes ago </span>
                        </div>
                            <div class="line"></div>
                  <div class="textBox"><b>Admin:</b>

                        <p>Welcome to WordPress
                        This is your first co...</p>
                        <span>3 minutes ago </span>
                        </div>
                            <div class="line"></div>
                  <div class="textBox"><b>Michele Jk:</b>

                        <p>Welcome to WordPress
                        This is your first co...</p>
                        <span>3 minutes ago </span>
                        </div>
                  
                </div>
                </div>
                
              </div>
            
          </div>
        </div>
      </div>
    </section>
        </div>
    </div>


@endsection