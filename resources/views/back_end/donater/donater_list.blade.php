
@extends("back_end\index_layout")
@section("main_content")

    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Causes </h3>
            </div>


        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>List of Cause </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li>
                                <td><a class="btn btn-primary btn-lg" href="{{url("back/donater/create")}}">Create new cause</a> </td>
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
                                <th>Cause Name</th>
                                <th>Member Name</th>
                                <th>Money</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($donaters as $donater)
                                <tr>
                                    <td>{{$donater->donater_id}}</td>
                                    <td>
                                        @if ($donater->cause_id==1) Support The Poor @endif
                                        @if ($donater->cause_id==2) Support Children  @endif
                                        @if ($donater->cause_id==3) Support People Disabilities  @endif
                                        @if ($donater->cause_id==4) Support Homless  @endif
                                    </td>
                                    <td>{{$donater->member_name}}</td>
                                    <td>{{$donater->donater_money}}</td>
                                    <td>{{$donater->created_at}}</td>
                                    <td>{{$donater->updated_at}}</td>
                                    <td><a class="btn btn-warning" href="{{url("back/donater/edit?donater_id=".$donater->donater_id)}}">Edit</a> </td>
                                    <td><a class="btn btn-danger" onclick="return confirm('Are you sure?');" href="{{url("back/donater/delete/".$donater->donater_id)}}">Delete</a> </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    {!! $donaters->links() !!}
                </div>
            </div>
        </div>
    </div>

@endsection






