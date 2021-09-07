<!doctype html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ isset($title) ? $title . ' | ' : '' }}Sneaker</title>
  <!-- css -->
  @yield('css')
  <!-- header.css -->
  <link rel="stylesheet" href="{{ asset('assets/css/front/components/header.css') }}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" crossorigin="anonymous">
</head>

<body>
  <div id="app">
    <!-- header -->
    @include('front.components.header')

    <!-- main -->
    <main>
      @yield('content')
    </main>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
  <!-- header -->
  <script src="{{ asset('assets/js/front/components/header.js') }}"></script>
  <!-- js -->
  @yield('js')
</body>

</html>
