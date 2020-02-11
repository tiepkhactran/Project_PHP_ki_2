<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
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
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("button[value='hien1']").click(function() {
                $("#info1").slideDown(function() {});
            })
            $("button[value='an1']").click(function() {
                $("#info1").slideUp(function() {});
            })
        })
    </script>
    <script>
        $(document).ready(function() {
            $("button[value='hien2']").click(function() {
                $("#info2").slideDown(function() {});
            })
            $("button[value='an2']").click(function() {
                $("#info2").slideUp(function() {});
            })
        })
    </script>
    <script>
        $(document).ready(function() {
            $("button[value='hien3']").click(function() {
                $("#info3").slideDown(function() {});
            })
            $("button[value='an3']").click(function() {
                $("#info3").slideUp(function() {});
            })
        })
    </script>
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

    <!--================ Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2>About Us</h2>
                    <p>Give-AID is a global federation working for a world free from poverty and injustice</p>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Home Banner Area =================-->

    <!--================ Start About Us Area =================-->
    <section class="about_area section_gap">
        <div class="container">
            <div class="row">
                <div class="single_about row">
                    <div class="col-lg-6 col-md-12 text-center about_left">
                        <div class="about_thumb">
                            <img src="../client/img/about-img.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 about_right">
                        <div class="about_content">
                            <h3 class="text-success">
                                Organization History
                            </h3>
                            <p>
                                Give-AID was founded as a charity in 2000.
                                Our head office is in Ha Noi, Viet Nam.
                                We also have hubs in Asia, the Americas and Europe
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-outline-warning btn-sm" value="hien1">Learn More</button>
                                </div>
                            </p>
                            <h3 class="text-success">
                                Mission & Strategy
                            </h3>
                            <p>
                                We work to achieve social justice, to eradicate poverty.
                                Build international momentum for social,
                                economic and environmental
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-outline-warning btn-sm" value="hien2">Learn More</button>
                                </div>
                            </p>
                            <h3 class="text-success">
                                Long-Term Development
                            </h3>
                            <p>
                                People can escape poverty - permanently. </br>
                                We stay to help people to rebuild their lives.
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-outline-warning btn-sm" value="hien3">Learn More</button>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!--================Info =================-->
            <div class="card mt-50" id="info1">
                <div class="card-header">
                    <h3 class="text-success">Organization History<button type="button" class="float-right btn btn-outline-warning btn-sm" value="an1">Shorten</button></h3>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Established history</h5>
                    <p class="card-text">Give-AID was founded as a charity in 1972. In the 1990s, we adopted a human rights-based
                        approach to development. In 2003, we established the Give-AID International federation.
                        Our head office is in Ha Noi, Viet Nam. We also have hubs in Asia, the Americas and Europe.</p>
                    <h5 class="card-title">Our website</h5>
                    <p class="card-text">This is our international website, where we share inspiring stories from around
                        the federation, bold thought-leadership and practical tools that catalyse change. You can visit any of our websites to find out
                        more about the work of Give-AID offices around the world, and how you can get involved.</p>
                </div>
            </div>
            <div class="card mt-25" id="info2">
                <div class="card-header">
                    <h3 class="text-success">Mission & Strategy<button type="button" class="float-right btn btn-outline-warning btn-sm" value="an2">Shorten</button></h3>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Our Mission</h5>
                    <p class="card-text">Give_AID is a global federation working for a world free from poverty and injustice.
                        We want to see a just, fair and sustainable world, in which everybody enjoys the right to a life of dignity, and freedom from poverty and oppression.
                        So we work to achieve social justice and gender equality, and to eradicate poverty.Our work falls into four broad areas: support the poor, children, people with disabilities and homeless.</p>
                    <h5 class="card-title">Our Strategy</h5>
                    <p class="card-text">Our strategy is to build international momentum for social, economic and environmental justice, driven by people living in poverty and exclusion.
                        In practice, this means working closely with people living in poverty and exclusion, civil society organisations, social movements and supporters. Together, we deliver grassroots programmes,
                        provide emergency relief and campaign for things such as economic rights, tax justice and climate justice.</p>
                </div>
            </div>
            <div class="card mt-25" id="info3">
                <div class="card-header">
                    <h3 class="text-success">Long-Term Development<button type="button" class="float-right btn btn-outline-warning btn-sm" value="an3">Shorten</button></h3>
                </div>
                <div class="card-body">
                    <h5 class="card-title">People can escape poverty - permanently</h5>
                    <p class="card-text">We think that everybody, every day, should be able to eat, drink, earn and learn. We make sure they can. We foster self-sufficiency.
                        When people have the power to claim their basic human rights, they can escape poverty - permanently.
                        This is the core belief that underpins our development programs in more than 90 countries.</p>
                    <h5 class="card-title">We stay to help people to rebuild their lives.</h5>
                    <p class="card-text">When a natural disaster strikes or a conflict erupts, we give
                        immediate lifesaving assistance – but when that crisis passes, we will invariably stay to help. We work with people to rebuild their
                        lives, secure jobs and livelihoods, and plan a better future for their families.
                        We also campaign for social justice to encourage pro-poor development policies, in order to end the causes of poverty.
                        Our long-term development work is mainly done with local organizations and partners.</p>
                </div>
            </div>
            <!--================ End Info =================-->

        </div>
    </section>
    <!--================ End About Us Area =================-->


    <!--================Team Area =================-->
    <section class="team_area section_gap">
        <div class="container">
            <div class="main_title">
                <h2>Our Developer & Manager</h2>
                <p>Those who created Give-AID and continuously developed Give-AID for lofty ideals</p>
            </div>
            <div class="row team_inner">
                <div class="col-sm">
                    <div class="team_item">
                        <div class="team_img">
                            <img class="img-fluid" src="../client/img/voluteer/1.jpg" alt="">
                        </div>
                        <div class="team_name">
                            <h4>Khắc Tiệp</h4>
                            <p>Marketing Manager</p>
                            <div class="social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="active"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-envelope-o"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm">
                    <div class="team_item">
                        <div class="team_img">
                            <img class="img-fluid" src="../client/img/voluteer/2.jpg" alt="">
                        </div>
                        <div class="team_name">
                            <h4>Lan Hương</h4>
                            <p>Managing Director</p>
                            <div class="social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="active"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-envelope-o"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm">
                    <div class="team_item">
                        <div class="team_img">
                            <img class="img-fluid" src="../client/img/voluteer/3.jpg" alt="">
                        </div>
                        <div class="team_name">
                            <h4>Thanh Tùng</h4>
                            <p>Business Manager</p>
                            <div class="social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="active"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-envelope-o"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm">
                    <div class="team_item">
                        <div class="team_img">
                            <img class="img-fluid" src="../client/img/voluteer/4.jpg" alt="">
                        </div>
                        <div class="team_name">
                            <h4>Giang Nguyễn</h4>
                            <p>Development Manager</p>
                            <div class="social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="active"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-envelope-o"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm">
                    <div class="team_item">
                        <div class="team_img">
                            <img class="img-fluid" src="../client/img/voluteer/5.jpg" style="height:cover" alt="">
                        </div>
                        <div class="team_name">
                            <h4>Chiến Vũ</h4>
                            <p>Customer Care</p>
                            <div class="social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="active"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-envelope-o"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!--================ Start Clients Logo Area =================-->
        <section class="clients_logo_area section_gap_logo">
            <div class="main_title">
                <h2>Our typical partners</h2>
            </div>
            <div class="container">
                <div class="row clients_slider">
                    <div class="col-sm item_logo">
                        <a href="#"><img src="../client/img/clients-logo/c-logo-1.png" alt=""></a>
                        <h5>Country: USA</h5>
                        <p>Support the poor</p>
                    </div>
                    <div class="col-sm item_logo">
                        <a href="#"><img src="../client/img/clients-logo/c-logo-2.png" alt=""></a>
                        <h5>Country: Canada</h5>
                        <p>Support children</p>
                    </div>
                    <div class="col-sm item_logo">
                        <a href="#"><img src="../client/img/clients-logo/c-logo-3.png" alt=""></a>
                        <h5>Country: England</h5>
                        <p>Support people disabilities</p>
                    </div>
                    <div class="col-sm item_logo">
                        <a href="#"><img src="../client/img/clients-logo/c-logo-4.png" alt=""></a>
                        <h5>Country: Japan</h5>
                        <p>Support homeless</p>
                    </div>
                    <div class="col-sm item_logo">
                        <a href="#"><img src="../client/img/clients-logo/c-logo-5.png" alt=""></a>
                        <h5>Country: Viet Nam</h5>
                        <p>Support the poor</p>
                    </div>
                </div>
            </div>
        </section>
        <!--================ End Clients Logo Area =================-->

    </section>

    <!--================End Team Area =================-->

    <!--================ Start CTA Area =================-->
    <div class="cta-area section_gap overlay">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <h1>Let's Join Hands !!!</h1>
                    <p>
                        We want to see a just, fair and sustainable world, in which everybody
                        enjoys the right to a life of dignity, and freedom from poverty and oppression. </br>
                        We believe in the power in people. If we can support people to know,
                        claim and defend their rights, the world will be a fairer place.
                    </p>
                    <a href="#" class="primary_btn yellow_btn rounded">join with us</a>
                </div>
            </div>
        </div>
    </div>
    <!--================ End CTA Area =================-->


    <!--================ Start footer Area  =================-->
    <footer>
        <div class="footer-area">
            <div class="container">
                <div class="row section_gap">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                            <h4 class="footer_title large_title">Ou>
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
                                    <li><img src="../public/client/img/gallery/g3.jpg" alt=""></li>
                                    <li><img src="../public/client/img/gallery/g4.jpg" alt=""></li>
                                    <li><img src="../public/client/img/gallery/g5.jpg" alt=""></li>
                                    <li><img src="../public/client/img/gallery/g6.jpg" alt=""></li>
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