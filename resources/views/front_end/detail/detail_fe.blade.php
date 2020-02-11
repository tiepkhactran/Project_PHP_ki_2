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

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{URL::asset('detail/css/style.css')}}">
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
                    <p>South Africa: extreme inequality in numbers</p>
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
                        <h2 class="title">South Africa: extreme inequality in numbers</h2>
                        <hr size="7px" color="#ff0000" />
                    </header>

                    <section class="content">
                        <p>South Africa has had an impressive economic growth in the past two decades. In 2018, the region was home
                            to six of the top 10 fastest growing economies in Africa: Cote d’Ivoire, Senegal, Ghana, Burkina Faso, Benin and Niger.</p>
                        <div class="field field-name-main-picture-caption">
                            <figure class="field field-name-main-picture-caption">
                                <img typeof="foaf:Image" src="../detail/img/1.jpg" width="1110" alt="" title="">
                                <em>Northern Ghana has poverty levels two to three times higher than the national average. The region is covered by
                                    dry savannah land and lacks key infrastructure such as roads and markets.</em>
                            </figure>
                        </div>
                        <div class="field field-name-body">

                            <p>However, for the majority of countries, the benefits of this unprecedented economic growth went to a tiny few. Today, inequality
                                has reached extreme levels in the region. The rich have grown richer while the poor have become even poorer. The region has also
                                the least public health care coverage and the least populations with access to water and decent education.</p>
                            <div style="height:10px;"></div>
                            <div class="look">
                                <h2>Let’s look at the numbers</h2>
                                <hr size="7px" color="#f28b2b" />
                            </div>
                            <p><span class="inequality-number">1% </span>Compared to other regions on the continent, South Africa has the greatest number of countries
                                with more than 30 percent of the population living on less than $1.90 a day. The top one per cent South Africans own more than everyone else combined in the region.</p>
                            <p><span class="inequality-number">$1.25 </span>Five of Nigeria’s richest men have a combined wealth of US$29.9 billion – more than the country’s
                                entire national budget for 2017. However, about 60 per cent of its citizens live on less than US$1.25 a day, the threshold for absolute poverty.</p>
                            <p><span class="inequality-number">1 M </span>In Ghana, South Africa’s second biggest economy, one of the richest men earns more in a month than one of the
                                poorest women could earn in 1,000 years. In the decade ending in 2016, the country added 1,000 US dollar millionaires while nearly one million more people were added to the poverty pool.</p>
                            <p></p>
                            <div style="height:20px;"></div>
                            <div class="media media-element-container media-default">
                                <div id="file-20360" class="file file-image file-image-jpeg">
                                    <div class="content">
                                        <img height="500" width="1110" class="media-element file-default" data-delta="1" typeof="foaf:Image" src="../detail/img/2.jpg" alt=""> </div>


                                </div>
                            </div>
                            <em>South Africa has high rates of child marriage. Niger, Mali and Nigeria are home to the highest number
                                of children married before 18 years in Africa, This endangers the sexual and reproductive health of girls
                                and deprives them of the opportunity to acquire an education</em>
                            <div style="height:20px;"></div>
                            <p></p>
                            <p><span class="inequality-number">$9.6 bn </span>South Africa countries lose an estimated $9.6 billion each year through
                                corporate tax incentives offered to multinational companies. This would be enough to build about 100 modern and well-equipped
                                hospitals each year in the region.</p>
                            <p><span class="inequality-number">70% </span>Inequality is also rife in the provision of public services such as education. Women
                                from rich families in Mali are 15 times more likely to have received a secondary education than women from poor families. An
                                estimated 70% of the poorest girls in Niger have never attended primary school.</p>
                            <p><span class="inequality-number">3.5% </span>In Nigeria, women constitute between 60% and 79% of the rural labour force but
                                they are 10 times less likely to own their own land than men. They represent only 3.5% of the population owning farmland in
                                the country. This level of inequality has negative impacts on women, including making them more vulnerable to gender-based violence.</p>
                            <div style="height:20px;"></div>
                            <h2>How committed are South African governments to reducing inequality?</h2>
                            <hr size="7px" color="#f28b2b" />
                            <p>While a small but growing group becomes fantastically rich, a clear majority of South Africa’s citizens are denied the most essential
                                elements of a dignified life like access to quality education, healthcare and decent jobs. Yet the South African governments are much
                                less committed to reducing inequality than all other regions of the African continent.</p>
                            <div class="accentbox">
                                The <a href="">
                                    <strong>Give_AID’s Commitment to Reducing Inequality Index (CRII) regional report</strong>
                                </a>, which ranks countries according to their commitment to tackle inequality, reveals that the South African’s governments are exacerbating
                                inequality by underfunding public services, such as healthcare and education, while under-taxing corporations and the wealthy.</div>
                            <div style="height:20px;"></div>
                            <div class="content">
                                <iframe width="1110" height="500" src="https://www.youtube.com/embed/4w0_q-Np4x4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div style="height:10px;"></div>
                            <p><strong>Without radically increasing their commitment to reduce inequality, this crisis is likely to worsen. It’s time for
                                    South African governments to act decisively. Unless they significantly close the gap between the richest and the rest, ending
                                    extreme poverty will remain a dream.</strong></p>
                            <p></p>
                            <div class="field-collection-container clearfix">
                                <div class="field field-name-field-call-to-action">


                                    <div class="field-collection-view clearfix view-mode-full field-collection-view-final">
                                        <div class="call-to-action" style="display: block;">
                                            <div style="height:10px;"></div>
                                            <div class="d-flex justify-content-between raised_goal">
                                                <p><span class="lnr lnr-heart"></span> Donated: 120 Donors</p>
                                                <a href="#"><button type="button" class="btn btn-outline-info btn-lg">Continue Donate</button></a>
                                                <p>Achieved: $8.430.000 / Cible: $6.000.000</p>
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

    <!--================ Start Features Area =================-->
    <section class="event_area">
        <div class="container">
            <hr size="2px" />
            <h2 class="title_recent">Related events</h2>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <figure>
                                <img class="card-img-top img-fluid" src="../client/img/children/fc1.jpg" alt="Card image cap">
                            </figure>
                            <div class="card_inner_body">
                                <h4 class="card-title">Education for every child</h4>
                                <p class="card-text">
                                    Be tree their face won't appear day waters moved fourth in they're divide don't a you were man face god.
                                </p>
                                <div class="d-flex justify-content-between raised_goal">
                                    <p>Achieved: $8.430.000</p>
                                    <p>/</p>
                                    <p>Cible: $6.000.000</p>
                                </div>
                                <div class="d-flex justify-content-between donation align-items-center">
                                    <a href="#"><button type="button" class="btn btn-outline-success">Learn More</button></a>
                                    <p><span class="lnr lnr-heart"></span> 1980 Donors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <figure>
                                <img class="card-img-top img-fluid" src="../client/img/children/fc2.jpg" alt="Card image cap">
                            </figure>
                            <div class="card_inner_body">
                                <h4 class="card-title">Help children go school</h4>
                                <p class="card-text">
                                    Help poor children go to school, let them have the opportunity to learn and integrate with the community
                                </p>
                                <div class="d-flex justify-content-between raised_goal">
                                    <p>Achieved: $9.350.000</p>
                                    <p>/</p>
                                    <p>Cible: $8.000.000</p>
                                </div>
                                <div class="d-flex justify-content-between donation align-items-center">
                                    <a href="#"><button type="button" class="btn btn-outline-success">Learn More</button></a>
                                    <p><span class="lnr lnr-heart"></span> 2230 Donors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <figure>
                                <img class="card-img-top img-fluid" src="../client/img/children/fc3.jpg" alt="Card image cap">
                            </figure>
                            <div class="card_inner_body">
                                <h4 class="card-title">Ethnic children</h4>
                                <p class="card-text">
                                    Children in mountainous areas are living in extremely difficult and needy life. Help them have a better life
                                </p>
                                <div class="d-flex justify-content-between raised_goal">
                                    <p>Achieved: $9.890.000</p>
                                    <p>/</p>
                                    <p>Cible: $7.000.000</p>
                                </div>
                                <div class="d-flex justify-content-between donation align-items-center">
                                    <a href="#"><button type="button" class="btn btn-outline-success">Learn More</button></a>
                                    <p><span class="lnr lnr-heart"></span> 2400 Donors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Features Cause section =================-->

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
    <script href="{{URL::asset('client/js/jquery-3.2.1.min.js')}}">
    </script>
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