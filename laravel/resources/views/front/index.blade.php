@extends('front.layouts.base')
@section('css')
<!-- slickスライダー -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
<link rel="stylesheet" href="{{ asset('assets/css/front/index.css') }}">

@endsection

@section('content')
<div id="viedo">
  <video id="bg-video" src="{{ asset('assets/movie/front/video.mp4') }}" loop autoplay muted playsinline></video>
</div>

<section id="pickUp">
  <h2 class="section-title">PICKUP</h2>
  <div class="pick-up-images">

  </div>
</section>
@endsection

@section('js')
<!-- slickスライダー -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

<script src="{{ asset('assets/js/front/index.js') }}"></script>
@endsection
