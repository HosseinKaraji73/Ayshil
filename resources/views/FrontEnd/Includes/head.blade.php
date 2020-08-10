<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<html lang="{{ app()->getLocale() }}">
<meta name="csrf-token" content="{{ csrf_token() }}">




@if(App::getLocale() == 'fa')
    <link rel="stylesheet" href="{{asset('FrontEnd/css/RTL/main.css')}}" type="text/css" media="all">
@elseif(App::getLocale() == 'en')
    <link rel="stylesheet" href="{{asset('FrontEnd/css/LTR/main.css')}}" type="text/css" media="all">
@endif


@yield('style')
<script type="text/javascript" src="{{asset('FrontEnd/js/jquery-1.7.1.min.js')}}" async></script>
@yield('headScript')
