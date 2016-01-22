@extends('layouts/app')

  @section('content')

  <div class="container">
    <div class="row center">
      <img src="http://ateliershimada.net/_src/sc139/keihan178.jpg" alt="" style="width: 100% ;">
    </div>
    <h2 class="page-header"></h2>
    <a href="./create">質問を投稿する</a>
    <h2 class="page-header">新着コード一覧</h2>
    @foreach($posts as $post)
      <div class="card text-center col-sm-4"><a href="/codereview/public/posts/show/{{{ $post->id }}}">{{{ $post->title }}}</a></div>
    @endforeach
  </div>

  @endsection

