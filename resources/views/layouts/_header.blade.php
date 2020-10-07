<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">Weibo App</a>

    <ul class="navbar-nav">
      @if(Auth::check())
        <li class="nav-item"><a class="nav-link" href="#">用户列表</a></li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" role="button" id="dropdownMenu">
            {{ Auth::user()->name }}
          </a>
          <div class="dropdown-menu dropdown-text" aria-labelledby="dropdownMenu">
            <a href="{{ route('users.show',Auth::user()) }}" class="dropdown-item">个人中心</a>
            <a href="#" class="dropdown-item">编辑资料</a>

            <div class="dropdown-divider"></div>   {{-- 分隔线 --}}

            <a class="dropdown-item" href="">
              <form action="{{ route('logout') }}" method="post">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-danger btn-block">退出</button>
              </form>
            </a>
          </div>
        </li>



      @else
        <li class="nav-item"><a class="nav-link" href="{{ route('help') }}">帮助</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">登录</a></li>
      @endif
    </ul>
  </div>
</nav>
