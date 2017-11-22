
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
            <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
            <div id="fh5co-logo">
                <a href="#">ricki iqbal<span>.</span></a>
            </div>
            <nav id="fh5co-main-nav">
                <ul>
                    <li><a href="#" data-nav-section="home">Home</a></li>
                    <li><a href="#" data-nav-section="portfolio">Portfolio</a></li>
                    <li><a href="#" data-nav-section="about">About</a></li>
                    <li><a href="#" data-nav-section="contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div id="fh5co-main">
        <div class="fh5co-overlay-mobile"></div>
        <div id="fh5co-home" class="js-fullheight" data-section="home">

            <div class="flexslider">
                
                <div class="fh5co-overlay"></div>
                <div class="fh5co-text">
                    <div class="container">
                        <div class="row text-center">
                            <h1 class="animate-box">We love to tell your story</h1>
                            <div class="fh5co-go animate-box">
                                <a href="#" class="js-fh5co-next">
                                    See Portfolio
                                    <span><i class="icon-arrow-down2"></i></span>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="slides">
                <li style="background-image: url({{URL::to('/')}}/images/RIP_3.JPG);" data-stellar-background-ratio="0.5"></li>
                <li style="background-image: url({{URL::to('/')}}/images/RIP_6.JPG);" data-stellar-background-ratio="0.5"></li>
                <li style="background-image: url({{URL::to('/')}}/images/RIP_7.JPG);" data-stellar-background-ratio="0.5"></li>
                </ul>

            </div>
        </div>

        <div id="fh5co-portfolio" data-section="portfolio">
            <div class="container">
                <div class="row r-pb">
                    <div class="col-md-8 col-md-offset-2 text-center section-heading">
                        <h2 class="fh5co-section-title animate-box">Portfolio</h2>
                        <p class="fh5co-lead animate-box">Hello, my name is Ricki, I’m photographer from Bandung, Indonesia. For me, every photo has a story. So, every time I take a picture there must be a different challenge. </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-6 col-xxs-12 animate-box">
                        <div class="img-grid">
                            <img src="{{URL::to('/')}}/images/images_brixnara/RIP_13.JPG" alt="Free HTML5 template by FREEHTML5.co" class="img-responsive">
                            <a href="{{URL::to('/portfolio-brixnara')}}" class="transition">
                                <div>
                                    <span class="fh5co-meta">17 images</span>
                                    <h2 class="fh5co-title">Brita &amp; Nara Prewedding</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6 col-xxs-12 animate-box">
                        <div class="img-grid">
                            <img src="{{URL::to('/')}}/images/images_ninaxsatya/RIP10.JPG" alt="Free HTML5 template by FREEHTML5.co" class="img-responsive">
                            <a href="{{URL::to('/portfolio-ninaxsatya')}}" class="transition">
                                <div>
                                    <span class="fh5co-meta">17 images</span>
                                    <h2 class="fh5co-title">Nina &amp; Satya Engagement</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6 col-xxs-12 animate-box">
                        <div class="img-grid">
                            <img src="{{URL::to('/')}}/images/images_freyshaxnanda/RIP_7.JPG" alt="Free HTML5 template by FREEHTML5.co" class="img-responsive">
                            <a href="{{URL::to('/portfolio-freyshaxnanda')}}" class="transition">
                                <div>
                                    <span class="fh5co-meta">9 images</span>
                                    <h2 class="fh5co-title">Freysha &amp; Nanda Wedding</h2>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="fh5co-about" data-section="about">
            <div class="container">
                <div class="row r-pb">
                    <div class="col-md-8 col-md-offset-2 text-center section-heading animate-box">
                        <h2 class="fh5co-section-title">About</h2>
                        <p class="fh5co-lead">If you have time check out my portfolio, and if you like that, please contact me and we talk further. </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 animate-box">
                        <div class="fh5co-text with-plus">
                            <h2>Rob Smith</h2>
                            <span class="fh5co-meta">Photographer, Video Editor</span>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="fh5co-text">
                            <h2>Jean Smith</h2>
                            <span class="fh5co-meta">Photographer, Copy writer</span>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        

        <div id="fh5co-contact" data-section="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center section-heading">
                        <h2 class="fh5co-section-title animate-box">Contact</h2>
                        <p class="fh5co-lead animate-box">We'd love to talk about your story.</p>
                        <p class="animate-box">We love to hear every detail of your love story, we are currious to
know your dream wedding and we can't wait to tell your story in
pictures.
Please don't hesitate to contact me for more details</p>
                        <p class="animate-box"><a href="http://freehtml5.co/" target="_blank" class="btn btn-primary btn-lg">Get in touch</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div id="fh5co-testimony" style="background-image: url({{URL::to('/')}}/images/slide_3.JPG);" data-stellar-background-ratio="0.5">
            <div class="fh5co-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="flexslider animate-box">
                            <ul class="slides">
                                <li>
                                    <blockquote>
                                        <p>&ldquo;I think design would be better if designers were much more skeptical about its applications. If you believe in the potency of your craft, where you choose to dole it out is not something to take lightly.&rdquo; <cite>&mdash; Frank Chimero</cite></p>
                                    </blockquote>
                                </li>
                                <li>
                                    <blockquote>
                                        <p>&ldquo;Design must be functional and functionality must be translated into visual aesthetics, without any reliance on gimmicks that have to be explained.&rdquo; <cite>&mdash; Ferdinand A. Porsche</cite></p>
                                    </blockquote>
                                </li>
                                <li>
                                    <blockquote>
                                        <p>&ldquo;Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn’t really do it, they just saw something. It seemed obvious to them after a while.&rdquo; <cite>&mdash; Steve Jobs</cite></p>
                                    </blockquote>
                                </li>
                                
                                
                            </ul>
                        </div>

                </div>
            </div>
        </div>

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

