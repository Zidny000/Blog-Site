@extends('layouts.master')

@section('title','Register')
@section('title_text','register here to join me!')

@push('img','img/about-bg.jpg')

@section('content')

    <div class="register">
        <h2>Register Here</h2>
        @include('partials.errors')
        <form class="form-group" action="{{route('user.register')}}" method="POST">
            {{csrf_field()}}
            <input class="form-control" type="text" name="name" placeholder="username"><br>
            <input class="form-control" type="email" name="email" placeholder="email"><br>
            <input class="form-control" type="password" name="password" placeholder="password"><br>
            <input class="form-control" type="password" name="password_confirmation" placeholder="confirm password"><br>
            <input type="submit"  class="btn btn-primary" name="submit" value="register">
        </form>
    </div>

@endsection