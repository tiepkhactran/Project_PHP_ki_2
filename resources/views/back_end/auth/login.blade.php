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
                    <a class="navbar-brand logo_h" href="http://localhost/NGO-v3/public/front/home"><img src="../client/img/logo1.png" style="height:44px;" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>
            </nav>
        </div>
    </div>
</header>

<body>


    <section class="causes_area_home">
        <div class="container">
            <div class="main_title">

                <div class="w3layoutscontaineragileits">
                    <h2>Login here</h2>


                    //TIỆP SỬA CHỖ NÀY NHÉ
                    <h3>
                        {{--    nếu có message trong session thì hiển thị. Note: chỉ hiện thị 1 lần--}}
                        @if(Session::has("message"))
                            <div class="alert alert-danger " role="alert">
                                <h2>{{Session::get("message")}}</h2>
                            </div>
                        @endif
                    </h3>


                    <form action="{{url("back/login")}}" method="post">
                        @csrf

                        <input type="email" name="email" placeholder="EMAIL" required="">
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
                            <p> To register new account <span>→</span> <a class="w3_play_icon1" href="#small-dialog1"> Click Here</a></p>
                            <div class="clear"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- for register popup -->
    <div id="small-dialog1" class="mfp-hide">
        <div class="contact-form1">
            <div class="contact-w3-agileits">
                <h3>Register Form</h3>
                <form action="#" method="post">
                    <div class="form-sub-w3ls">
                        <input placeholder="User Name" type="text" required="">
                        <div class="icon-agile">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="form-sub-w3ls">
                        <input placeholder="Email" class="mail" type="email" required="">
                        <div class="icon-agile">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="form-sub-w3ls">
                        <input placeholder="Password" type="password" required="">
                        <div class="icon-agile">
                            <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="form-sub-w3ls">
                        <input placeholder="Confirm Password" type="password" required="">
                        <div class="icon-agile">
                            <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="login-check">
                        <label class="checkbox"><input type="checkbox" name="checkbox" checked="">I Accept Terms & Conditions</label>
                    </div>
                    <div class="submit-w3l">
                        <input type="submit" value="Register">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- //for register popup -->



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