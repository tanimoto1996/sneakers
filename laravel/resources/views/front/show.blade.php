@extends('front.layouts.base')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/front/show.css') }}">

@endsection

@section('content')
<section id="notice">
  <div class="item">
    <img src="{{ asset('assets/image/front/feature1.jpg') }}" alt="">
    <div class="container">
      <div class="title">{{ $notice->title }}</div>
      <p class="text">{{ $notice->body }}</p>
      <div class="date-time">{{ $notice->published_at->format('Y年m月d日') }}</div>
    </div>
  </div>
</section>
@endsection

@section('js')
<script src="{{ asset('assets/js/front/show.js') }}"></script>
@endsection
