<!doctype html>
<html lang="en">

<head>
	<title>Registration</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
	<meta name="keywords" content="Official Signup Form Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<link rel="icon" href="img/favicon.png" type="image/png">
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- fonts -->
	<link href="{{URL::asset('fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900')}}" rel="stylesheet">
	<link href="{{URL::asset('fonts.googleapis.com/css?family=Monoton')}}" rel="stylesheet">
	<!-- /fonts -->
	<!-- css -->
	<link href="{{URL::asset('Registration/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{URL::asset('Registration/css/register.css')}}" rel="stylesheet" type='text/css' />
	<!-- /css -->
</head>

<body>

	<h1 class="w3ls">Registration</h1>
	<div class="content-w3ls">
		<div class="content-agile1">
			<h2 class="agileits1"></h2>
			<p class="agileits2"></p>
		</div>
		<div class="content-agile2">



		<form action="{{url("front/registration")}}" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left" novalidate>
				@csrf

				<div class="form-control w3layouts">
					<input type="text" id="text" value="{{old("member_name")}}" name="member_name" placeholder="Name" title="Please enter your name" required="required" >
					@if($errors->has("member_name"))
						<span class="invalid-feedback " role="alert" style="color:red">
                                            <strong>{{ $errors->first("member_name") }}</strong>
                                            </span>
					@endif
				</div>

				<div class="form-control w3layouts">
					<input type="email" id="text" value="{{old("email")}}" name="email" required="required" placeholder="Email" title="Please enter your email">
					@if($errors->has("email"))
						<span class="invalid-feedback" role="alert" style="color:red">
										<strong>{{ $errors->first("email") }}</strong>
										</span>
					@endif
				</div>

				<div class="form-control w3layouts">
					<input id="text" value="{{old("phoneNumber")}}" name="phoneNumber" required="required" placeholder="Phone" title="Please enter your phone">
					@if($errors->has("phoneNumber"))
						<strong>{{ $errors->first("phoneNumber") }}</strong>
						</span>
					@endif
				</div>

{{--				<div class="form-control w3layouts">--}}
{{--						<input  id="text" type="date" name="birthday" value="{{old("birthday")}}" placeholder="Birthday">--}}
{{--						@if($errors->has("birthday"))--}}
{{--							<span class="invalid-feedback" role="alert" style="color:red">--}}
{{--                                  <strong>{{ $errors->first("birthday") }}</strong>--}}
{{--                            </span>--}}
{{--						@endif--}}
{{--				</div>--}}

{{--				<div class="form-control w3layouts">--}}
{{--					<div class="btn-group" data-toggle="buttons">--}}
{{--						<label > Gender--}}
{{--							<input type="radio" name="gender" value="1" checked> &nbsp; Male &nbsp;--}}
{{--							<input type="radio" name="gender" value="0" > &nbsp; Femal &nbsp;--}}
{{--						</label>--}}
{{--					</div>--}}
{{--				</div>--}}



				<div class="form-control w3layouts">
						<input id="text" type="password" name="password" placeholder="Password" value="{{old("password")}}" required="required">
						@if($errors->has("password"))
							<span class="invalid-feedback" role="alert" style="color:red">
                                            <strong>{{ $errors->first("password") }}</strong>
                                            </span>
						@endif

				</div>
				<div class="form-control w3layouts">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<input id="text" type="password" name="repeatPassword" placeholder="Repeat Password" value="{{old("repeatPassword")}}" class="form-control col-md-7 col-xs-12"  required="required">
						@if($errors->has("repeatPassword"))
							<span class="invalid-feedback" role="alert" style="color:red">
                                            <strong>{{ $errors->first("repeatPassword") }}</strong>
                                            </span>
						@endif
					</div>
				</div>

				<div class="item form-group">

					<input id="text" type="file" name="avatar" required="required" placeholder="Avatar">
					@if($errors->has("avatar"))
						<span class="invalid-feedback" role="alert" style="color:red">
                             <strong>{{ $errors->first("avatar") }}</strong>
                        </span>
					@endif

				</div>

				<input id="send" type="submit" class="register" value="Register">
			</form>

			<p class="wthree w3l">Thank you for your contribution !!</p>
		</div>
		<div class="clear"></div>
	</div>
	<p class="copyright w3l">© 2019 Official Registration Form. All Rights Reserved | The copyright belongs to <a href="http://localhost/NGO-master/resources/views/front_end/Home.blade.php">Give-AID</a></p>
</body>

</html>