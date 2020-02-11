<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>Give_AID</title>
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

<!--================ Start Header Menu Area =================-->
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
<!--================ End Header Menu Area =================-->
@yield("main_content")

    <!--================ Start Subscribe Area =================-->
    <div class="container">
        <div class="subscribe_area">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex align-items-center">
                        <h1 class="text-white">Do you have a question?</h1>
                        <div id="mc_embed_signup">
                            <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                <div class="input-group d-flex flex-row">
                                    <input name="EMAIL" placeholder="Your email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                    <button class="ml-10 primary_btn yellow_btn btn sub-btn rounded">SUBSCRIBE</button>
                                </div>
                                <div class="info"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================ End Subscribe Area =================-->

    <!--================ Start footer Area  =================-->
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
                            <h4 class="footer_title">Gallery</h4>
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
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> FPT APTECH | This project is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="http://localhost/Give_AID/public/home" target="_blank">Give_AID</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!--================ End footer Area  =================-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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
</body>

</html>
