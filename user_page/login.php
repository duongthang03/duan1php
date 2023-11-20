<!DOCTYPE html>
<html>

<!-- Mirrored from html.waituk.com/entrada/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Nov 2023 08:58:19 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vivu</title>
    <!-- favion -->
    <link rel="icon" type="image/svg" sizes="16x16" href="../img/logooo.svg" />
    <!-- link to font awesome -->
    <link media="all" rel="stylesheet" href="vendors/material-design-icons/material-icons.css" />
    <!-- link to custom icomoon fonts -->
    <link rel="stylesheet" type="text/css" href="css/fonts/icomoon/icomoon.css" />
    <!-- link to wow js animation -->
    <link media="all" rel="stylesheet" href="vendors/animate/animate.css" />
    <!-- include bootstrap css -->
    <link media="all" rel="stylesheet" href="css/bootstrap.css" />
    <!-- include main css -->
    <link media="all" rel="stylesheet" href="css/main.css" />
</head>

<body class="default-page">
    <div class="preloader" id="pageLoad">
        <div class="holder">
            <div class="coffee_cup"></div>
        </div>
    </div>
    <!-- main wrapper -->
    <div id="wrapper">
        <div class="page-wrapper">
            <!-- main header -->
            <header id="header">
                <div class="container-fluid">
                    <!-- logo -->
                    <div class="logo">
                        <a href="index.php">
                            <!-- <img class="normal" src="img/logos/logo.svg" alt="Entrada" /> -->
                            <img class="normal" src="../img/logo4.png" alt="Vivu" />
                            <!-- <img class="gray-logo" src="img/logos/logo-gray.svg" alt="Entrada" /> -->
                            <img class="gray-logo" src="../img/logo3.png" alt="Vivu" />
                        </a>
                    </div>
                    <!-- main navigation -->
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle nav-opener" data-toggle="collapse"
                                data-target="#nav">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!-- main menu items and drop for mobile -->
                        <div class="collapse navbar-collapse" id="nav">

                            <!-- main navbar -->
                            <ul class="nav navbar-nav">

                                <li><a href="#">Giới thiệu</a></li>

                                <li class="dropdown has-mega-dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hỏi đáp<b
                                            class="icon-angle-down"></b></a>
                                </li>

                                <li class="dropdown has-mega-dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hỗ trợ<b
                                            class="icon-angle-down"></b></a>
                                </li>

                                <li class="visible-xs visible-sm">
                                    <a href="login.php">
                                        <span class="icon icon-user"></span>
                                        <span class="text">Login</span>
                                    </a>
                                </li>
                                <li class="hidden-xs hidden-sm v-divider">
                                    <a href="login.php">
                                        <span class="icon icon-user"></span>
                                    </a>
                                </li>

                                <!-- Giỏ hàng -->
                                <li class="visible-xs visible-sm nav-visible dropdown last-dropdown v-divider">
                                    <a href="index.php?act=my_cart">
                                        <!-- <a href="?act=my_cart" data-toggle="dropdown"> -->
                                        <span class="icon icon-cart"></span>
                                        <span class="text hidden-md hidden-lg">Cart</span>
                                        <span class="text hidden-xs hidden-sm">3</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-md">
                                        <div class="drop-wrap cart-wrap">
                                            <strong class="title">Giỏ hàng</strong>
                                            <ul class="cart-list">
                                                <li>
                                                    <div class="img">
                                                        <a href="#">
                                                            <img src="img/listing/img-16.jpg" height="165" width="170"
                                                                alt="image description" />
                                                        </a>
                                                    </div>
                                                    <div class="text-holder">
                                                        <span class="amount">x 2</span>
                                                        <div class="text-wrap">
                                                            <strong class="name"><a href="#">Weekend in
                                                                    Paradise</a></strong>
                                                            <span class="price">$199</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="img">
                                                        <a href="#">
                                                            <img src="img/listing/img-17.jpg" height="165" width="170"
                                                                alt="image description" />
                                                        </a>
                                                    </div>
                                                    <div class="text-holder">
                                                        <span class="amount">x 4</span>
                                                        <div class="text-wrap">
                                                            <strong class="name"><a href="#">Water Sports in
                                                                    Spain</a></strong>
                                                            <span class="price">$199</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="img">
                                                        <a href="#">
                                                            <img src="img/listing/img-18.jpg" height="165" width="170"
                                                                alt="image description" />
                                                        </a>
                                                    </div>
                                                    <div class="text-holder">
                                                        <span class="amount">x 4</span>
                                                        <div class="text-wrap">
                                                            <strong class="name"><a href="#">Beach Party in
                                                                    Greece</a></strong>
                                                            <span class="price">$199</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="footer">
                                                <a href="index.php?act=my_cart" class="btn btn-primary">View cart</a>
                                                <span class="total">$3300</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- End giỏ hàng -->
                            </ul>
                        </div>
                    </nav>
                </div>
                <!-- search form -->
                <form class="search-form" action="#">
                    <fieldset>
                        <a href="#" class="search-opener hidden-md hidden-lg">
                            <span class="icon-search"></span>
                        </a>
                        <div class="search-wrap">
                            <a href="#" class="search-opener close">
                                <span class="icon-cross"></span>
                            </a>
                            <div class="trip-form trip-form-v2 trip-search-main">
                                <div class="trip-form-wrap">
                                    <div class="holder">
                                        <label>Departing</label>
                                        <div class="select-holder">
                                            <div id="datepicker" class="input-group date" data-date-format="mm-dd-yyyy">
                                                <input class="form-control" type="text" readonly />
                                                <span class="input-group-addon"><i class="icon-drop"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="holder">
                                        <label>Returning</label>
                                        <div class="select-holder">
                                            <div id="datepicker1" class="input-group date"
                                                data-date-format="mm-dd-yyyy">
                                                <input class="form-control" type="text" readonly />
                                                <span class="input-group-addon"><i class="icon-drop"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="holder">
                                        <label for="select-region">Select Region</label>
                                        <div class="select-holder">
                                            <select class="trip-select trip-select-v2 region" name="region"
                                                id="select-region">
                                                <option value="select">Africa</option>
                                                <option value="select">Arctic</option>
                                                <option value="select">Asia</option>
                                                <option value="select">Europe</option>
                                                <option value="select">Oceanaia</option>
                                                <option value="select">Polar</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="holder">
                                        <label for="select-activity">Select Activity</label>
                                        <div class="select-holder">
                                            <select class="trip-select trip-select-v2 acitvity" name="activity"
                                                id="select-activity">
                                                <option value="Holiday Type">Holiday Type</option>
                                                <option value="Holiday Type">Beach Holidays</option>
                                                <option value="Holiday Type">Weekend Trips</option>
                                                <option value="Holiday Type">Summer and Sun</option>
                                                <option value="Holiday Type">Water Sports</option>
                                                <option value="Holiday Type">Scuba Diving</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="holder">
                                        <label for="price-range">Price Range</label>
                                        <div class="select-holder">
                                            <select class="trip-select trip-select-v2 price" name="activity"
                                                id="price-range">
                                                <option value="Price Range">Price Range</option>
                                                <option value="Price Range">$1 - $499</option>
                                                <option value="Price Range">$500 - $999</option>
                                                <option value="Price Range">$1000 - $1499</option>
                                                <option value="Price Range">$1500 - $2999</option>
                                                <option value="Price Range">$3000+</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="holder">
                                        <button class="btn btn-trip btn-trip-v2" type="submit">
                                            Find Tours
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </header>
            <!-- main container-->
            <main id="main">
                <!-- top information area -->
                <div class="inner-top">
                    <div class="container">
                        <h1 class="inner-main-heading">Đăng nhập</h1>
                        <!-- breadcrumb -->
                        <nav class="breadcrumbs">
                            <ul>
                                <li><a href="index.php">Trang chủ</a></li>
                                <li><span>Đăng nhập</span></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="inner-main common-spacing container">
                    <!-- form -->
                    <form class="twocol-form" action="index.php?act=login" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="top-box">
                                    <span class="holder height">Đăng nhập</span>
                                </div>
                                <div class="form-holder">
                                    <div class="wrap">
                                        <div class="hold">
                                            <label for="uname">Tên người dùng hoặc Email</label>
                                            <input type="text" name="username1" class="form-control" />
                                        </div>
                                        <div class="hold">
                                            <label for="pass">Mật khẩu</label>
                                            <input type="password" name="password1" class="form-control" />
                                        </div>
                                        <div class="btn-hold">
                                            <button type="submit" class="btn btn-default" name="dangnhap">
                                                Đăng nhập
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="top-box">
                                    <span class="holder height">Đăng ký</span>
                                </div>
                                <div class="form-holder">
                                    <div class="wrap">
                                        <div class="hold">
                                            <label for="uname1">Tên người dùng</label>
                                            <input type="text" name="username" class="form-control" />
                                        </div>
                                        <div class="hold">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" class="form-control" />
                                        </div>
                                        <div class="hold">
                                            <label for="email">Số điện thoại</label>
                                            <input type="text" name="sdt" class="form-control" />
                                        </div>
                                        <div class="hold">
                                            <label for="reg-pass">Mật khẩu</label>
                                            <input type="password" name="password" class="form-control" />
                                        </div>
                                        <div class="btn-hold">
                                            <button type="submit" class="btn btn-default" name="dangky">
                                                Đăng ký
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </main>
        </div>
        <!-- main footer -->
        <footer id="footer">
            <div class="container">
                <!-- newsletter form -->
                <form action="https://html.waituk.com/entrada/php/subscribe.html" id="signup" method="post"
                    class="newsletter-form">
                    <fieldset>
                        <div class="input-holder">
                            <input type="email" class="form-control" placeholder="Email Address" name="subscriber_email"
                                id="subscriber_email" />
                            <input type="submit" value="GO" />
                        </div>
                        <span class="info" id="subscribe_message">To receive news, updates and tour packages via
                            email.</span>
                    </fieldset>
                </form>
                <!-- footer links -->
                <div class="row footer-holder">
                    <nav class="col-sm-4 col-lg-2 footer-nav active">
                        <h3>About Entrada</h3>
                        <ul class="slide">
                            <li><a href="#">The Company</a></li>
                            <li><a href="#">Our Values</a></li>
                            <li><a href="#">Responsiblity</a></li>
                            <li><a href="#">Our Mission</a></li>
                            <li><a href="#">Opportunity</a></li>
                            <li><a href="#">Safety Concerns</a></li>
                        </ul>
                    </nav>
                    <nav class="col-sm-4 col-lg-2 footer-nav">
                        <h3>Destinations</h3>
                        <ul class="slide">
                            <li><a href="#">Nepal</a></li>
                            <li><a href="#">Thailand</a></li>
                            <li><a href="#">Vietnam</a></li>
                            <li><a href="#">Fiji Island</a></li>
                            <li><a href="#">United States</a></li>
                            <li><a href="#">Australia</a></li>
                        </ul>
                    </nav>
                    <nav class="col-sm-4 col-lg-2 footer-nav">
                        <h3>themes</h3>
                        <ul class="slide">
                            <li><a href="#">Hiking and Camping</a></li>
                            <li><a href="#">Trekking Tours</a></li>
                            <li><a href="#">Jungle Safaris</a></li>
                            <li><a href="#">Bungee Jumping</a></li>
                            <li><a href="#">Wildlife &amp; Polar</a></li>
                            <li><a href="#">Peak Climbing</a></li>
                        </ul>
                    </nav>
                    <nav class="col-sm-4 col-lg-2 footer-nav">
                        <h3>reservation</h3>
                        <ul class="slide">
                            <li><a href="#">Booking Conditions</a></li>
                            <li><a href="#">My Bookings</a></li>
                            <li><a href="#">Refund Policy</a></li>
                            <li><a href="#">Includes &amp; Excludes</a></li>
                            <li><a href="#">Your Responsibilities</a></li>
                            <li><a href="#">Order a Brochure</a></li>
                        </ul>
                    </nav>
                    <nav class="col-sm-4 col-lg-2 footer-nav">
                        <h3>ask Entrada</h3>
                        <ul class="slide">
                            <li><a href="#">Why Entrada?</a></li>
                            <li><a href="#">Ask an Expert</a></li>
                            <li><a href="#">Safety Updates</a></li>
                            <li><a href="#">We Help When...</a></li>
                            <li><a href="#">Personal Matters</a></li>
                        </ul>
                    </nav>
                    <nav class="col-sm-4 col-lg-2 footer-nav last">
                        <h3>contact Entrada</h3>
                        <ul class="slide address-block">
                            <li class="wrap-text">
                                <span class="icon-tel"></span>
                                <a href="tel:02072077878">(020) 72077878</a>
                            </li>
                            <li class="wrap-text">
                                <span class="icon-fax"></span>
                                <a href="tel:02088828282">(020) 88828282</a>
                            </li>
                            <li class="wrap-text">
                                <span class="icon-email"></span>
                                <a href="mailto:info@entrada.com">info@entrada.com</a>
                            </li>
                            <li>
                                <span class="icon-home"></span>
                                <address>707 London Road Isleworth, Middx TW7 7QD</address>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- social wrap -->
                <ul class="social-wrap">
                    <li class="facebook">
                        <a href="#">
                            <span class="icon-facebook"></span>
                            <strong class="txt">Like Us</strong>
                        </a>
                    </li>
                    <li class="twitter">
                        <a href="#">
                            <span class="icon-twitter"></span>
                            <strong class="txt">Follow On</strong>
                        </a>
                    </li>
                    <li class="google-plus">
                        <a href="#">
                            <span class="icon-google-plus"></span>
                            <strong class="txt">+1 On Google</strong>
                        </a>
                    </li>
                    <li class="vimeo">
                        <a href="#">
                            <span class="icon-vimeo"></span>
                            <strong class="txt">Share At</strong>
                        </a>
                    </li>
                    <li class="pin">
                        <a href="#">
                            <span class="icon-pin"></span>
                            <strong class="txt">Pin It</strong>
                        </a>
                    </li>
                    <li class="dribble">
                        <a href="#">
                            <span class="icon-dribble"></span>
                            <strong class="txt">Dribbble</strong>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- copyright -->
                            <strong class="copyright"><i class="fa fa-copyright"></i> Copyright 2016 - Entrada - An
                                Adventure Theme - by <a href="#">Waituk</a></strong>
                        </div>
                        <div class="col-lg-6">
                            <ul class="payment-option">
                                <li>
                                    <img src="img/footer/visa.png" alt="visa" />
                                </li>
                                <li>
                                    <img src="img/footer/mastercard.png" height="20" width="33" alt="master card" />
                                </li>
                                <li>
                                    <img src="img/footer/paypal.png" height="20" width="72" alt="paypal" />
                                </li>
                                <li>
                                    <img src="img/footer/maestro.png" height="20" width="33" alt="maestro" />
                                </li>
                                <li>
                                    <img src="img/footer/bank-transfer.png" height="20" width="55"
                                        alt="bank transfer" />
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- scroll to top -->
    <div class="scroll-holder text-center">
        <a href="javascript:" id="scroll-to-top"><i class="icon-arrow-down"></i></a>
    </div>
    <!-- jquery library -->
    <script src="vendors/jquery/jquery-2.1.4.min.js"></script>
    <!-- external scripts -->
    <script src="vendors/bootstrap/javascripts/bootstrap.min.js"></script>
    <script src="vendors/jquery-placeholder/jquery.placeholder.min.js"></script>
    <script src="vendors/match-height/jquery.matchHeight.js"></script>
    <script src="vendors/wow/wow.min.js"></script>
    <script src="vendors/stellar/jquery.stellar.min.js"></script>
    <script src="vendors/validate/jquery.validate.js"></script>
    <script src="vendors/waypoint/waypoints.min.js"></script>
    <script src="vendors/counter-up/jquery.counterup.min.js"></script>
    <script src="vendors/jquery-ui/jquery-ui.min.js"></script>
    <script src="vendors/jQuery-touch-punch/jquery.ui.touch-punch.min.js"></script>
    <script src="vendors/fancybox/jquery.fancybox.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendors/jcf/js/jcf.js"></script>
    <script src="vendors/jcf/js/jcf.select.js"></script>
    <script src="vendors/retina/retina.min.js"></script>
    <script src="vendors/bootstrap-datetimepicker-master/dist/js/bootstrap-datepicker.js"></script>
    <!-- mailchimp newsletter subscriber -->
    <script src="js/mailchimp.js"></script>
    <!-- custom script -->
    <script src="js/jquery.main.js"></script>
</body>

<!-- Mirrored from html.waituk.com/entrada/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Nov 2023 08:58:19 GMT -->
<p>hi</p>
</html>