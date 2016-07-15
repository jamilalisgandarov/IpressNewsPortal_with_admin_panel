@extends('layouts.homepage')

@section('content')


        <div class="container">
        <div class="row">
<!-- This section for Etibar -->
<section id="content-wrap" class="col-md-9" style='    margin-top: 60px;'>
                <div class="main row">
                    <div class="col-md-12 col-xs-12 high" style="padding-right: 8px;">
    <!-- post of the day  -->
                        <div class=" row">
                        @foreach($catNews as $news)
                        <div class="day_post col-md-12">
                            <div class="col-md-12 regtangle">
                                <p>{{$news->title_en}}</p>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="row day_post_img ">
                                            <a href="#">
                                                <img src="<?php echo 'images/news_img/'.$news->main_img ?>" alt="" >
                                            </a>
                                           <!--  <div class="society"><p>Society</p></div> -->
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 day_post_text">
                                        <div>
                                            <h3>{{str_limit($news->title_az,50)}}</h3>
                                            <p>3 hours ago / 0 comments</p>
                                            <p>{!! str_limit($news->short_desc_az ,200) !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
    <!--     lifestyle -->
                 </div>
                 </div>
                 </div>      
    </section>
        </div>
    </div>


@endsection