<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html class="supernova">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>donate</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{URL::asset('client/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{URL::asset('client/vendors/linericon/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('client/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('client/vendors/lightbox/simpleLightbox.css')}}">
    <link rel="stylesheet" href="{{URL::asset('client/vendors/nice-select/css/nice-select.css')}}">
    <!-- main css -->
    <link rel="stylesheet" href="{{URL::asset('client/css/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('client/css/responsive.css')}}">
    <style>
        .content {
            text: left;
            padding: center;
            box-sizing: inherit;
            font-weight: 700;
            line-height: 2.0em;
            box-shadow: rgba(0, 0, 0, 0.4) 0px 0px 10px;

            margin-left: 300px;
            margin-right: 300px;
            margin-top: 10px;
            margin-bottom: 10px;
            height: 800px;
            padding-left: 170px;
            padding-top: 50px;


        }

        b {
            color: black;
        }
    </style>
</head>

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
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="banner_content text-center">
                <h2>Donate</h2>
                <p>Give-AID is a global federation working for a world free from poverty and injustice</p>
            </div>
        </div>
    </div>
</section>
<div class="content">
    <p><big><b> Donation </b></big><br />
        Give away the smallest things to make the world better:</p>
    <hr>
    <img src="../client/images/img_3.jpg">
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post">

        <input type="hidden" name="cmd" value="_xclick">
        <input type="hidden" name="business" value="accounts@freelanceswitch.com">
        <strong>Donation / Contribution? </strong><br />
        <select name="item_name">
            <option value="Donation">Donation</option>
            <option value="Contribution">Contribution</option>
        </select>
        <hr>
        <strong>What do you donate for ? </strong><br />
        <select name="item_number">
            <option value="Support the poor">Support the poor </option>
            <option value="Child support">Child support</option>
            <option value="People with disabilities">People with disabilities</option>
            <option value="Support homeless people">Support homeless people</option>
        </select>
        <hr>
        <strong>How much do you want to donate?</strong><br />
        $ <input type="text" name="amount">

        <input type="hidden" name="no_shipping" value="0">
        <input type="hidden" name="no_note" value="1">
        <input type="hidden" name="currency_code" value="USD">
        <input type="hidden" name="lc" value="AU">
        <input type="hidden" name="bn" value="PP-BuyNowBF">
        <input type="hidden" name="return" value="http://net.tutsplus.com/payment-complete/">
        <hr>
        <input type="submit" value="Pay with PayPal!">

    </form>
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
                                <li><img src="img/gallery/g1.jpg" alt=""></li>
                                <li><img src="img/gallery/g2.jpg" alt=""></li>
                                <li><img src="img/gallery/g3.jpg" alt=""></li>
                                <li><img src="img/gallery/g4.jpg" alt=""></li>
                                <li><img src="img/gallery/g5.jpg" alt=""></li>
                                <li><img src="img/gallery/g6.jpg" alt=""></li>
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
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> FPT APTECH | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="http://localhost/Give_AID/public/home" target="_blank">Give_AID</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </div>
</footer>
<script href="{{URL::asset('client/js/jquery-3.2.1.min.js')}}"></script>
<script href="{{URL::asset('client/js/popper.js')}}"></script>
<script href="{{URL::asset('client/js/bootstrap.min.js')}}"></script>
<script href="{{URL::asset('client/js/stellar.js')}}"></script>
<script href="{{URL::asset('client/vendors/lightbox/simpleLightbox.min.js')}}"></script>
<script href="{{URL::asset('client/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
<script href="{{URL::asset('client/js/jquery.ajaxchimp.min.js')}}"></script>
<script href="{{URL::asset('client/js/mail-script.js')}}"></script>
<script href="{{URL::asset('client/js/owl.carousel-about.min.js')}}"></script>
<!-- contact js -->
<script href="{{URL::asset('client/js/jquery.form.js')}}"></script>
<script href="{{URL::asset('client/js/jquery.validate.min.js')}}"></script>
<script href="{{URL::asset('client/js/contact.js')}}"></script>
<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script href="{{URL::asset('client/js/gmaps.min.js')}}"></script>
<script href="{{URL::asset('client/js/theme.js')}}"></script>

</html>
<script type="text/javascript">
    JotForm.ownerView = true;
</script>