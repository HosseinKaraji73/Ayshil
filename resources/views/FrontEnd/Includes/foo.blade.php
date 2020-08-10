@yield('fooScript')
<script src="{{asset('FrontEnd/js/star-rating.js')}}"></script>

@if(App::getLocale() == 'fa')
    <script type="text/javascript" src="{{asset('FrontEnd/js/RTL/cart-fa.js')}}"></script>
@elseif(App::getLocale() == 'en')
    <script type="text/javascript" src="{{asset('FrontEnd/js/LTR/cart-en.js')}}"></script>
@endif



