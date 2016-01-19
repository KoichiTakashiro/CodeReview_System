@extends('layouts/app')

  @section('content')
  <div class="container">
    <form action="check" method="post">
      <input type="hidden" name="title" value="{{{$data['title']}}}">
      <input type="hidden" name="message" value="{{{$data['message']}}}">
      <input type="hidden" name="code" value="{{{$data['code']}}}">
      {{ csrf_field() }}
      <div class="row">
        <p>タイトル：</p>
        {{{$data['title']}}}
      </div>

      <div class="row">
        <p>質問：</p>
        {{{$data['message']}}}
      </div>

      <div class="row">
        <p>コード（任意）:  </p>
        {{{$data['code']}}}
      </div>

      <div class="row">
        <a href="./create?action=rewrite">&laquo;&nbsp;書き直す</a>｜<input type="submit" value="登録する">
      </div>
    </form>
  </div>

  @endsection
