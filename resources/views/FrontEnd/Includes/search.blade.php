<div class="d-flex align-items-center justify-content-end">
    <div id="search-wrapper">
        <form method="get" action="shop/search.html" id="search-form">
            <input type="text" name="q" placeholder="جستجو در آيشیل"/>
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div>
    <a id="basket-link" href="{{url('/cart')}}" title="" target="_blank">

        <i class="fal fa-shopping-cart"> </i> <em id="basket-badge"> 0 </em> </a>


    @if (Route::has('login'))
        @auth


{{--            @if(isset(Auth::user()->name))--}}
{{--                <a href="{{url('/profile')}}" title="" target="_self">--}}
{{--                    <i class="fal fa-user"></i> {{Auth::user()->name}}</a>--}}
{{--            @else--}}
{{--                <a href="{{url('/profile')}}" title="" target="_self">--}}
{{--                    <i class="fal fa-user"></i> {{Auth::user()->mobile}}</a>--}}

{{--            @endif--}}


            @if(Auth::user()->roleId == 0)
                <a href="{{url('/panel/admin/profile')}}" class="register" target="_blank">{{__('auth.viewPrpfile')}}</a>
            @elseif(Auth::user()->roleId == 1)
                <a href="{{url('/panel/owner/profile')}}" class="register" target="_blank">{{__('auth.viewPrpfile')}}</a>
            @else
                <a href="{{url('/panel/user/profile')}}" class="register" target="_blank">{{__('auth.viewPrpfile')}}</a>
            @endif

            <a href="{{ route('logout') }}" class="register"
               onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                {{__('auth.logout')}}
                <span class="fa fa-sign-out"></span>

            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                  style="display: none;">
                @csrf
            </form>


        @else
            <a href="{{url('/login')}}" title="" target="_self"><i class="fal fa-user"></i></a>
        @endauth
    @endif

</div>
