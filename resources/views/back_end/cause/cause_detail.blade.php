
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
                        <h2>Detail of cause </h2>
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
                                <th>Create At</th>
                                <th>Update At</th>
                                <th>Action</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($donaters as $donater)
                                <tr>
                                    <td>{{$donater->donater_id}}</td>
                                    <td>{{$cause->cause_name}}</td>
                                    <td>{{$donater->member_name}} </td>
                                    <td>{{$donater->donater_money}}</td>
                                    <td>{{$donater->created_at}}</td>
                                    <td>{{$donater->updated_at}}</td>
                                    <td><a class="btn btn-warning" href="{{url("back/donate/edit?donate_id=".$donater->donate_id)}}">Edit</a> </td>
                                    <td><a class="btn btn-danger" onclick="return confirm('Are you sure?');" href="{{url("back/donate/delete/".$donater->donate_id)}}">Delete</a> </td>
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






