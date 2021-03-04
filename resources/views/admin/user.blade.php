@extends('layouts.adminMaster')

@section('content')



    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Users Information</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <duv class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive table-bordered">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>User</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            @foreach($users as $key => $user)
                            <tr>
                                <td> {{$key + 1}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <form method="POST" action="{{url('/admin/roleChange')}}">
                                        {{csrf_field()}}
                                        <input type="hidden" name="user_id" value="{{$user->id}}">
                                    <select name="role" id="">
                                        @foreach($userType as $t)
                                            @if($t == $user->role)
                                                <option selected value="{{$user->role}}">{{$t}}</option>
                                            @else
                                                <option value="{{$t}}">{{$t}}</option>

                                            @endif
                                        @endforeach    
                                    </select>
                                    <input type="submit" name="submit" value="update">
                                    </form>
                                </td>

                                <td>
                                    @if($user->verified == 1)
                                        <a class="btn btn-warning btn-sm"  href="{{ url('admin/'.$user->id.'/disable')  }}">disable</a>
                                    @else
                                    <a class="btn btn-success btn-sm"  href="{{  url('admin/'.$user->id.'/enable') }}">enable</a>
                                    @endif



                                    <a class="btn btn-danger btn-sm"  href="">delete</a>
                                </td>
                            </tr>
                            @endforeach

                        </table>
                    </div>

                </div>
            </div>
        </div>
    </duv>

@endsection