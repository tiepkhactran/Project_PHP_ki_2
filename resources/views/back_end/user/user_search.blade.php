@extends("back_end\index_layout")
@section("main_content")

        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Users </h3>
                </div>

                <form name="Search" action="{{url("back/user/search")}}" method="post">
                    @csrf
                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                    <input name="searchValue" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-default" type="button">
                                             Go!
                                        </button>
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
                            <h2>List of User </h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li>
                                    <td><a class="btn btn-primary btn-lg" href="{{url("back/user/create")}}">Create new user</a> </td>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>


                        <div class="x_content">
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>User Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Level</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                @if(count($users)==0)
                                    <div class="alert alert-warning" role="alert">
                                        <h4>No Details found. Try to search again !</h4>
                                    </div>
                                @endif

                                @if(count($users)>0)
                                    <div class="alert alert-success" role="alert">
                                        <h4>Found {{$quantity}} results</h4>
                                    </div>
                                @endif

                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->password}}</td>
                                        <td>
                                            @if($user->level==2) Admin

                                            @else
                                                @if($user->level==1) User
                                                @else Guest
                                                @endif
                                            @endif
                                        </td>
                                        <td>
                                            @if($user->status==1) Active @else Deactive @endif
                                        </td>
                                        <td><a class="btn btn-warning" href="{{url("back/user/edit?id=".$user->id)}}">Edit</a> </td>
                                        <td><a class="btn btn-danger" onclick="return confirm('Are you sure?');" href="{{url("user/delete/".$user->id)}}">Delete</a> </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                        {!! $users->appends(['searchValue' => $searchValue])->links() !!}
                    </div>
                </div>
            </div>
        </div>

@endsection