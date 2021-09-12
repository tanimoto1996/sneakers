@extends('back.layouts.base')

@section('css')
@endsection

@section('content')

<div class="card w-50 mx-auto mt-5">
  <div class="card-body">
    <?php $count = 0 ?>
    @foreach ($notices as $notice)
    <?php echo $count += 1 ?>{{ $notice->is_public = $notice->is_public ? '公開' : '非公開' }}
    <div>{{ $notice->title }}</div><br>
    <div>{{ $notice->body }}</div><br>
    <a href="{{ route('back.edit', ['id' => $notice->id]) }}">編集</a><br>
    <form action="{{ route('back.destroy', ['id' => $notice->id]) }}" method="post">
      @csrf
      <button type="submit" class="btn btn-danger">お知らせ記事削除</button>
    </form><br><br>
    <input type="hidden" name="published_at" value="{{ $notice->published_at }}">
    @endforeach
  </div>
</div>

@endsection
