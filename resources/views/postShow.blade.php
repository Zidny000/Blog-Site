@extends('layouts.master')

@section('title',$post->title)
@section('title_text','A Blog Theme by Start Bootstrap')

@push('img'){{asset('img/post-bg.jpg')}}@endpush

@section('content')


        <div class="artical">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        {!! $post->details !!}
                    </div>
                </div>
            </div>
        </div>





@endsection
