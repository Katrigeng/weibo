@extends('layouts/default')
@section('title','登录')

@section('content')
  <div class="col-md-8 offset-md-2">
    <div class="card">
      <div class="card-header">
        <h5>登录</h5>
      </div>
      <div class="card-body">

        @include('shared/_validation_errors')

        <form action=" {{ route('login') }} " method="post">

          {{ csrf_field() }}

          <div class="form-group">
            <label for="email">邮箱:</label>
            <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
          </div>

          <div class="form-group">
            <label for="password">密码：</label>
            <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}">
          </div>

          <button type="submit" class="btn btn-primary">登录</button>
        </form>

        <hr>

      <p>还没账号？<a href=" {{ route('signup') }}">现在注册!</a></p>

      </div>
    </div>


  </div>

@endsection
