<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inclined Engineer Pvt Ltd.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

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

    <!-- Google Webfonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Animate.css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/icomoon.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/owl.theme.default.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/magnific-popup.css">
    <!-- Theme Style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/style.css">
    <!-- Modernizr JS -->
    <script src="<?php echo base_url(); ?>/asset/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <header id="fh5co-header" role="banner">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header"> 
                    <!-- Mobile Toggle Menu Button -->
                    <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#fh5co-navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
                    <a class="navbar-brand" href="index.html">Inclined Engg</a>
                </div>
                <div id="fh5co-navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="<?php echo base_url(); ?>"><span>Home <span class="border"></span></span></a></li>
                        <li><a href="<?php echo base_url(); ?>aboutus"><span>About Us<span class="border"></span></span></a></li>
                        <li><a href="javascript: void(0);"><span>Services<span class="border"></span></span></a></li>
                            <li><a href="javascript: void(0);"><span>Careers<span class="border"></span></span></a></li>
                        <li><a href="<?php echo base_url(); ?>contactus"><span>Contact Us<span class="border"></span></span></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- END .header -->

    <?php include_once 'slider.php';?>

    <?php echo $content_for_layout; ?>

    <footer id="fh5co-footer">

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="fh5co-footer-widget">
                        <h2 class="fh5co-footer-logo">Booster</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                    <div class="fh5co-footer-widget">
                        <ul class="fh5co-social">
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-instagram"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            <li><a href="#"><i class="icon-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-2 col-sm-6">
                    <div class="fh5co-footer-widget top-level">
                        <h4 class="fh5co-footer-lead ">Company</h4>
                        <ul>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Career</a></li>
                        </ul>
                    </div>
                </div>

                <div class="visible-sm-block clearfix"></div>

                <div class="col-md-2 col-sm-6">
                    <div class="fh5co-footer-widget top-level">
                        <h4 class="fh5co-footer-lead">Features</h4>
                        <ul class="fh5co-list-check">
                            <li><a href="#">Lorem ipsum dolor.</a></li>
                            <li><a href="#">Ipsum mollitia dolore.</a></li>
                            <li><a href="#">Eius similique in.</a></li>
                            <li><a href="#">Aspernatur similique nesciunt.</a></li>
                            <li><a href="#">Laboriosam ad commodi.</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="fh5co-footer-widget top-level">
                        <h4 class="fh5co-footer-lead ">Products</h4>
                        <ul class="fh5co-list-check">
                            <li><a href="#">Lorem ipsum dolor.</a></li>
                            <li><a href="#">Ipsum mollitia dolore.</a></li>
                            <li><a href="#">Eius similique in.</a></li>
                            <li><a href="#">Aspernatur similique nesciunt.</a></li>
                            <li><a href="#">Laboriosam ad commodi.</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>/asset/js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="<?php echo base_url(); ?>/asset/js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>/asset/js/bootstrap.min.js"></script>
    <!-- Owl carousel -->
    <script src="<?php echo base_url(); ?>/asset/js/owl.carousel.min.js"></script>
    <!-- Waypoints -->
    <script src="<?php echo base_url(); ?>/asset/js/jquery.waypoints.min.js"></script>
    <!-- Magnific Popup -->
    <script src="<?php echo base_url(); ?>/asset/js/jquery.magnific-popup.min.js"></script>
    <!-- Main JS -->
    <script src="<?php echo base_url(); ?>/asset/js/main.js"></script>
</body>
</html>
