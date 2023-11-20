<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Vivu</title>
  <!-- favion -->
  <link rel="icon" type="image/svg" sizes="16x16" href="../img/logooo.svg" />
  <!-- link to font awesome -->
  <link media="all" rel="stylesheet" href="vendors/font-awesome/css/font-awesome.css" />
  <!-- link to material icon font -->
  <link media="all" rel="stylesheet" href="vendors/material-design-icons/material-icons.css" />
  <!-- link to custom icomoon fonts -->
  <link rel="stylesheet" type="text/css" href="css/fonts/icomoon/icomoon.css" />
  <!-- link to wow js animation -->
  <link media="all" rel="stylesheet" href="vendors/animate/animate.css" />
  <!-- include bootstrap css -->
  <link media="all" rel="stylesheet" href="css/bootstrap.css" />
  <!-- include owl css -->
  <link media="all" rel="stylesheet" href="vendors/owl-carousel/owl.carousel.css" />
  <link media="all" rel="stylesheet" href="vendors/owl-carousel/owl.theme.css" />
  <!-- include main css -->
  <link media="all" rel="stylesheet" href="css/main.css" />
  <!-- link to revolution css  -->
  <link rel="stylesheet" type="text/css" href="vendors/revolution/css/settings.css" />

  <!-- include fancybox css -->
  <link media="all" rel="stylesheet" href="vendors/fancybox/jquery.fancybox.css" />
</head>

<body>
  <div class="preloader" id="pageLoad">
    <div class="holder">
      <div class="coffee_cup"></div>
    </div>
  </div>
  <!-- main wrapper -->
  <div id="wrapper">
    <div class="page-wrapper">
      <!-- main header -->
      <header id="header" class="white-header">
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
              <button type="button" class="navbar-toggle nav-opener" data-toggle="collapse" data-target="#nav">
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
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hỏi đáp<b class="icon-angle-down"></b></a>
                </li>

                <li class="dropdown has-mega-dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hỗ trợ<b class="icon-angle-down"></b></a>
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
                  <a href="?act=my_cart">
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
                              <img src="img/listing/img-16.jpg" height="165" width="170" alt="image description" />
                            </a>
                          </div>
                          <div class="text-holder">
                            <span class="amount">x 2</span>
                            <div class="text-wrap">
                              <strong class="name"><a href="#">Weekend in Paradise</a></strong>
                              <span class="price">$199</span>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="img">
                            <a href="#">
                              <img src="img/listing/img-17.jpg" height="165" width="170" alt="image description" />
                            </a>
                          </div>
                          <div class="text-holder">
                            <span class="amount">x 4</span>
                            <div class="text-wrap">
                              <strong class="name"><a href="#">Water Sports in Spain</a></strong>
                              <span class="price">$199</span>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="img">
                            <a href="#">
                              <img src="img/listing/img-18.jpg" height="165" width="170" alt="image description" />
                            </a>
                          </div>
                          <div class="text-holder">
                            <span class="amount">x 4</span>
                            <div class="text-wrap">
                              <strong class="name"><a href="#">Beach Party in Greece</a></strong>
                              <span class="price">$199</span>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="footer">
                        <a href="?act=my_cart" class="btn btn-primary">View cart</a>
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
      </header>

      <!-- main banner -->
      <div class="banner banner-home">
        <!-- revolution slider starts -->
        <div id="rev_slider_279_1_wrapper" class="rev_slider_wrapper fullscreen-container"
          data-alias="restaurant-header" style="
              margin: 0px auto;
              background-color: #474d4b;
              padding: 0px;
              margin-top: 0px;
              margin-bottom: 0px;
            ">
          <div id="rev_slider_70_1" class="rev_slider fullscreenabanner" style="display: none" data-version="5.1.4">
            <ul>
              <li class="slider-color-schema-dark" data-index="rs-2" data-transition="fade" data-slotamount="7"
                data-easein="default" data-easeout="default" data-masterspeed="1000" data-rotate="0"
                data-saveperformance="off" data-title="Slide" data-description="">
                <!-- main image for revolution slider -->
                <img src="img/banner/img-26.jpg" alt="image description" data-bgposition="center center"
                  data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100"
                  data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0"
                  data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-bgfit="cover" data-no-retina />

                <div class="tp-caption tp-resizeme" id="slide-897-layer-7"
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                  data-y="['top','top','middle','middle']" data-voffset="['160','120','-120','-70']" data-width="none"
                  data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                  data-transform_out="opacity:0;s:300;s:300;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="
                      z-index: 9;
                      white-space: nowrap;
                      font-size: 60px;
                      line-height: 100px;
                      text-align: center;
                    ">
                  <span class="icon-wildlife"></span>
                </div>

                <div class="tp-caption banner-heading-sub tp-resizeme rs-parallaxlevel-0"
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                  data-y="['top','top','middle','middle']" data-voffset="['280','240','10','20']"
                  data-fontsize="['48','48','44','28']" data-lineheight="['85','85','50','50']"
                  data-width="['1200','1000','750','480']" data-height="none" data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                  data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="1000" data-splitin="none"
                  data-splitout="none" data-responsive_offset="on" style="
                      z-index: 7;
                      letter-spacing: 0;
                      font-weight: 100;
                      text-align: center;
                      color: #ffffff;
                    ">
                  Những Cuộc Trải Nghiệm
                </div>

                <div class="tp-caption banner-heading-sub tp-resizeme rs-parallaxlevel-10"
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                  data-y="['top','top','middle','middle']" data-voffset="['340','290','70','70']"
                  data-fontsize="['60','60','60','40']" data-lineheight="['110','110','100','60']" data-width="none"
                  data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;"
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none"
                  data-splitout="none" data-responsive_offset="on" style="
                      z-index: 8;
                      padding-right: 10px;
                      text-indent: 5px;
                      font-weight: 900;
                      white-space: nowrap;
                    ">
                  HẤP DẪN
                </div>
              </li>

              <li data-index="rs-81" data-transition="slideoverup" data-slotamount="7" data-easein="default"
                data-easeout="default" data-masterspeed="1000" data-rotate="0" data-saveperformance="off"
                data-title="The Menu" data-description="">
                <!-- main image for revolution slide -->
                <img alt="image description" src="img/banner/img-02.jpg" data-lazyload="img/banner/img-02.jpg"
                  data-bgposition="right center" data-kenburns="on" data-duration="10000" data-ease="Power1.easeOut"
                  data-scalestart="110" data-scaleend="100" data-rotatestart="0" data-rotateend="0"
                  data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina />

                <div class="tp-caption tp-resizeme" id="slide-897-layer1-7"
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                  data-y="['top','top','middle','middle']" data-voffset="['160','120','-120','-70']" data-width="none"
                  data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                  data-transform_out="opacity:0;s:300;s:300;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="
                      z-index: 9;
                      white-space: nowrap;
                      font-size: 60px;
                      line-height: 100px;
                      text-align: center;
                    ">
                  <span class="icon-hiking-camping"></span>
                </div>

                <div class="tp-caption banner-heading-sub tp-resizeme rs-parallaxlevel-0"
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                  data-y="['top','top','middle','middle']" data-voffset="['280','240','10','20']"
                  data-fontsize="['48','48','44','28']" data-lineheight="['85','85','50','50']"
                  data-width="['1200','1000','750','480']" data-height="none" data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                  data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="1000" data-splitin="none"
                  data-splitout="none" data-responsive_offset="on" style="
                      z-index: 7;
                      letter-spacing: 0;
                      font-weight: 100;
                      text-align: center;
                      color: #ffffff;
                    ">
                  Những Cuộc Phiêu Lưu
                </div>

                <div class="tp-caption tp-resizeme banner-heading-sub rs-parallaxlevel-10"
                  data-x="['center','center','center','center']" data-hoffset="['30','30','30','20']"
                  data-y="['top','top','middle','middle']" data-voffset="['330','280','60','60']"
                  data-fontsize="['60','60','60','40']" data-lineheight="['110','110','100','60']" data-width="none"
                  data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;"
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none"
                  data-splitout="none" data-responsive_offset="on" style="
                      z-index: 8;
                      padding-right: 10px;
                      text-indent: 5px;
                      font-weight: 900;
                      white-space: nowrap;
                    ">
                  KỲ THÚ
                </div>
              </li>
            </ul>
          </div>
        </div>

        <div class="feature-block">
          <div class="holder">
            <ul>

              <li>
                <a href="#">
                  <span class="ico">
                    <script src="https://cdn.lordicon.com/lordicon-1.2.0.js"></script>
                    <lord-icon src="https://cdn.lordicon.com/tdtlrbly.json" trigger="loop-on-hover" stroke="bold"
                      colors="primary:#848484,secondary:#848484" style="width:40px;height:40px">
                    </lord-icon>
                  </span>
                  <span class="info">Hà Nội</span>
                </a>
              </li>

              <li>
                <a href="#">
                  <span class="ico">
                    <script src="https://cdn.lordicon.com/lordicon-1.2.0.js"></script>
                    <lord-icon src="https://cdn.lordicon.com/tdtlrbly.json" trigger="loop-on-hover" stroke="bold"
                      colors="primary:#848484,secondary:#848484" style="width:40px;height:40px">
                    </lord-icon>
                  </span>
                  <span class="info">TP.HCM</span>
                </a>
              </li>

              <li>
                <a href="#">
                  <span class="ico">
                    <script src="https://cdn.lordicon.com/lordicon-1.2.0.js"></script>
                    <lord-icon src="https://cdn.lordicon.com/tdtlrbly.json" trigger="loop-on-hover" stroke="bold"
                      colors="primary:#848484,secondary:#848484" style="width:40px;height:40px">
                    </lord-icon>
                  </span>
                  <span class="info">Nha Trang</span>
                </a>
              </li>

              <li>
                <a href="#">
                  <span class="ico">
                    <script src="https://cdn.lordicon.com/lordicon-1.2.0.js"></script>
                    <lord-icon src="https://cdn.lordicon.com/tdtlrbly.json" trigger="loop-on-hover" stroke="bold"
                      colors="primary:#848484,secondary:#848484" style="width:40px;height:40px">
                    </lord-icon>
                  </span>
                  <span class="info">Đà Nẵng</span>
                </a>
              </li>

              <li>
                <a href="#">
                  <span class="ico">
                    <script src="https://cdn.lordicon.com/lordicon-1.2.0.js"></script>
                    <lord-icon src="https://cdn.lordicon.com/tdtlrbly.json" trigger="loop-on-hover" stroke="bold"
                      colors="primary:#848484,secondary:#848484" style="width:40px;height:40px">
                    </lord-icon>
                  </span>
                  <span class="info">Hội An</span>
                </a>
              </li>

              <li>
                <a href="#">
                  <span class="ico">
                    <script src="https://cdn.lordicon.com/lordicon-1.2.0.js"></script>
                    <lord-icon src="https://cdn.lordicon.com/tdtlrbly.json" trigger="loop-on-hover" stroke="bold"
                      colors="primary:#848484,secondary:#848484" style="width:40px;height:40px">
                    </lord-icon>
                  </span>
                  <span class="info">Huế</span>
                </a>
              </li>

              <li>
                <a href="#">
                  <span class="ico">
                    <script src="https://cdn.lordicon.com/lordicon-1.2.0.js"></script>
                    <lord-icon src="https://cdn.lordicon.com/tdtlrbly.json" trigger="loop-on-hover" stroke="bold"
                      colors="primary:#848484,secondary:#848484" style="width:40px;height:40px">
                    </lord-icon>
                  </span>
                  <span class="info">Hạ Long</span>
                </a>
              </li>

              <li>
                <a href="#">
                  <span class="ico">
                    <script src="https://cdn.lordicon.com/lordicon-1.2.0.js"></script>
                    <lord-icon src="https://cdn.lordicon.com/tdtlrbly.json" trigger="loop-on-hover" stroke="bold"
                      colors="primary:#848484,secondary:#848484" style="width:40px;height:40px">
                    </lord-icon>
                  </span>
                  <span class="info">Phú Quốc</span>
                </a>
              </li>

            </ul>
          </div>
        </div>

      </div>