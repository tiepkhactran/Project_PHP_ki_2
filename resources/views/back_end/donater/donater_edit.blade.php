@extends("back_end\index_layout")
@section("main_content")

        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Members</h3>
                </div>

                <form name="Search" action="{{url("back/donater/search")}}" method="post">
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
                            <h2>Edit an member </h2>
                            <ul class="nav navbar-right panel_toolbox">

                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <form action="{{url("back/donater/edit")}}" method="post" class="form-horizontal form-label-left" novalidate enctype="multipart/form-data" >
                                @csrf
                                <span class="section">Donate Detail</span>

                                <input type="hidden" name="donater_id" value="{{$donater->donater_id}}"/>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">
                                        Cause
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select name="cause_id" class="form-control">
                                            <option value="">Select Cause</option>
                                            @foreach($causes as $cause)
                                                <option @if($cause->cause_id==$donater->cause_id) selected @endif value="{{$cause->cause_id}}">{{$cause->cause_name}}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->has("cause_id"))
                                            <span class="invalid-feedback " role="alert" style="color:red">
                                            <strong>{{ $errors->first("cause_id") }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Member ID <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select name="member_id" class="form-control">
                                            <option value="">Select Member</option>
                                            @foreach($members as $member)
                                                <option @if($member->member_id==$donater->member_id) selected @endif value="{{$member->member_id}}">{{$member->member_name}}</option>
                                            @endforeach
                                        </select>

                                        @if($errors->has("member_id"))
                                            <span class="invalid-feedback" role="alert" style="color:red">
                                            <strong>{{ $errors->first("member_id") }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" >Amount of Money <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="number" value="{{$donater->donater_money}}" name="donater_money" required="required" class="form-control col-md-7 col-xs-12">
                                        @if($errors->has("donater_money"))
                                            <strong>{{ $errors->first("donater_money") }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>


{{--                                <div class="item form-group">--}}
{{--                                    <label for="status" class="control-label col-md-3 col-sm-3 col-xs-12">Status <span class="required">*</span>--}}
{{--                                    </label>--}}
{{--                                    <div class="col-md-6 col-sm-6 col-xs-12">--}}
{{--                                        <input type="radio" name="status" value="1" checked> &nbsp; Active &nbsp;--}}
{{--                                        <input type="radio" name="status" value="0" > &nbsp; Deactive &nbsp;--}}
{{--                                    </div>--}}
{{--                                </div>--}}

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