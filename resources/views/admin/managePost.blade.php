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
                                <th>title</th>

                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $key => $user)
                                <tr>
                                    <td> {{$key + 1}}</td>
                                    <td>{{$user->title}}</td>

                                    <td>

                                        <a class="btn btn-warning btn-sm"  href="{{ url('admin/post/manage/update/'.$user->id) }}">Update</a>

                                        <a class="btn btn-danger btn-sm"  href="{{ url('admin/post/manage/delete/'.$user->id) }}">delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </duv>

@endsection