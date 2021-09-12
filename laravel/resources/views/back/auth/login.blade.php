@extends('back.layouts.base')

@section('css')
@endsection

@section('content')

<div class="card w-50 mx-auto mt-5">
  <div class="card-body">
    <form action="{{ route('login') }}" method="POST">
      @csrf
      @if ($errors->has('email'))
      <span class="invalid-feedback">
        <strong>{{ $errors->first('email') }}</strong>
      </span>
      @endif
      <div class="form-group">
        <label for="exampleInputEmail1">メールアドレス</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      </div>
      @error('password')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
      <div class="form-group">
        <label for="exampleInputPassword1">パスワード</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>

@endsection
