









@extends("back_end\index_layout")
@section("main_content")

    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Members </h3>
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
                        <h2>List of Member </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li>
                                <td><a class="btn btn-primary btn-lg" href="{{url("back/member/create")}}">Create new member</a> </td>
                            </li>
                        </ul>


                        <div class="clearfix"></div>
                    </div>

                    {{--    nếu có message trong session thì hiển thị. Note: chỉ hiện thị 1 lần--}}
                    @if(Session::has("message"))
                        <div class="alert alert-success " role="alert">
                            <h2>{{Session::get("message")}}</h2>
                        </div>
                    @endif

                    <div class="x_content">

                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Avatar</th>
                                <th>Member Name</th>
                                <th>Email</th>
                                <th>Phone Numeber</th>
                                <th>Gender</th>
                                <th>Birthday</th>
                                <th>Status</th>
                                <th>Action</th>
                                <th>Action</th>
                            </tr>
                            </thead>


                            <tbody>

                            @foreach($members as $member)
                                <tr>
                                    <td>{{$member->member_id}}</td>
                                    <td><img src="{{asset($member->avatar)}}" width="50px" height="50px" /></td>
                                    <td>{{$member->member_name}}</td>
                                    <td>{{$member->email}}</td>
                                    <td>{{$member->phoneNumber}}</td>
                                    <td>
                                        @if($member->gender==1) Male @else Female
                                        @endif
                                    </td>
                                    <td>{{$member->birthday}}</td>
                                    <td>{{$member->status}}</td>
                                    <td><a class="btn btn-warning" href="{{url("back/member/edit?member_id=".$member->member_id)}}">Edit</a> </td>
                                    <td><a class="btn btn-danger" onclick="return confirm('Are you sure?');" href="{{url("back/member/delete/".$member->member_id)}}">Delete</a> </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    {!! $members->links() !!}
                </div>
            </div>
        </div>
    </div>

@endsection






