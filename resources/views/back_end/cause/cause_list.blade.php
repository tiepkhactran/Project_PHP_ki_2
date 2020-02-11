
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
                                <td><a class="btn btn-primary btn-lg" href="{{url("back/cause/create")}}">Create new cause</a> </td>
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
                                <th>Member Name</th>
                                <th>Money</th>
                                <th>Action</th>
                                <th>Action</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($causes as $cause)
                                <tr>
                                    <td>{{$cause->cause_id}}</td>
                                    <td>{{$cause->cause_name}}</td>
                                    <td>{{$cause->cause_money}}</td>
                                    <td><a class="btn btn-success" href="{{url("back/cause/detail?cause_id=".$cause->cause_id)}}">Detail</a> </td>
                                    <td><a class="btn btn-warning" href="{{url("back/cause/edit?cause_id=".$cause->cause_id)}}">Edit</a> </td>
                                    <td><a class="btn btn-danger" onclick="return confirm('Are you sure?');" href="{{url("back/cause/delete/".$cause->cause_id)}}">Delete</a> </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    {!! $causes->links() !!}
                </div>
            </div>
        </div>
    </div>

@endsection






