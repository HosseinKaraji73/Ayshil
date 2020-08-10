<script src="{{asset('BackEnd/js/jquery.min.js')}}"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="{{asset('BackEnd/js/bootstrap.min.js')}}"></script>
<script src="{{asset('BackEnd/js/app.min.js')}}"></script>
<script src="{{asset('BackEnd/js/jquery.Bootstrap-PersianDateTimePicker.js')}}"></script>
<script src="{{asset('BackEnd/js/jalaali.js')}}"></script>
<script src="{{asset('BackEnd/js/dropdownsearchable.js')}}"></script>

<script>
    $('div.alert').delay(3000).slideUp(300);
</script>

@yield('script')
