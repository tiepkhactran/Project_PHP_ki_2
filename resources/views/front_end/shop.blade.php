<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Shop</title>

    <!-- Stylesheets -->
    <link href="{{URL::asset('/client/css1/bootstrap.css')}}" rel="stylesheet">
    <link href="{{URL::asset('/client/css1/style.css')}}" rel="stylesheet">
    <link href="{{URL::asset('/client/css1/responsive.css')}}" rel="stylesheet">

    <link rel="shortcut icon" href="{{URL::asset('client/images/favicon.png')}}" type="image/x-icon">
    <link rel="icon" href="{{URL::asset('client/images/favicon.png')}}" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="asset{{"js/respond.js"}}"></script><![endif]-->
    <script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js" charset="UTF-8"></script>
</head>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>About Us</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{URL::asset('client/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{URL::asset('client/vendors/linericon/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('client/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('client/vendors/lightbox/simpleLightbox.css')}}">
    <link rel="stylesheet" href="{{URL::asset('client/vendors/nice-select/css/nice-select.css')}}">
    <!-- main css -->
    <link rel="stylesheet" href="{{URL::asset('client/css/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('client/css/responsive.css')}}">
</head>

<body>
    <header class="header_area">
        <div class="main_menu">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <a class="navbar-brand logo_h" href="{{url('/front/home')}}"><img src="../client/img/logo1.png" style="height:44px;" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                            <ul class="nav navbar-nav menu_nav ml-auto">
                                <li class="nav-item active"><a class="nav-link" href="{{url('/front/home')}}">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('/front/about')}}">About</a></li>
                                <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Causes</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="{{url('/front/causes_poor')}}">Support the poor </a>
                                        <li class="nav-item"><a class="nav-link" href="{{url('/front/causes_child')}}">Support children</a>
                                        <li class="nav-item"><a class="nav-link" href="{{url('/front/causes_disabilities')}}">People with disabilities</a>
                                        <li class="nav-item"><a class="nav-link" href="{{url('/front/causes_homeless')}}">Support Homeless </a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{url('/front/contact')}}">Contact</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('/front/shop')}}">shop</a></li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/front/login')}}">
                                        <?php
                                        if (!isset($_SESSION)) {
                                            session_start();
                                        }
                                        if (isset($_SESSION["member_name"])) {

                                            echo "Hello " . $_SESSION["member_name"];
                                        } else {
                                            echo "Register / Login";
                                        }
                                        ?>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{URL::asset('front/logout')}}">
                                        <?php
                                        if (!isset($_SESSION)) {
                                            session_start();
                                        }
                                        if (isset($_SESSION["member_name"])) {
                                            echo "Log Out";
                                        }
                                        ?>
                                    </a>
                                </li>


                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
            </div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Shop</h2>
                    <p>Buy goods to support these difficult situations across the globe. </p>
                </div>
            </div>
        </div>
    </section>

    <div class="page-wrapper">
        <!--Shop Page Section-->
        <section class="shop-page-section">
            <div class="auto-container">
                <div class="main_title">
                    <h2>Support shop</h2>
                    <p>Buy the smallest things to bring great love to small souls</p>
                </div>
                <div class="row clearfix">

                    <!--Shop Item-->
                    <div class="shop-item col-lg-3 col-md-4 col-sm-6 col-xs-12 wow fadeIn">

                        <div class="inner-box">
                            <div class="image">
                                <img src="../client/images/shop/1.png" alt="" />
                                <div class="ribbon">New</div>
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <ul class="options">
                                                <li><a href="../client/images/shop/1.png" class="lightbox-image"><span class="icon fa fa-eye"></span></a>
                                                </li>
                                                <li><a href="#"><span class="icon fa fa-heart"></span></a></li>
                                                <li><a href="cart.html"><span class="icon fa fa-retweet"></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-box">
                                <div class="clearfix">
                                    <div class="pull-left">
                                        <h3><a href="shop-single.html">Punching Items</a></h3>
                                        <div class="price">$14.00</div>
                                    </div>
                                    <div class="pull-right">
                                        <a href="shop-single.html" class="cart-icon"><span class="fa fa-cart-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Shop Item-->
                    <div class="shop-item col-lg-3 col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="400ms">
                        <div class="inner-box">
                            <div class="image">
                                <img src="../client/images/shop/2.png" alt="" />
                                <div class="ribbon">New</div>
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <ul class="options">
                                                <li><a href="../client/images/shop/2.png" class="lightbox-image"><span class="icon fa fa-eye"></span></a>
                                                </li>
                                                <li><a href="#"><span class="icon fa fa-heart"></span></a></li>
                                                <li><a href="cart.html"><span class="icon fa fa-retweet"></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-box">
                                <div class="clearfix">
                                    <div class="pull-left">
                                        <h3><a href="shop-single.html">Stationary </a></h3>
                                        <div class="price">$25.00</div>
                                    </div>
                                    <div class="pull-right">
                                        <a href="shop-single.html" class="cart-icon"><span class="fa fa-cart-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Shop Item-->
                    <div class="shop-item col-lg-3 col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="800ms">
                        <div class="inner-box">
                            <div class="image">
                                <img src="../client/images/shop/3.png" alt="" />
                                <div class="ribbon">New</div>
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <ul class="options">
                                                <li><a href="../client/images/shop/3.png" class="lightbox-image"><span class="icon fa fa-eye"></span></a>
                                                </li>
                                                <li><a href="#"><span class="icon fa fa-heart"></span></a></li>
                                                <li><a href="cart.html"><span class="icon fa fa-retweet"></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-box">
                                <div class="clearfix">
                                    <div class="pull-left">
                                        <h3><a href="shop-single.html">College Bags</a></h3>
                                        <div class="price">$200.00</div>
                                    </div>
                                    <div class="pull-right">
                                        <a href="shop-single.html" class="cart-icon"><span class="fa fa-cart-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Shop Item-->
                    <div class="shop-item col-lg-3 col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <img src="../client/images/shop/4.png" alt="" />
                                <div class="ribbon">New</div>
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <ul class="options">
                                                <li><a href="../client/images/shop/4.png" class="lightbox-image"><span class="icon fa fa-eye"></span></a>
                                                </li>
                                                <li><a href="#"><span class="icon fa fa-heart"></span></a></li>
                                                <li><a href="cart.html"><span class="icon fa fa-retweet"></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-box">
                                <div class="clearfix">
                                    <div class="pull-left">
                                        <h3><a href="shop-single.html">Physics Books</a></h3>
                                        <div class="price">$250.00</div>
                                    </div>
                                    <div class="pull-right">
                                        <a href="shop-single.html" class="cart-icon"><span class="fa fa-cart-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Shop Item-->
                    <div class="shop-item col-lg-3 col-md-4 col-sm-6 col-xs-12 wow fadeIn">
                        <div class="inner-box">
                            <div class="image">
                                <img src="../client/images/shop/5.png" alt="" />
                                <div class="ribbon">New</div>
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <ul class="options">
                                                <li><a href="../client/images/shop/5.png" class="lightbox-image"><span class="icon fa fa-eye"></span></a>
                                                </li>
                                                <li><a href="#"><span class="icon fa fa-heart"></span></a></li>
                                                <li><a href="cart.html"><span class="icon fa fa-retweet"></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-box">
                                <div class="clearfix">
                                    <div class="pull-left">
                                        <h3><a href="shop-single.html">Stationary</a></h3>
                                        <div class="price">$110.00</div>
                                    </div>
                                    <div class="pull-right">
                                        <a href="shop-single.html" class="cart-icon"><span class="fa fa-cart-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Shop Item-->
                    <div class="shop-item col-lg-3 col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="400ms">
                        <div class="inner-box">
                            <div class="image">
                                <img src="../client/images/shop/6.png" alt="" />
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <ul class="options">
                                                <li><a href="../client/images/shop/6.png" class="lightbox-image"><span class="icon fa fa-eye"></span></a>
                                                </li>
                                                <li><a href="#"><span class="icon fa fa-heart"></span></a></li>
                                                <li><a href="cart.html"><span class="icon fa fa-retweet"></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-box">
                                <div class="clearfix">
                                    <div class="pull-left">
                                        <h3><a href="shop-single.html">Art Pencils</a></h3>
                                        <div class="price">$25.00</div>
                                    </div>
                                    <div class="pull-right">
                                        <a href="shop-single.html" class="cart-icon"><span class="fa fa-cart-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Shop Item-->
                    <div class="shop-item col-lg-3 col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="800ms">
                        <div class="inner-box">
                            <div class="image">
                                <div class="ribbon">New</div>
                                <img src="../client/images/shop/7.png" alt="" />
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <ul class="options">
                                                <li><a href="../client/images/shop/7.png" class="lightbox-image"><span class="icon fa fa-eye"></span></a>
                                                </li>
                                                <li><a href="#"><span class="icon fa fa-heart"></span></a></li>
                                                <li><a href="cart.html"><span class="icon fa fa-retweet"></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-box">
                                <div class="clearfix">
                                    <div class="pull-left">
                                        <h3><a href="shop-single.html">College Bags</a></h3>
                                        <div class="price">$200.00</div>
                                    </div>
                                    <div class="pull-right">
                                        <a href="shop-single.html" class="cart-icon"><span class="fa fa-cart-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Shop Item-->
                    <div class="shop-item col-lg-3 col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <div class="ribbon">New</div>
                                <img src="../client/images/shop/8.png" alt="" />
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <ul class="options">
                                                <li><a href="../client/images/shop/8.png" class="lightbox-image"><span class="icon fa fa-eye"></span></a>
                                                </li>
                                                <li><a href="#"><span class="icon fa fa-heart"></span></a></li>
                                                <li><a href="cart.html"><span class="icon fa fa-retweet"></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-box">
                                <div class="clearfix">
                                    <div class="pull-left">
                                        <h3><a href="shop-single.html">Calculator</a></h3>
                                        <div class="price">$60.00</div>
                                    </div>
                                    <div class="pull-right">
                                        <a href="shop-single.html" class="cart-icon"><span class="fa fa-cart-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Shop Item-->
                    <div class="shop-item col-lg-3 col-md-4 col-sm-6 col-xs-12 wow fadeIn">
                        <div class="inner-box">
                            <div class="image">
                                <div class="ribbon">New</div>
                                <img src="../client/images/shop/9.png" alt="" />
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <ul class="options">
                                                <li><a href="../client/images/shop/9.png" class="lightbox-image"><span class="icon fa fa-eye"></span></a>
                                                </li>
                                                <li><a href="#"><span class="icon fa fa-heart"></span></a></li>
                                                <li><a href="cart.html"><span class="icon fa fa-retweet"></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-box">
                                <div class="clearfix">
                                    <div class="pull-left">
                                        <h3><a href="shop-single.html">Diary </a></h3>
                                        <div class="price">$20.00</div>
                                    </div>
                                    <div class="pull-right">
                                        <a href="shop-single.html" class="cart-icon"><span class="fa fa-cart-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Shop Item-->
                    <div class="shop-item col-lg-3 col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="400ms">
                        <div class="inner-box">
                            <div class="image">
                                <img src="../client/images/shop/10.png" alt="" />
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <ul class="options">
                                                <li><a href="../client/images/shop/10.png" class="lightbox-image"><span class="icon fa fa-eye"></span></a>
                                                </li>
                                                <li><a href="#"><span class="icon fa fa-heart"></span></a></li>
                                                <li><a href="cart.html"><span class="icon fa fa-retweet"></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-box">
                                <div class="clearfix">
                                    <div class="pull-left">
                                        <h3><a href="shop-single.html">Painting Tools</a></h3>
                                        <div class="price">$55.00</div>
                                    </div>
                                    <div class="pull-right">
                                        <a href="shop-single.html" class="cart-icon"><span class="fa fa-cart-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Shop Item-->
                    <div class="shop-item col-lg-3 col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="800ms">
                        <div class="inner-box">
                            <div class="image">
                                <div class="ribbon">New</div>
                                <img src="../client/images/shop/11.png" alt="" />
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <ul class="options">
                                                <li><a href="../client/images/shop/11.png" class="lightbox-image"><span class="icon fa fa-eye"></span></a>
                                                </li>
                                                <li><a href="#"><span class="icon fa fa-heart"></span></a></li>
                                                <li><a href="cart.html"><span class="icon fa fa-retweet"></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-box">
                                <div class="clearfix">
                                    <div class="pull-left">
                                        <h3><a href="shop-single.html">Leather Book</a></h3>
                                        <div class="price">$150.00</div>
                                    </div>
                                    <div class="pull-right">
                                        <a href="shop-single.html" class="cart-icon"><span class="fa fa-cart-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Shop Item-->
                    <div class="shop-item col-lg-3 col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <div class="ribbon">New</div>
                                <img src="../client/images/shop/12.png" alt="" />
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <ul class="options">
                                                <li><a href="../client/images/shop/12.png" class="lightbox-image"><span class="icon fa fa-eye"></span></a>
                                                </li>
                                                <li><a href="#"><span class="icon fa fa-heart"></span></a></li>
                                                <li><a href="cart.html"><span class="icon fa fa-retweet"></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-box">
                                <div class="clearfix">
                                    <div class="pull-left">
                                        <h3><a href="shop-single.html">Basket Ball</a></h3>
                                        <div class="price">$120.00</div>
                                    </div>
                                    <div class="pull-right">
                                        <a href="shop-single.html" class="cart-icon"><span class="fa fa-cart-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!--Styled Pagination-->
                <ul class="styled-pagination text-center">
                    <li><a href="#" class="active">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li class="next"><a href="#">Next</a></li>
                </ul>

            </div>
        </section>

    </div>
    <footer>
        <div class="footer-area">
            <div class="container">
                <div class="row section_gap">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                            <h4 class="footer_title large_title">Our Mission</h4>
                            <p>
                                Our mission is to bring love and give love everywhere, from the smallest
                                action to help those who are more unhappy than us.
                            </p>
                            <p>
                                Join us to have a better world

                            </p>
                        </div>
                    </div>
                    <div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                            <h4 class="footer_title">Quick Links</h4>
                            <ul class="list">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Causes</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget instafeed">
                            <h4 class="footer_title">Gallery</h6>
                                <ul class="list instafeed d-flex flex-wrap">
                                    <li><img src="../client/img/gallery/g1.jpg" alt=""></li>
                                    <li><img src="../client/img/gallery/g2.jpg" alt=""></li>
                                    <li><img src="../client/img/gallery/g3.jpg" alt=""></li>
                                    <li><img src="../client/img/gallery/g4.jpg" alt=""></li>
                                    <li><img src="../client/img/gallery/g5.jpg" alt=""></li>
                                    <li><img src="../client/img/gallery/g6.jpg" alt=""></li>
                                </ul>
                        </div>
                    </div>
                    <div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                            <h4 class="footer_title">Contact Us</h4>
                            <div class="ml-40">
                                <p class="sm-head">
                                    <span class="fa fa-location-arrow"></span>
                                    Head Office
                                </p>
                                <p>8, Ton That Thuyet, My Dinh, Ha Noi</p>

                                <p class="sm-head">
                                    <span class="fa fa-phone"></span>
                                    Phone Number
                                </p>
                                <p>
                                    (+84) 37 73 71 08 <br>
                                    (+84) 37 73 71 08
                                </p>

                                <p class="sm-head">
                                    <span class="fa fa-envelope"></span>
                                    Email
                                </p>
                                <p>
                                    Give_AID@gmail.com <br>
                                    www.Give_AID.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row d-flex">
                    <p class="col-lg-12 footer-text text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> FPT APTECH | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="http://localhost/Give_AID/public/home" target="_blank">Give_AID</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <script src="{{URL::asset('client/js1/jquery.js')}"></script>
    <script src="{{URL::asset('client/js1/bootstrap.min.js')}"></script>
    <script src="{{URL::asset('client/js1/jquery-ui.js')}"></script>
    <script src="{{URL::asset('client/js1/jquery.fancybox.js')}"></script>
    <script src="{{URL::asset('client/js1/owl.js')}"></script>
    <script src="{{URL::asset('client/js1/wow.js')}"></script>
    <script src="{{URL::asset('client/js1/knob.js')}"></script>
    <script src="{{URL::asset('client/js1/appear.js')}"></script>
    <script src="{{URL::asset('client/js1/script.js')}"></script>
</body>

</html>