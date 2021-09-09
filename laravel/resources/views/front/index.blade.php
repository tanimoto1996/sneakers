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
    @foreach($notices as $notice)
    <div class="item">
      <a href="{{ route('show', ['id' => $notice->id]) }}" style="color: black;">
        <img src="{{ asset('assets/image/front/feature1.jpg') }}" alt="">
        <div class="container">
          <div class="title">{!! nl2br(e(Str::limit($notice->title, 30))) !!}</div>
          <p class="text">{!! nl2br(e(Str::limit($notice->body, 100))) !!}</p>
          <div class="date-time">{{ $notice->published_at->format('Y年m月d日') }}</div>
        </div>
      </a>
    </div>
    @endforeach
  </div>
  {{ $notices->links() }}
</section>

<section id="contact">
  <h2 class="section-title">CONTACT</h2>
  <div class="content">
    <div class="contact-info">
      <p>テキストテキストテキストテキストテキストテキストテキスト</p>
      <p>テキストテキストテキストテキストテキストテキストテキストテキスト
        テキストテキストテキストテキストテキストテキストテキストテキストテキスト
        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
      </p>
      <p>テキストテキストテキストテキストテキストテキストテキストテキストテキスト
        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
      </p>
    </div>
    <div class="contact-form">
      <form action="" method="post">
        <dl>
          <div class="form-content">
            <dt> <label for="name">名前</label></dt>
            <dd><input type="text" id="name" name="name"></dd>
          </div>
          <div class="form-content">
            <dt> <label for="email">メールアドレス</label></dt>
            <dd><input type="mail" id="email" name="email"></dd>
          </div>
          <div class="form-content">
            <dt> <label for="message">内容</label></dt>
            <dd><textarea id="message" name="message"></textarea></dd>
          </div>
        </dl>
        <div class="form-button">
          <input type="submit" value="送信">
        </div>
      </form>
    </div>
  </div>

  <footer>
    <div class="footer-text">©️sneakers</div>
  </footer>
</section>
@endsection

@section('js')
<!-- slickスライダー -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

<script src="{{ asset('assets/js/front/index.js') }}"></script>
@endsection
