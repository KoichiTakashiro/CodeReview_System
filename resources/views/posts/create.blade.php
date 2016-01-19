@extends('layouts/app')
  
  @section('content')
  <div class="container">
  	<form action="" method="post">
  		{{ csrf_field() }}
	  	<div class="row">
	  		<p>タイトル：</p>
	  		<input type="text" name="title" class="require">
	  	</div>

	  	<div class="row">
	  		<p>質問：</p>
	  		<textarea name="message" cols="100" rows="5"></textarea>
	  	</div>

	  	<div class="row">
	  		<p>コード（任意）:	 </p>
	  		<textarea name="code" cols="100" rows="30"></textarea>
	  	</div>

	  	<div class="row">
	  		<input type="submit" value="確認画面へ">
	  	</div>
  	</form>
  </div>

  @endsection
