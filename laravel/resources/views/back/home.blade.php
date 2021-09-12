@extends('back.layouts.base')

@section('css')
@endsection

@section('content')

<div class="card w-50 mx-auto mt-5">
  <div class="card-body">
    <div><a href="{{ route('back.index') }}">お知らせの一覧</a></div>
    <div><a href="{{ route('back.create') }}">お知らせの作成</a></div>
    <div><a href="{{ route('back.edit', ['id' => 1]) }}">お知らせの詳細</a></div>
    <div>
      <form action="{{ route('back.destroy', ['id' => 1]) }}" method="post">
        @csrf
        <button type="submit" class="btn btn-danger">お知らせ記事削除</button>
      </form>
    </div>
  </div>
</div>

@endsection
