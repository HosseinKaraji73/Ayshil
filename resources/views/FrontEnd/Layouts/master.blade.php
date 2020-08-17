<!DOCTYPE html>
<html lang="fa-IR" dir="rtl">
<head>
    <meta charset="UTF-8"/>
    <title>@yield('title') | @yield('siteName', 'آیشیل')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no"/>
    <meta name="csrf-token" content="{{csrf_token()}}">
    <script>

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    </script>

   @include('FrontEnd.Includes.head')

</head>

<body class="@yield('classBody')">
@yield('topBar')
<div class="container">
    @yield('header')
    @yield('main')
</div>
@yield('productShowGallery')

@include('FrontEnd.Includes.footer')
@include('FrontEnd.Includes.foo')
</body>
</html>
