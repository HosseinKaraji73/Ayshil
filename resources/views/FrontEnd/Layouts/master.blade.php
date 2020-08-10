<!Doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @if(App::getLocale() == 'fa')
        <title>@yield('title') | آیشیل</title>
    @elseif(App::getLocale() == 'en')
        <title>@yield('title') | Ayshil</title>
    @endif

    @include('FrontEnd.Includes.head')
</head>

<body itemscope itemtype="" id="index"
      class=" lang-en country-us currency-usd layout-left-column page-index tax-display-disabled">

<!-- Preloader -->
{{--<div class="preloader">--}}
{{--    <img src="{{asset('FrontEnd/images/setting/preloader.gif')}}" class="preloader-img" alt="" width="auto"--}}
{{--         height="auto"/>--}}
{{--</div>--}}


<main>
    @include('FrontEnd.Includes.header')
    @yield('content')
    @include('FrontEnd.Includes.footer')
</main>

<!--scroll up-->
<a href="javascript:void(0)" class="mypresta_scrollup hidden-phone open"><i class="ti-arrow-up"></i></a>

@include('FrontEnd.Includes.foo')
</body>
</html>
