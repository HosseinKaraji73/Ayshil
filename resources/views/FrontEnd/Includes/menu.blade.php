<div id="topbar">
    <div class="container d-flex align-items-center justify-content-between  mobile-justify-content-center ">
        <div id="logo-wrapper"><a href="{{url('/')}}"><img
                    src="{{asset('FrontEnd/images/1.png')}}"
                    alt="ibolak"/></a>
            <h2>لذت یک خرید شیک</h2>
        </div>
        <div class="mobile-header-left mobile-only"></div>
        <div class="topbar-menu-wrapper" id="menu-wrapper">
            <ul>

                @foreach($menuProducts as $menuProduct)
                    {{--                    <li><a href="{{url('/')}}" title="" target="_self">--}}
                    {{--                            <div><span>حراجی</span></div>--}}
                    {{--                        </a>--}}
                    {{--                    </li>--}}


                    <li class="has-megamenu">
                        <a href="{{action('FrontEnd\ProductController@MenuShow' ,[$menuProduct->id,$menuProduct->name])}}"><span>{{$menuProduct->name}}</span><i class="far fa-angle-down"></i></a>
                        <ul class="megamenu">
                            <div class="row">
                                @foreach($submenu[$menuProduct->id] as $subMenuProduct)

                                    <div class="col-lg-4">
                                        <div class="subcategory"><a
{{--                                                href="{{action('FrontEnd\ProductController@subMenuShow' ,[$subMenuProduct->id,$subMenuProduct->menuProducts_id,$subMenuProduct->name])}}" title="" target="_self">--}}
                                                <h4>{{$subMenuProduct->name}}</h4></a>
                                            <ul>

                                                @foreach($subsubmenu[$subMenuProduct->id] as $subSubMenuProduct)
                                                    <li>
                                                        <a href="{{action('FrontEnd\ProductController@subMenuShow' ,[$subSubMenuProduct->subMenuProducts_id,$subSubMenuProduct->id,$subSubMenuProduct->name])}}" title=""
                                                           target="_self">{{$subSubMenuProduct->name}}</a>
                                                    </li>
                                                @endforeach

                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </ul>
                    </li>
                @endforeach


            </ul>
        </div>
        @include('FrontEnd.Includes.search')

    </div>
</div>
