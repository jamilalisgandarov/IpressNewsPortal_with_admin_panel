@extends('layouts.homepage')

@section('header')

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
                                        <div class="col-md-12 sliderNewsText"><span>{{-- {{str_limit($slider->short_desc_az,50)}} --}}</span></div>
                                </div>
                                @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


@section('content')


<!-- This section for Etibar -->

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
                                    @foreach(($newsAll->take(10)) as $slider)
                                        <div class="carousel_item">
                                            <a href="#">
                                                <img src="<?php echo '/images/news_img/'.$slider->main_img ?>">
                                            </a>
                                        </div>
                                        @endforeach
                                       {{--  <div class="carousel_item">
                                            <a href="#">
                                                <img src="http://www.themebin.com/wp-content/uploads/hd-wallpapers/1920x1200/modern_hd.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="carousel_item"> --}}
                                      {{--       <a href="#">
                                                <img src="assets/images/content/1.png" alt="">
                                            </a>
                                        </div>
                                        <div class="carousel_item">
                                            <a href="#">
                                           --}} {{--      <img src="http://www.themebin.com/wp-content/uploads/hd-wallpapers/1920x1200/modern_hd.jpg" alt="">
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
                                        </div> --}}
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
                                    @foreach($newsAll->all() as $newsTag)
                                        <div class="tag">
                                            <p>{{$newsTag->keywords}}</p>
                                        </div>
                                    @endforeach
                                        {{-- <div class="tag">
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
                                            <p>popular tags</p> --}}
                                     {{--    </div>
                                        <div class="tag">
                                            <p>popular tags</p>
                                        </div>
                                        <div class="tag">
                                            <p>popular tags</p>
                                        </div>
                                        <div class="tag">
                                            <p>popular tags</p>
                                        </div> --}}
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


@endsection