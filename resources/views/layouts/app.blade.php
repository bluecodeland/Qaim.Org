<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="theme-color" content="#107ABE">
    <meta name="keywords" content="ویرگول,وبلاگ, تولید محتوا">

    <!-- og tags -->
    <meta property="og:site_name" content="ویرگول">
    <meta property="og:title" content="ویرگول - جایی برای نوشتن و خواندن">
    <meta property="og:description" content="در ویرگول همه می‌تونن بنویسن. ویرگول یک شبکه اجتماعی برای خواندن و نوشتن متن و محتوای فارسی است">
    <meta name="description" content="در ویرگول همه می‌تونن بنویسن. ویرگول یک شبکه اجتماعی برای خواندن و نوشتن متن و محتوای فارسی است">
    <meta property="og:type" content="site">
    <meta property="og:url" content="https://virgool.io">
    <meta property="og:locale" content="fa">

    {{-- <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@virgool_io">
    <meta name="twitter:title" content="ویرگول - جایی برای نوشتن و خواندن">
    <meta name="twitter:description" content="در ویرگول همه می‌تونن بنویسن. ویرگول یک شبکه اجتماعی برای خواندن و نوشتن متن و محتوای فارسی است"> --}}

    <title>{{ config('app.name', 'مرکز فقهی قائم') }}</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/dropzone.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
    {{-- <link href="css/style.css" rel="stylesheet"> --}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    @yield('header')
    
</head>
<body class="h-100">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark p3-5">
                <a class="navbar-brand" href="#">{{ config('app.name', 'مرکز فقهی قائم') }}</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0 justify-content-center">
                  <li class="nav-item active">
                      <a class="nav-link" href="/">صفحه اصلی <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">معرفی</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">ارتباط با ما</a>
                  </li>
                  @if (Route::has('login'))
                      @auth
                          <li class="nav-item">
                              <a href="{{ url('/home') }}" class="nav-link">صفحه شخصی</a>
                          </li>
                          <li class="nav-item">
                                  <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();document.getElementById('logout-form').submit();">خروج</a>
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      {{ csrf_field() }}
                                  </form>
                              </div>
                          </li>
                      
                      
                      
                          @else
                          <li class="nav-item">
                              <a href="{{ route('login') }}" class="nav-link"  title="Tooltip on bottom"> ورود</a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('register') }}" class="nav-link"  title="Tooltip on bottom">ثبت نام</a>
                      @endauth
                          </li>
                  @endif
                </ul>
              </div>
            </nav> 
            
                @yield('content')
            
    @yield('footer')
    
</body>
</html>