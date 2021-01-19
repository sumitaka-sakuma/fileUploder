@extends('layouts.master_insert')
@section('title', 'Laravel チュートリアル（初級）')
 
  <h3></h3>
  <p><span class="label label-danger">入力画面</span></p>
 
<form action="" method="post" class="form-horizontal">
 
  <div class="row">
    <label class="col-sm-2 control-label" for="username">名前：</label>
    <div class="col-sm-10">{{ $uploader }}</div>
  </div>
  <div class="row">
    <label class="col-sm-2 control-label" for="mail">サムネイル画像</label>
    <div class="col-sm-10"></div>
  </div>
    <div class="row">
     <div class="col-sm-offset-2 col-sm-10">
     <input type="submit" name="button1" value="確認" class="btn btn-primary btn-wide" />
    </div>
  </div>
</form>
@endsection
