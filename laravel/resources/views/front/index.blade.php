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
    <ul class="slider multiple-item">
      <li><img src="{{ asset('assets/image/front/pickup1.jpg') }}" alt=""></li>
      <li><img src="{{ asset('assets/image/front/pickup2.jpg') }}" alt=""></li>
      <li><img src="{{ asset('assets/image/front/pickup3.jpg') }}" alt=""></li>
      <li><img src="{{ asset('assets/image/front/pickup4.jpg') }}" alt=""></li>
      <li><img src="{{ asset('assets/image/front/pickup5.jpg') }}" alt=""></li>
      <li><img src="{{ asset('assets/image/front/pickup6.jpg') }}" alt=""></li>
      <li><img src="{{ asset('assets/image/front/pickup7.jpg') }}" alt=""></li>
      <li><img src="{{ asset('assets/image/front/pickup8.jpg') }}" alt=""></li>
      <li><img src="{{ asset('assets/image/front/pickup9.jpg') }}" alt=""></li>
    </ul>
  </div>
</section>

<section id="notice">
  <h2 class="section-title">NOTICE</h2>
  <div class="notice-articles">
    <div class="item">
      <img src="{{ asset('assets/image/front/feature1.jpg') }}" alt="">
      <div class="container">
        <div class="title">category</div>
        <p class="text">テキストテキストテキストテキスト</p>
        <div class="date-time">日付</div>
      </div>
    </div>
    <div class="item">
      <img src="{{ asset('assets/image/front/feature2.jpg') }}" alt="">
      <div class="container">
        <div class="title">category</div>
        <p class="text">テキストテキストテキストテキスト</p>
        <div class="date-time">日付</div>
      </div>
    </div>
    <div class="item">
      <img src="{{ asset('assets/image/front/feature2.jpg') }}" alt="">
      <div class="container">
        <div class="title">category</div>
        <p class="text">テキストテキストテキストテキスト</p>
        <div class="date-time">日付</div>
      </div>
    </div>
    <div class="item">
      <img src="{{ asset('assets/image/front/feature2.jpg') }}" alt="">
      <div class="container">
        <div class="title">category</div>
        <p class="text">テキストテキストテキストテキスト</p>
        <div class="date-time">日付</div>
      </div>
    </div>
    <div class="item">
      <img src="{{ asset('assets/image/front/feature2.jpg') }}" alt="">
      <div class="container">
        <div class="title">category</div>
        <p class="text">テキストテキストテキストテキスト</p>
        <div class="date-time">日付</div>
      </div>
    </div>
    <div class="item">
      <img src="{{ asset('assets/image/front/feature2.jpg') }}" alt="">
      <div class="container">
        <div class="title">category</div>
        <p class="text">テキストテキストテキストテキスト</p>
        <div class="date-time">日付</div>
      </div>
    </div>
    <div class="item">
      <img src="{{ asset('assets/image/front/feature2.jpg') }}" alt="">
      <div class="container">
        <div class="title">category</div>
        <p class="text">テキストテキストテキストテキスト</p>
        <div class="date-time">日付</div>
      </div>
    </div>
  </div>
</section>
@endsection

@section('js')
<!-- slickスライダー -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

<script src="{{ asset('assets/js/front/index.js') }}"></script>
@endsection
