
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $title or "Website Ricki"}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
    <meta name="author" content="FREEHTML5.CO" />

  <!-- 
    //////////////////////////////////////////////////////

    FREE HTML5 TEMPLATE 
    DESIGNED & DEVELOPED by FREEHTML5.CO
        
    Website:        http://freehtml5.co/
    Email:          info@freehtml5.co
    Twitter:        http://twitter.com/fh5co
    Facebook:       https://www.facebook.com/fh5co

    //////////////////////////////////////////////////////
     -->

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700|Roboto:400,300,700' rel='stylesheet' type='text/css'>
    <!-- Animate -->
    <link rel="stylesheet" href="{{URL::to('/')}}/css/animate.css">
    <!-- Flexslider -->
    <link rel="stylesheet" href="{{URL::to('/')}}/css/flexslider.css">
    <!-- Icomoon -->
    <link rel="stylesheet" href="{{URL::to('/')}}/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{URL::to('/')}}/css/bootstrap.css">

    <link rel="stylesheet" href="{{URL::to('/')}}/css/style.css">

    <link rel="stylesheet" href="{{URL::to('/')}}/css/custom.css">


    <!-- Modernizr JS -->
    <script src="{{URL::to('/')}}/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    </head>
    <body>
    
    <div id="fh5co-header">
        <div class="container">
            <!-- Mobile Toggle Menu Button -->
            <a href="{{URL::to('/')}}" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
            <div id="fh5co-logo">
                <a href="{{URL::to('/')}}" >ricki iqbal<span>.</span></a>
            </div>
            <!-- <nav id="fh5co-main-nav">
                <ul>
                    <li><a href="{{URL::to('/')}}#">Home</a></li>
                    <li><a href="{{URL::to('/')}}#portfolio">Portfolio</a></li>
                    <li><a href="{{URL::to('/')}}#about">About</a></li>
                    <li><a href="{{URL::to('/')}}#contact" >Contact</a></li>
                </ul>
            </nav> -->
        </div>
    </div>
    <div id="fh5co-main">
        
        @yield('isi')


        <div id="fh5co-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 animate-box">
                        <div class="fh5co-footer-widget">
                            <p>&copy; Fotografy Free HTML5 Template. All Rights Reserved.</p>
                            <p>Designed by <a href="http://freehtml5.co/">FREEHTML5.co</a> Demo Images: <a href="http://unsplash.com/" target="_blank">Unsplash</a> &amp; <a href="http://pexels.com/" target="_blank">Pexels</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 animate-box">
                        <div class="fh5co-footer-widget">
                            <ul class="fh5co-social pull-right">
                                <li>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-vine"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-behance"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-google"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-vimeo"></i></a>
                                </li>
                            </ul>
                        <div class="fh5co-footer-widget">
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div> <!-- END fh5co-page -->

    <!-- jQuery -->
    <script src="{{URL::to('/')}}/js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="{{URL::to('/')}}/js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="{{URL::to('/')}}/js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="{{URL::to('/')}}/js/jquery.waypoints.min.js"></script>
    <!-- Stellar Parallax -->
    <script src="{{URL::to('/')}}/js/jquery.stellar.min.js"></script>
    <!-- Flexslider -->
    <script src="{{URL::to('/')}}/js/jquery.flexslider-min.js"></script>
    <!-- Main JS -->
    <script src="{{URL::to('/')}}/js/main.js"></script>

    </body>
</html>

