<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iPress News Portal</title>
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">

    <!-- <script src="https://use.fontawesome.com/5d33201c90.js"></script> -->
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">


    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="assets/css/custom/style.css">


    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

    <!-- <link rel="stylesheet" type="text/css" href="assets/sass/partials/_footer.css"> -->
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
       <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- This section for Jamil -->
    <section id="header-wrap">
        <div class="container-fluid">
            <!-- Hot news , date and language selection section -->
            <div class="row topHeader">
                <div class="container">
                    <div class="row">
                        <div class=" col-md-6 height hotNewsMain col-xs-12 overflow flex ">
                            <a href="#">
                                <div class="live-cta">
                                    <div class="live-icon">
                                        <div class="live-pulse-min"></div>
                                        <div class="live-pulse-max"></div>
                                    </div>
                                </div>
                                <div class="hotNewsTextMain">
                                    <div class="newsOverlay"></div>
                                    <p class="hotNewsText">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                        <div class="col-md-5  col-md-offset-1  push height flex col-xs-4">
                            <div class="date flex">
                                <p class="todaysDate"> </p>
                            </div>
                        </div>
                        <div class="col-md-5 height  col-xs-4">
                            <div class="socialNetworks ">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-github" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus " aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="col-md-1 height languageSelector  col-xs-4 ">
                            <div class="langSelector">
                                <ul>
                                    <li>
                                        <div>
                                            <img src="assets/images/header/fr.png">
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <a href=""><img src="assets/images/header/fr.png"> </a>
                                        <div>
                                    </li>
                                </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!--  Logo and Adv -->
                    <div class="row topLogo">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-2 col-xs-12 row mainLogo flexDisplay"><img src="assets/images/header/logo.png"></div>
                                <div class="col-md-offset-2 flexDisplay advMain row col-md-8 ">
                                    <div class="adv hidden-xs">
                                        <img src="assets/images/header/adv.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--   Navbar row -->
                    <div class="row topNav col-xs-12">
                        <div class="container">
                            <div class="row">
                                <nav class="navbar navbar-inverse " role="navigation">
                                    <div class="container">
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                            <a class="navbar-brand" href="#">
                                                <i class="fa fa-home" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                            <ul class="nav mainul navbar-nav">
                                            @foreach((App\Category::all()) as $category)
                                                <li><a href="#">{{$category->title_az}}</a><span class="hover"></span></li>
      {{--                                           <li><a href="#">Travel</a><span class="hover"></span></li>
                                                <li><a href="#">People</a><span class="hover"></span></li>
                                                <li><a href="#">Sports</a><span class="hover"></span></li>
                                                <li><a href="#">Music</a><span class="hover"></span></li>
                                                <li><a href="#">Forum</a><span class="hover"></span></li>
                                                <li><a href="#">Contact</a><span class="hover"></span></li> --}}
                                            @endforeach
                                                <ul class="nav navbar-nav navbar-right" style="margin:0px;">
                                                    <li>
                                                        <div class="mainSearch col-xs-12">
                                                            <div class="searchMain">
                                                                <div class="overlayInput"></div>
                                                                <input type="search" placeholder="Search " name="search">
                                                            </div>
                                                            <div class="searchButton">
                                                                <a href="">
                                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
    </section>
    <!-- This section for content -->
    

    @yield('content')



    <!-- This section for Aslan -->
    <section id="footer-wrap">

        <div class="footer_top_line">
            <div class="container">
                <div class="row">
                    <div class="logo_bottom col-md-3">
                        <div class="row">
                            <div class=" logo col-md-12">
                                <a href="index.html"><img src="assets/images/footer/ipress_logo.png"></a>
                            </div>
                            <div class=" info col-md-12">
                                <p>iPress is a  magazine Wordpress Theme. Nunc montes odio phasellus dignissim, aenean, nec augue velit integer elementum ut montes quis integer cursus, est purus, lectus duis, scelerisque tincidunt ultricies phasellus elementum turpis tristique.
                                <br><br>
                                Email:<span class="info_email">information@ipress.com</span></p>
                            </div>                         
                        </div>
                    </div>
                    <div class="recent_post same col-md-3">
                        <div class="row">
                            <div class="same_top regtangle col-md-12">
                                <h4>Recent Posts</h4>
                            </div>
                            <div class="small_div col-md-12">
                                <div class="small_img col-md-4">
                                    <div class="imgM pull-left"><a href="#"><img src="assets/images/footer/roma.jpg"></a></div>
                                </div>
                                <div class="col-xs-6 col-md-8">
                                    <p class="small_text">A New Yorker doesn't necessarily come from...</p>
                                    <p class="last_update">3 minute ago</p>
                                </div>
                            </div>
                             <div class="small_div col-md-12">
                                <div class="small_img col-md-4">
                                    <div class="imgM pull-left"><a href="#"><img src="assets/images/footer/roma.jpg"></a></div>
                                </div>
                                <div class="col-xs-7 col-md-8">
                                    <p class="small_text">Can you guess the most 'overpaid' actor?</p>
                                    <p class="last_update">1 days ago</p>
                                </div>
                            </div>
                             <div class="small_div col-md-12">
                                <div class="small_img col-md-4">
                                    <div class="imgM pull-left"><a href="#"><img src="assets/images/footer/roma.jpg"></a></div>
                                </div>
                                <div class="col-xs-7 col-md-8">
                                    <p class="small_text">A New Yorker doesn't necessarily come from...</p>
                                    <p class="last_update">15 days ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---->
                    <div class="best_reviews same col-md-3">
                       <div class="row">
                            <div class="same_top regtangle col-md-12">
                                <h4>Best Reviews</h4>
                            </div>
                            <div class="small_div col-md-12">
                                <div class="small_img col-md-4">
                                    <div class="imgM pull-left"><a href="#"><img src="assets/images/footer/roma.jpg"></a></div>
                                </div>
                                <div class="col-xs-8 col-md-8">
                                    <p class="small_text">A New Yorker doesn't necessarily come from...</p>
                                    <div class="info_reviews row">
                                        <div class="reviews_rate pull-left col-md-1">
                                            <i class="fa fa-star-o" aria-hidden="true"><p>9.25</p></i>
                                        </div> 
                                        <div class="reviews_category pull-left lightblue_bg"><a href="#"><p>Technology</p></a></div>
                                    </div>
                                </div>
                            </div>
                            <!--first Best div end-->
                                     <div class="small_div col-md-12">
                                <div class="small_img col-md-4">
                                    <div class="imgM pull-left"><a href="#"><img src="assets/images/footer/roma.jpg"></a></div>
                                </div>
                                <div class="col-xs-8 col-md-8">
                                    <p class="small_text">Can you guess the most 'overpaid' actor?</p>
                                    <div class="info_reviews row">
                                        <div class="reviews_rate pull-left col-md-1">
                                            <i class="fa fa-star-o" aria-hidden="true"><p>8</p></i>
                                        </div> 
                                        <div class="reviews_category pull-left blue_bg"><a href="#"><p>Entertainment</p></a></div>
                                    </div>
                                </div>
                            </div>
                                    <div class="small_div col-md-12">
                                <div class="small_img col-md-4">
                                    <div class="imgM pull-left"><a href="#"><img src="assets/images/footer/roma.jpg"></a></div>
                                </div>
                                <div class="col-xs-8 col-md-8">
                                    <p class="small_text">A New Yorker doesn't necessarily come from...</p>
                                    <div class="info_reviews row">
                                        <div class="reviews_rate pull-left col-md-1">
                                            <i class="fa fa-star-o" aria-hidden="true"><p>7.34</p></i>
                                        </div> 
                                        <div class="reviews_category pull-left green_bg"><a href="#"><p>People</p></a></div>
                                    </div>
                                </div>
                            </div>
                            <!--last best div end-->
                            </div>
                    </div>
                    <div class="newsletters same  one1 col-md-3">
                        <div class="row">
                            <div class=" same_top regtangle col-md-12">
                                 <h4>Newsletters</h4>
                            </div>
                            <div class="col-md-12">
                                <p class="t_latest">To receive the latest updates and Latest Posts enter your email.</p>
                            </div>
                            <div class="latest_mail_info_main col-md-12">
                                <div class="latest_mail_info">
                                    <input type="text" name="latest_mail" placeholder="type your email">
                                    <a href="#"><div class="done"><i class="fa fa-check" aria-hidden="true"></i></div></a>
                                </div>
                                <!--  <div class="latest_mail_info_done"></div> -->
                            </div>
                            <div class=" same_top regtangle col-md-12">
                                 <h4>Connect with Us</h4>
                            </div>
                            <div class="social_n col-md-12">
                                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-github" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        </div>
                        <!-- newlest div end -->
                        <div class="copyright col-md-12">
                            <p class="copyrightText">© Powered By Wordpress.  Designed by Theme20.com</p>
                            <h5 class="take_me_top">Back to top  <i class="fa fa-arrow-circle-o-up" aria-hidden="true"></i></h5>
                        </div>
                    </div>
                   
                </div> 
            </div>
        </div>
    </section>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery-1.12.4.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/header.js"></script>
    <script type="text/javascript" src="assets/js/container.js"></script>
    <script type="text/javascript" src="assets/js/footer.js"></script>
    <script type="text/javascript" src="assets/js/miniSlider.js"></script>
    <script src="assets/js/slick.js"></script>
    <script>CKEDITOR.replace( 'textarea_id', {
    allowedContent: 'p b i; a[!href]',
    on: {
        instanceReady: function( evt ) {
            var editor = evt.editor;

            editor.filter.check( 'h1' ); // -> false
            editor.setData( '<h1><i>Foo</i></h1><p class="left"><span>Bar</span> <a href="http://foo.bar">foo</a></p>' );
            // Editor contents will be:
            '<p><i>Foo</i></p><p>Bar <a href="http://foo.bar">foo</a></p>'
        }
    }
} );</script>
</body>

</html>

