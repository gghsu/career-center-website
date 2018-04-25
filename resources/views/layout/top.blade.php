<!DOCTYPE html>
<html>
<head>
<style>
.navbar-light {
  font-family: 'Microsoft JhengHei', Times, serif;
  font-size: 15px;
  background-color: #126398;
}
#topmenu a {
  color: white;
}
#topmenu a:hover {
  color: pink;
  background-color: #126398;
  text-decoration: none;
}
</style>
</head>
<body>
<nav class="navbar navbar-light">
  <div class="container-fluid">
    <ul class="nav navbar-nav" id="topmenu">
      <li><a href="#">CAREER CENTER NCU</a>
      <li style="font-size: 30px;color: white;">｜</li>
      <li><a href="https://www.facebook.com/ncucc/?hc_ref=ARTSstyTZ128og_u0b3ZuHbs3L-Cik1QNlCJ7TPlDDt_ue7Y1WNNv8cfBQBsnARFGIs" target="_blank">Facebook</a></li>
      <li style="font-size: 30px;color: white;">｜</li>
      <li><a href="http://goodjobnews.ncu.edu.tw/index" target="_blank">GoodJob Readers</a></li>
      <li style="font-size: 30px;color: white;">｜</li>
      <li><a href="home">前台管理</a></li>
      @if (Route::has('login'))
          @if (Auth::check())
              <li style="font-size: 30px;color: white;">｜</li>
              <li>
                                              <a href="{{ route('logout') }}"
                                                  onclick="event.preventDefault();
                                                           document.getElementById('logout-form').submit();">
                                                  Logout
                                              </a>

                                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                  {{ csrf_field() }}
                                              </form>
              </li>
          @endif
      @endif
    </ul>
    <ul class="nav navbar-nav navbar-right" id="topmenu">
      <li><a href="#"><span class="glyphicon glyphicon-earphone"></span> +886 3426-7126</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> ncu7241@cc.ncu.edu.tw</a></li>
    </ul>
  </div>
</nav>
</body>
</html>