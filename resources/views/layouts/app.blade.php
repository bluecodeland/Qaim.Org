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
    <meta property="og:locale" content="fa_IR" />
    <meta property="og:type" content="article" />
    <meta property="place:location:latitude" content="37.80163"/>
    <meta property="place:location:longitude" content="48.90726"/>
    <meta property="business:contact_data:street_address" content="Talesh, Gilan Province"/>
    <meta property="business:contact_data:locality" content="Talesh, Gilan Province"/>
    <meta property="business:contact_data:country" content="ایران"/>
    <meta property="business:contact_data:postal_code" content=""/>
    <meta property="business:contact_data:website" content="http://taleshgard.ir/"/>
    <meta property="business:contact_data:email" content="info@taleshgard.ir"/>
    <meta property="business:contact_data:phone_number" content="09102016342"/>
    <meta property="og:title" content="تالاب استیل آستارا" />
    <meta property="og:description" content="آستارا نامی  است که روی شهری زیبا در غربی‌‌‌ترین نقطه استان گیلان قرار گرفته و جلوه‌‌های باشکوهی از طبیعت و فرهنگ قوم تالش را در خود نهفته دارد. طبیعت این منطقه از کشور بسیار متنوع و جالب بوده و از ترکیبی موزون از عناصر مختلف تشکیل شده است. در غرب آن گردنه زیبای حیران ( هوریان)، در شمال آن شهر همنام و زیبای آستارای جمهوری آذربایجان، در شرق آن دریای زیبای مازندران و در جنوب آن مناظر کم نظیر کوه‌‌‌های تالش و همچنین تالاب دیدنی استیل واقع شده‌اند." />
    <meta property="og:url" content="http://taleshgard.ir/%d8%aa%d8%a7%d9%84%d8%a7%d8%a8-%d8%a7%d8%b3%d8%aa%db%8c%d9%84-%d8%a2%d8%b3%d8%aa%d8%a7%d8%b1%d8%a7/" />
    <meta property="og:site_name" content="تالش گرد | taleshgard" />
    <meta property="article:publisher" content="https://www.facebook.com/Taleshgard-1947732632110092/" />
    <meta property="article:tag" content="آستارا،تالاب استیل،تالش،ایران ، گیلان" />
    <meta property="article:section" content="سرزمین تالش" />
    <meta property="article:published_time" content="۱۳۹۷-۰۴-۱۹T22:05:15+00:00" />
    <meta property="article:modified_time" content="۱۳۹۷-۰۴-۱۹T22:08:55+00:00" />
    <meta property="og:updated_time" content="۱۳۹۷-۰۴-۱۹T22:08:55+00:00" />
    <meta property="og:image" content="http://taleshgard.ir/wp-content/uploads/2018/07/تالاب-استیل-آستارا.jpg" />
    <meta property="og:image:width" content="800" />
    <meta property="og:image:height" content="600" />
    <meta property="og:image:alt" content="تالاب استیل آستارا" />
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
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0 justify-content-center ">
                  <li class="nav-item active ">
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
                  <li class="nav-item dropdown">
                    <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{-- <img src="uploads/avatar/{{ $user->avatar }}" alt="{{ $user->name }}" class="avatar"> --}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ url('/home') }}">صفحه شخصی</a>
                      <a  class="dropdown-item" href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();document.getElementById('logout-form').submit();">خروج</a>
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      {{ csrf_field() }}
                                  </form>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">تنظیمات</a>
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