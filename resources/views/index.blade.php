@extends('layouts.master')

@section('title','Clean Blog')
@section('title_text','A Blog Theme by Start Bootstrap')

@push('img','img/home-bg.jpg')

@section('content')

@foreach($posts as $post)
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">

      <div class="post-preview">
        <a href="{{url('/post/'.$post->id.'/show')}}">
          <h2 class="post-title">
            {{ $post->title }}
          </h2>
          <h3 class="post-subtitle">
            {!!  \Illuminate\Support\str::limit(strip_tags($post->details),50)   !!}
          </h3>
        </a>
        <p class="post-meta">Posted by
          <a href="#">Start Bootstrap</a>
          on {{ $post->created_at->diffForHumans() }}</p>
      </div>

      <hr>
      <!-- Pager -->
      <div class="clearfix">

{{--        <a class="btn btn-primary float-right" href="{{url('/check')}}">Older &rarr;</a>--}}
      </div>
    </div>
  </div>



@endforeach

{{--  {{ $posts->links() }}--}}

@endsection