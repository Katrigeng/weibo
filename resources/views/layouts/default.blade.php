<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title','WeiBo')</title>
  <link rel="stylesheet" href="/css/app.css">
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container_1">
      <a class="navbar-brand" href="/">Weibo App</a>
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="/">帮助</a></li>
        <li class="nav-item"><a class="nav-link" href="/">登录</a></li>
      </ul>
    </div>
  </nav>
  <div class="container">
    @yield('content')
  </div>

</body>
</html>