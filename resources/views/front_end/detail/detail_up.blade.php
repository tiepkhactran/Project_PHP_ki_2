<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Detail Event</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{URL::asset('client/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{URL::asset('client/vendors/linericon/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('client/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('client/vendors/lightbox/simpleLightbox.css')}}">
    <link rel="stylesheet" href="{{URL::asset('client/vendors/nice-select/css/nice-select.css')}}">
    <!-- main css -->
    <link rel="stylesheet" href="{{URL::asset('client/css/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('client/css/responsive.css')}}">
    <link rel="stylesheet" href="{{URL::asset('detail/css/style1.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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
                    <h2>Detail Event</h2>
                    <p>Crisis in Yemen: Help us save lives</p>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Home Banner Area =================-->

    <!--================ Detail =================-->
    <section class="detail">
        <div class="container">
            <div id="content-inner" class="content-inner-wrapper">
                <article class="ox-1col-5 node-9769 node node-story view-mode-full clearfix">
                    <header>
                        <h2 class="title">Crisis in Yemen: Help us save lives</h2>
                        <hr size="7px" color="#ff0000" />
                    </header>

                    <section class="content">
                        <p>Famine is imminent. It could happen any time... People have sold all their belongings and they have nothing more to sell in order to get food</p>
                        <div class="field field-name-main-picture-caption">
                            <figure class="field field-name-main-picture-caption">
                                <img typeof="foaf:Image" src="../detail/img/4.jpg" width="1110" alt="" title="">
                                <em>Yahya* lives in one room with his family and all their possessions.
                                    They need to walk for two hours to reach water wells, which are often contaminated by cholera.</em>
                            </figure>
                        </div>
                        <div class="field field-name-body">

                            <p>Four years of devastating conflict have plunged Yemen into one of the world's gravest
                                humanitarian crises. The country is on the brink of famine and is also now suffering the largest ever
                                outbreak of cholera since records began. We are delivering emergency aid but we urgently need your help to do more.</p>
                            <div style="height:10px;"></div>
                            <div class="look">
                                <h2>A brutal and devastating conflict</h2>
                                <hr size="7px" color="#f28b2b" />
                            </div>
                            <p><span class="inequality-number">17,000 </span>The people of Yemen are experiencing one of the world’s worst humanitarian crises.
                                The conflict between a Saudi-led coalition of Gulf countries and the Government of Yemen against the Ansar-Allah movement (also known
                                as the Houthis), which escalated in March 2015, has so far caused more than 17,000 civilian deaths and injuries.</p>
                            <p><span class="inequality-number">24 M </span>Over three million people have been forced to flee their homes due to the bombing and fighting.
                                24 million people – 80 percent of Yemen population – need emergency aid, the greatest number in any country in the world.</p>
                            <p></p>
                            <div style="height:20px;"></div>
                            <div class="media media-element-container media-default">
                                <div id="file-20360" class="file file-image file-image-jpeg">
                                    <div class="content">
                                        <img height="500" width="1110" class="media-element file-default" data-delta="1" typeof="foaf:Image" src="../detail/img/5.jpg" alt=""> </div>


                                </div>
                            </div>
                            <em>IDPs collecting water from the water distributions point at the Al-Manjorah camp, in Hajjah governorate.
                                With no source of water in the surroundings, nearly 20,000
                                people benefit from Oxfam’s water trucking project in the camp. Photo: Moayed Al.</em>
                            <div style="height:20px;"></div>
                            <p></p>
                            <div class="look">
                                <h2>Famine is threatening, cholera on the rise</h2>
                                <hr size="7px" color="#f28b2b" />
                            </div>
                            <p><span class="inequality-number">90% </span>The country’s economy has been shattered. Countless homes, warehouses, farms and
                                vital parts of civilian infrastructure have been destroyed. Basic services, like health or water supply, are collapsing. The flow
                                of food – nearly 90 percent of which had to be imported even before the conflict started - has been massively disrupted by the warring
                                parties. Prices are continuing to rise, while many of the poorest people have lost their incomes.</p>
                            <p><span class="inequality-number">20 M </span>Now an estimated 20 million Yemenis, 60 percent of the population, are suffering from
                                food insecurity and malnutrition, including 2 million children. According to the UN, 14 million people – half the population – face
                                a clear and present danger of imminent famine.</p>
                            <p><span class="inequality-number">1.3 M </span>Besides, Yemen is facing the world’s worst ever recorded cholera outbreak, which has
                                spread to nearly every corner of the war-ravaged country. More than 1.3 million cases have been reported and at least 2,700 people
                                have died since the start of the epidemic. Many more are now at risk, already weakened by hunger and the effects of the ongoing war.</p>
                            <div style="height:20px;"></div>
                            <h2>Our response</h2>
                            <hr size="7px" color="#f28b2b" />
                            <p>We are delivering essential aid in the north and south of the country and have reached more than 3 million people across the frontlines, since July 2015.</p>
                            <div class="accentbox">
                                <ul> Help includes:
                                    <div style="height:10px;"></div>
                                    <li>Clean water and sanitation services, including in hard-to-reach areas of the country, by trucking drinking water, repairing water systems and building latrines</li>
                                    <li>Supporting families with cash payments to buy food in the local market or livestock, and cash for work programs, so they get a possible source of income</li>
                                </ul>
                            </div>
                            <p>In response to the cholera outbreak, we have directly supported more than 430,000 people from four governorates in coordination with other international agencies. We are delivering
                                clean water, filters, jerry cans, building latrines and organizing hygiene awareness programs.</p>
                            <div style="height:20px;"></div>
                            <div class="content">
                                <iframe width="1110" height="500" src="https://www.youtube.com/embed/6PL6Yz1a4DI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div style="height:10px;"></div>
                            <h2>Help us do more, donate now</h2>
                            <hr size="7px" color="#f28b2b" />
                            <p>Yemen faces the triple threat of war, disease and hunger. Continuing conflict, airstrikes and restrictions on imports have left 14 million people facing famine. For millions of Yemeni women, men and children, life remains a daily struggle and violence a constant threat.</p>
                            <p> <strong>We are on the ground distributing life-saving aid, but we urgently need to reach more people and we can’t do it without you.</strong> </p>
                            <p></p>
                            <div class="field-collection-container clearfix">
                                <div class="field field-name-field-call-to-action">


                                    <div class="field-collection-view clearfix view-mode-full field-collection-view-final">
                                        <div class="call-to-action" style="display: block;">
                                            <div style="height:10px;"></div>
                                            <div class="d-flex justify-content-between raised_goal">
                                                <p>The number of people registered to join us: 2730 People</p>
                                                <p><span class="lnr lnr-heart"></span> Donated: 120 Donors</p>
                                            </div>
                                            <div style="height:10px;"></div>
                                            <div class="d-flex justify-content-between donation align-items-center">
                                                <a href="http://localhost/NGO-v3/public/front/registration"> <button class="btn btn-outline-info btn-lg">Join Our Fight Against Poverty </button></a>
                                                <a href="#"><button type="button" class="btn btn-outline-info btn-lg">Donate Now</button></a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>&nbsp;<p></p>
                        </div>
                    </section><!-- /.content -->

                </article>
            </div>
        </div>
    </section>


    <!--================ End Detail  =================-->

    <!--================ Start Recent Event Area =================-->
    <section class="event_area">
        <div class="container">
            <hr size="2px" />
            <h2 class="title_recent">Related events</h2>

            <div class="row">
                <div class="col-lg-6">
                    <div class="single_event">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <figure>
                                    <img class="img-fluid w-100" src="../client/img/children/ev1.jpg" alt="">
                                    <div class="img-overlay"></div>
                                </figure>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="content_wrapper">
                                    <h3 class="title">
                                        <a href="event-details.html">Working childreen</a>
                                    </h3>
                                    <p>
                                        Be tree their face won't appear day to waters moved fourth in they're divide don't a you're were man.
                                    </p>
                                    <div class="d-flex justify-content-between raised_goal">
                                        <p>Registered: 2730</p>
                                        <p><span class="lnr lnr-heart"></span> 120 Donors</p>
                                    </div>
                                    <div class="d-flex justify-content-between donation align-items-center">
                                        <a href="http://localhost/NGO-v3/public/front/registration"><button type="button" class="btn btn-outline-success">Register</button></a>
                                        <a href="#"><button type="button" class="btn btn-outline-success">Learn More</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="single_event">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <figure>
                                    <img class="img-fluid w-100" src="../client/img/children/ev2.jpg" alt="">
                                    <div class="img-overlay"></div>
                                </figure>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="content_wrapper">
                                    <h3 class="title">
                                        <a href="event-details.html">Children in Syria</a>
                                    </h3>
                                    <p>
                                        Helping children in Syria is struggling due to war resulting in losing their homes, families and food
                                    </p>
                                    <div class="d-flex justify-content-between raised_goal">
                                        <p>Registered: 3108</p>
                                        <p><span class="lnr lnr-heart"></span> 150 Donors</p>
                                    </div>
                                    <div class="d-flex justify-content-between donation align-items-center">
                                        <a href="http://localhost/NGO-v3/public/front/registration"><button type="button" class="btn btn-outline-success">Register</button></a>
                                        <a href="#"><button type="button" class="btn btn-outline-success">Learn More</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="single_event">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <figure>
                                    <img class="img-fluid w-100" src="../client/img/children/ev3.jpg" alt="">
                                    <div class="img-overlay"></div>
                                </figure>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="content_wrapper">
                                    <h3 class="title">
                                        <a href="event-details.html">Clothes for poor children</a>
                                    </h3>
                                    <p>
                                        Poor children are very deprived of clothing, so donate to help them to have a better life
                                    </p>
                                    <div class="d-flex justify-content-between raised_goal">
                                        <p>Registered: 2466</p>
                                        <p><span class="lnr lnr-heart"></span> 102 Donors</p>
                                    </div>
                                    <div class="d-flex justify-content-between donation align-items-center">
                                        <a href="http://localhost/NGO-v3/public/front/registration"><button type="button" class="btn btn-outline-success">Register</button></a>
                                        <a href="#"><button type="button" class="btn btn-outline-success">Learn More</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="single_event">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <figure>
                                    <img class="img-fluid w-100" src="../client/img/children/ev4.jpg" alt="">
                                    <div class="img-overlay"></div>
                                </figure>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="content_wrapper">
                                    <h3 class="title">
                                        <a href="event-details.html">Foods for poor childreen</a>
                                    </h3>
                                    <p>
                                        Poor children are very deprived of food, so please donate to help them to have a better life
                                    </p>
                                    <div class="d-flex justify-content-between raised_goal">
                                        <p>Registered: 2832</p>
                                        <p><span class="lnr lnr-heart"></span> 178 Donors</p>
                                    </div>
                                    <div class="d-flex justify-content-between donation align-items-center">
                                        <a href="http://localhost/NGO-v3/public/front/registration"><button type="button" class="btn btn-outline-success">Register</button></a>
                                        <a href="#"><button type="button" class="btn btn-outline-success">Learn More</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Recent Event Area =================-->

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
                        </script> FPT APTECH | This project is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="http://localhost/NGO-master/resources/views/front_end/Home.blade.php" target="_blank">Give_AID</a>
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