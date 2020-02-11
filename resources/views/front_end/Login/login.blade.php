<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Existing Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->
    <title>Register/Login</title>
    <link href="{{URL::asset('login/css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all" />

    <!-- Style -->
    <link rel="stylesheet" href="{{URL::asset('login/css/style.css')}}" type="text/css" media="all">

    <!-- Fonts -->
    <link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <!-- //Fonts -->
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
<!-- Head -->
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

<body>
    <!-- <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Login</h2>
                </div>
            </div>
        </div>
    </section> -->

    <section class="causes_area_home">
        <div class="container">
            <div class="main_title">
                <h1 style="color:white;">LOGIN FORM</h1>

                <h1 class="w3layoutscontaineragileits">
                    <h2>Login here</h2>
                    {{-- nếu có message trong session thì hiển thị. Note: chỉ hiện thị 1 lần--}}
                    <div>
                        @if(Session::has("message"))
                        <div class="alert alert-danger " role="alert">
                            <h4>{{Session::get("message")}}</h4>
                        </div>
                        @endif
                    </div>




                    <form action="{{url("front/login")}}" method="post">
                        @csrf
                        <input type="email" name="email" placeholder="EMAIL" required="" value="{{old("email")}}">
                        <input type="password" name="password" placeholder="PASSWORD" required="">
                        <ul class="agileinfotickwthree">
                            <li>
                                <input type="checkbox" id="brand1" value="">
                                <label for="brand1"><span></span>Remember me</label>
                                <a href="#">Forgot password?</a>
                            </li>
                        </ul>
                        <div class="aitssendbuttonw3ls">
                            <input type="submit" value="LOGIN">
                            <br></br>
                            <p> To register new account <span>→</span> <a  href="{{url('/front/registration')}}"> Click Here</a></p>
                            <div class="clear"></div>
                        </div>
                    </form>
            </div>
        </div>
        </div>
    </section>

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
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> FPT APTECH | This project is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="http://localhost/Give_AID/public/home" target="_blank">Give_AID</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>


    <script type="text/javascript" src="{{URL::asset('Login/js/jquery-2.1.4.min.js')}}"></script>

    <!-- pop-up-box-js-file -->
    <script src="{{URL::asset('Login/js/jquery.magnific-popup.js')}}" type="text/javascript"></script>
    <!--//pop-up-box-js-file -->
    <script>
        $(document).ready(function() {
            $('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

        });
    </script>

</body>
<!-- //Body -->

</html>