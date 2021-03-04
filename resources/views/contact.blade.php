
@extends('layouts.master')

@section('title','Contact Me')
@section('title_text','Have questions? I have answers.')

@push('img','img/contact-bg.jpg')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>
                <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
                <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
                <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
{{--                <form  action="{{route('contact')}}" method="POST" >--}}
{{--                    {{csrf_field()}}--}}
{{--                    <div class="control-group">--}}
{{--                        <div class="form-group floating-label-form-group controls">--}}
{{--                            <label>Name</label>--}}
{{--                            <input type="text" class="form-control" name="name" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">--}}
{{--                            <p class="help-block text-danger"></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="control-group">--}}
{{--                        <div class="form-group floating-label-form-group controls">--}}
{{--                            <label>Email Address</label>--}}
{{--                            <input type="email" class="form-control" name="email" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">--}}
{{--                            <p class="help-block text-danger"></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="control-group">--}}
{{--                        <div class="form-group col-xs-12 floating-label-form-group controls">--}}
{{--                            <label>Phone Number</label>--}}
{{--                            <input type="tel" class="form-control" name="number" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">--}}
{{--                            <p class="help-block text-danger"></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="control-group">--}}
{{--                        <div class="form-group floating-label-form-group controls">--}}
{{--                            <label>Message</label>--}}
{{--                            <textarea rows="5" class="form-control" name="message" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>--}}
{{--                            <p class="help-block text-danger"></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <br>--}}
{{--                    <div id="success"></div>--}}
{{--                    <div class="form-group">--}}
{{--                        <input type="submit" class="btn btn-primary" >Send</input>--}}
{{--                    </div>--}}
{{--                </form>--}}



                <form class="form-group" action="{{asset('/contacts')}}" method="POST">
                    {{csrf_field()}}
                    <input class="form-control" type="text" name="name" placeholder="username"><br>
                    <input class="form-control" type="email" name="email" placeholder="email"><br>
                    <input class="form-control" type="number" name="number" placeholder="password"><br>
                    <input class="form-control" type="message" name="message" placeholder="confirm password"><br>
                    <input type="submit"  class="btn btn-primary" name="submit" value="Send">
                </form>
{{--                <a href="{{route('user.message')}}">sdggsd</a>--}}
            </div>
        </div>
    </div>





    {{--    {{ $posts->links() }}--}}

@endsection
