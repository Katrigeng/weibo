<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title','WeiBo')</title>
<link rel="stylesheet" href="{{ mix('css/app.css') }}">
<script src="{{ mix('js/app.js') }}"></script>
</head>
<body>
  @include('layouts/_header')

  <div class="container">
    <div class="col-md-10 offset-md-1 ">
      @include('shared/_message')
      @yield('content')
      @include('layouts/_footer')
    </div>

  </div>

</body>
</html>
