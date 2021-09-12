@extends('back.layouts.base')

@section('css')
@endsection

@section('content')

<div class="card w-50 mx-auto mt-5">
  <div class="card-body">
    <!-- Navigation -->
    <nav class="navbar navbar-light navbar-dark bg-dark">
      <a class="navbar-brand" href="#!">お知らせ記事作成画面</a>
    </nav>

    <!-- Page Content -->
    <div class="container mt-5 p-lg-5 bg-light">

      <form action="{{ route('back.store') }}" method="POST">
        @csrf
        <!--タイトル-->
        <div class="form-row">
          <div class="col-md-12 mb-3">
            <label for="title">タイトル</label>
            <input name="title" type="text" class="form-control" id="title" placeholder="タイトル" value="{{ old('title') }}">
          </div>
        </div>
        <!--/タイトル-->

        <!--コメント-->
        <div class="form-group mb-3">
          <label for="body">コメント</label>
          <textarea class="form-control" name="body" id="body" rows="3" placeholder="コメントの記入をお願いします。">{{ old('body') }}</textarea>
        </div>
        <!--/コメント-->

        <!--ファイル選択-->
        <div class="custom-file mb-3">
          <input type="file" name="image" class="custom-file-input" id="customFile">
          <label class="custom-file-label" for="customFile">ファイル選択...</label>
        </div>
        <!--/ファイル選択-->

        <!-- 公開・非公開 -->
        <div class="form-check">
          <input name="is_public" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="true" checked>
          <label class="form-check-label" for="flexRadioDefault1">
            公開
          </label>
        </div>
        <div class="form-check">
          <input name="is_public" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="false">
          <label class="form-check-label" for="flexRadioDefault2">
            非公開
          </label>
        </div>

        <div class="submit">
          <button type="submit">送信</button>
        </div>

      </form>

    </div><!-- /container -->
  </div>
</div>

@endsection
