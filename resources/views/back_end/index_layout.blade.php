<?php
use App\Cause;
use App\Member;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
{{--    <link rel="icon" href="images/favicon.ico" type="image/ico" />--}}
    <link rel="icon" href="{{asset("theme/images/favicon.ico")}}"/>

    <title>Give-AID</title>

    <link rel="stylesheet" href="{{asset("theme/vendors/bootstrap/dist/css/bootstrap.min.css")}}"/>
    <link rel="stylesheet" href="{{asset("theme/vendors/font-awesome/css/font-awesome.min.css")}}"/>
    <link rel="stylesheet" href="{{asset("theme/vendors/nprogress/nprogress.css")}}"/>
    <link rel="stylesheet" href="{{asset("theme/vendors/iCheck/skins/flat/green.css")}}"/>
    <link rel="stylesheet" href="{{asset("theme/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css")}}"/>
    <link rel="stylesheet" href="{{asset("theme/vendors/jqvmap/dist/jqvmap.min.css")}}"/>
    <link rel="stylesheet" href="{{asset("theme/vendors/bootstrap-daterangepicker/daterangepicker.css")}}"/>
    <link rel="stylesheet" href="{{asset("theme/build/css/custom.min.css")}}"/>

    {{--    bao them SP moi--}}
    <script src="https://js.pusher.com/4.4/pusher.min.js"></script>
    <script>

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('{{env("PUSHER_APP_KEY")}}', {
            cluster: '{{env("PUSHER_APP_CLUSTER")}}',
            forceTLS: true
        });

        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function(data) {
            alert("co san pham moi kia");
            console.log("data");
        });
    </script>
    {{--   HET bao them Sp moi--}}


</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">

        <!-- bar-side -->
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Give-AID</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="{{asset("upload/avatar/Tulips.jpg")}}") alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>LEVEL</span>
                        <h2>
                            <?php
                            if(!isset($_SESSION)){ session_start();}

                            if(isset($_SESSION["user_level"])){
                                if($_SESSION["user_level"]==1){
                                    echo "ADMIN";
                                }else{
                                    echo "USER";
                                }
                            }
                            ?>
                        </h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li class="active"><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                <ul >
                                    <li><a href="{{url('back/dashboard')}}">Dashboard</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-edit"></i> User <span class="fa fa-chevron-down"></span></a>
                                <ul >
                                    <li><a href="{{url('back/user')}}">List of User</a></li>
                                    <li><a href="{{url('back/user/create')}}">Form create User</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-desktop"></i> Member <span class="fa fa-chevron-down"></span></a>
                                <ul >
                                    <li><a href="{{url('back/member')}}">List of Member</a></li>
                                    <li><a href="{{url('back/member/create')}}">Form create Member</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-table"></i> Causes <span class="fa fa-chevron-down"></span></a>
                                <ul >
                                    <li><a href="{{url('back/cause')}}">List of Cause</a></li>
                                    <li><a href="{{url('back/cause/create')}}">Form create Cause</a></li>
                                </ul>
                            </li>

                            <li><a><i class="fa fa-clone"></i>Donater <span class="fa fa-chevron-down"></span></a>
                                <ul >
                                    <li><a href="{{url('back/donater')}}">List of Donater</a></li>
                                    <li><a href="{{url('back/donater/create')}}">Form creat donater</a></li>
                                </ul>
                            </li>

{{--                            <li><a><i class="fa fa-bar-chart-o"></i> Category <span class="fa fa-chevron-down"></span></a>--}}
{{--                                <ul >--}}
{{--                                    <li><a href="chartjs.html">List of Category</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
                        </ul>
                    </div>
                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="nav-link" href="{{URL::asset('back/logout')}}">
                                <?php
                                if (!isset($_SESSION)) {
                                    session_start();
                                }
                                if (isset($_SESSION["user_name"])) {
                                    echo "Log Out";
                                }
                                ?>
                            </a>
                        </li>
                        <li class="">
                            <a class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset("upload/avatar/Tulips.jpg")}}" alt="">
                                <?php
                                if(!isset($_SESSION)) { session_start();}
                                if(isset($_SESSION["user_name"])){
                                    echo $_SESSION["user_name"];
                                }
                                ?>
                            </a>
                        </li>

                        <li role="presentation" class="dropdown">
                            <a href="#" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green">6</span>
                            </a>
                            <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                <li>
                                    <a>
                                        <span class="image"><img assess({{"avatar/Penguins.jpg"}}) alt="Profile Image" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img assess({{"avatar/Penguins.jpg"}}) alt="Profile Image" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img assess({{"avatar/Penguins.jpg"}}) alt="Profile Image" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img assess({{"avatar/Penguins.jpg"}}) alt="Profile Image" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <div class="text-center">
                                        <a>
                                            <strong>See All Alerts</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            @yield("main_content")
        </div>

        <!-- /page content -->

        <!-- footer content -->
        <footer >
            <div class="pull-right">
                FPT - Aptech version 2019
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>


<link rel="stylesheet" href="{{asset("js/product.js")}}"/>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

{{--HUONG--}}

<link rel="stylesheet" href="{{asset("theme/vendors/validator/validator.js")}}"/>
<link rel="stylesheet" href="{{asset("theme/vendors/jquery/dist/jquery.min.js")}}"/>
<link rel="stylesheet" href="{{asset("theme/vendors/bootstrap/dist/js/bootstrap.min.js")}}"/>
<link rel="stylesheet" href="{{asset("theme/vendors/fastclick/lib/fastclick.js")}}"/>
<link rel="stylesheet" href="{{asset("theme/vendors/nprogress/nprogress.js")}}"/>
<link rel="stylesheet" href="{{asset("theme/vendors/Chart.js/dist/Chart.min.js")}}"/>
<link rel="stylesheet" href="{{asset("theme/vendors/gauge.js/dist/gauge.min.js")}}"/>
<link rel="stylesheet" href="{{asset("theme/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js")}}"/>
<link rel="stylesheet" href="{{asset("theme/vendors/iCheck/icheck.min.js")}}"/>
<link rel="stylesheet" href="{{asset("theme/vendors/skycons/skycons.js")}}"/>
<link rel="stylesheet" href="{{asset("theme/vendors/Flot/jquery.flot.js")}}"/>
<link rel="stylesheet" href="{{asset("theme/vendors/Flot/jquery.flot.pie.js")}}"/>
<link rel="stylesheet" href="{{asset("theme/vendors/Flot/jquery.flot.time.js")}}"/>
<link rel="stylesheet" href="{{asset("theme/vendors/Flot/jquery.flot.stack.js")}}"/>
<link rel="stylesheet" href="{{asset("theme/vendors/Flot/jquery.flot.resize.js")}}"/>
<link rel="stylesheet" href="{{asset("theme/vendors/flot.orderbars/js/jquery.flot.orderBars.js")}}"/>
<link rel="stylesheet" href="{{asset("theme/vendors/flot-spline/js/jquery.flot.spline.min.js")}}"/>
<link rel="stylesheet" href="{{asset("theme/vendors/flot.curvedlines/curvedLines.js")}}"/>
<link rel="stylesheet" href="{{asset("theme/vendors/DateJS/build/date.js")}}"/>
<link rel="stylesheet" href="{{asset("theme/vendors/jqvmap/dist/jquery.vmap.js")}}"/>
<link rel="stylesheet" href="{{asset("theme/vendors/jqvmap/dist/maps/jquery.vmap.world.js")}}"/>
<link rel="stylesheet" href="{{asset("theme/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js")}}"/>
<link rel="stylesheet" href="{{asset("theme/vendors/moment/min/moment.min.js")}}"/>
<link rel="stylesheet" href="{{asset("theme/vendors/bootstrap-daterangepicker/daterangepicker.js")}}"/>
<link rel="stylesheet" href="{{asset("theme/build/js/custom.min.js")}}"/>



</body>
</html>