@extends('layouts.adminMaster')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Create a Post</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <form action="{{ url('/admin/post/manage/update/confirm/'.$post->id)}}" class="form-group" method="post">
                {{ csrf_field()}}

                <input type="text" name="title" placeholder={{$post->title}}><br><br>
                <textarea name="details" id="image-tools" cols="30" rows="10">{{$post->details}}</textarea><br>
                <input type="submit" name="submit" value="create" class="text-center" >


            </form>
        </div>
    </div>

@endsection