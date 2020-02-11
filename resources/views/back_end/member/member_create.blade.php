@extends("back_end\index_layout")
@section("main_content")

        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Member</h3>
                </div>

                <form name="Search" action="{{url("back/member/search")}}" method="post">
                    @csrf
                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" name="searchValue" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                        <button  type="submit" class="btn btn-default" type="button">Go!</button>
                                    </span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Create new member </h2>
                            <ul class="nav navbar-right panel_toolbox">

                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <form action="{{url("back/member/create")}}" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left" novalidate>
                                @csrf
                                <span class="section">Personal Info</span>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">
                                        Name
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="name" value="{{old("member_name")}}" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="member_name" placeholder="both name(s) e.g Jon Doe" required="required" type="text">
                                        @if($errors->has("member_name"))
                                            <span class="invalid-feedback " role="alert" style="color:red">
                                            <strong>{{ $errors->first("member_name") }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" id="email" value="{{old("email")}}" name="email" required="required" class="form-control col-md-7 col-xs-12">
                                        @if($errors->has("email"))
                                            <span class="invalid-feedback" role="alert" style="color:red">
                                            <strong>{{ $errors->first("email") }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" >Phone Number <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="email" value="{{old("phoneNumber")}}" name="phoneNumber" required="required" class="form-control col-md-7 col-xs-12">
                                        @if($errors->has("phoneNumber"))
                                            <strong>{{ $errors->first("phoneNumber") }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Birthday <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input  type="date" name="birthday" value="{{old("birthday")}}" class="form-control col-md-7 col-xs-12">
                                        @if($errors->has("birthday"))
                                            <span class="invalid-feedback" role="alert" style="color:red">
                                            <strong>{{ $errors->first("birthday") }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div id="gender" class="btn-group" data-toggle="buttons">
                                            <label >
                                                <input type="radio" name="gender" value="1" checked> &nbsp; Male &nbsp;
                                                <input type="radio" name="gender" value="0" > &nbsp; Femal &nbsp;
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Avartar <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" name="avatar" required="required" class="form-control col-md-7 col-xs-12">
                                        @if($errors->has("avatar"))
                                            <span class="invalid-feedback" role="alert" style="color:red">
                                            <strong>{{ $errors->first("avatar") }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label for="password" class="control-label col-md-3">Password <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="password" type="password" name="password" class="form-control col-md-7 col-xs-12" required="required">
                                        @if($errors->has("password"))
                                            <span class="invalid-feedback" role="alert" style="color:red">
                                            <strong>{{ $errors->first("password") }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Repeat Password <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="password2" type="password" name="repeatPassword" class="form-control col-md-7 col-xs-12" required="required">
                                        @if($errors->has("repeatPassword"))
                                            <span class="invalid-feedback" role="alert" style="color:red">
                                            <strong>{{ $errors->first("repeatPassword") }}</strong>
                                            </span>
                                        @endif


                                    </div>
                                </div>

                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">
                                        <button id="send" type="submit" class="btn btn-success">Submit</button>
                                        <button class="btn btn-primary" type="reset">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection