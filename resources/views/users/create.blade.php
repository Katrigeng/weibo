@extends('layouts/default')
@section('title','注册')

@section('content')
<div class="container">
  <form method="post" action="">
    <div class="form-group">
      <label for="username"></label>
      <input type="text" class="form-control" name="username" id="username" placeholder="请输入名字">
    </div>
    <div class="form-group">
      <label for="email"></label>
      <input type="text" class="form-control" name="email" id="email" placeholder="请输入邮箱">
    </div>
  </form>
</div>

@endsection
