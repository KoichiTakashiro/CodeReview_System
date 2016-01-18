@extends('layouts/app')
  
  @section('content')

  <div class="container">
    <h2 class="page-header">チェック待ち一覧</h2>
    @foreach($posts as $post)
      <div class="card text-center col-sm-4">{{{ $post->title }}}</div>
    @endforeach
  </div>

  @endsection

