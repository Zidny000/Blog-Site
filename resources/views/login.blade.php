@extends('layouts.master')

@section('title','Login')
@section('title_text','to explore with me!')

@section('content')

    <div class="register">
        <h2>Login</h2>
        @include('partials.errors')
        <form class="form-group" action="{{route('user.login')}}" method="POST">
            {{csrf_field()}}
            <input class="form-control" type="text" name="name" placeholder="username"><br>
            <input class="form-control" type="password" name="password" placeholder="password"><br>

            <input type="submit"  class="btn btn-primary" name="submit" value="Login">
        </form>
    </div>

@endsection