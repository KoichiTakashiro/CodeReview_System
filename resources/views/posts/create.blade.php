@extends('layouts/app')

  @section('content')
  <div class="container">
  	<form action="" method="post">
  		{{ csrf_field() }}
	  	<div class="row" style="padding-bottom: 15px;">
	  		<div class="col-sm-12" >
		  		<p>タイトル：</p>
		  		<input type="text" name="title" class="require form-control">
	  		</div>
	  	</div>

	  	<div class="row" style="padding-bottom: 15px;">
	  		<div class="col-sm-12">
	  		<p>質問：</p>
	  			<textarea name="message" cols="100" rows="5" class="form-control"></textarea>
	  		</div>
	  	</div>

	  	<div class="row" style="padding-bottom: 15px;">
	  		<div class="col-sm-12">
		  		<p>コード（任意）:	 </p>
	  			<textarea name="code" cols="100" rows="20" class="form-control"></textarea>
		  	</div>
	  	</div>

	  	<div class="row">
	  		<div class="col-sm-12">
		  		<input type="submit" value="確認画面へ" class="btn btn-default">
		  	</div>
	  	</div>
  	</form>
  </div>

  @endsection
