<nav class="pagination">
    <div class="row">
        {{--                                            <div class="col-md-4">--}}
        {{--                                                Showing 1-12 of 19 item(s)--}}
        {{--                                            </div>--}}
        <div class="col-md-12">
            <div class="innovatoryPagination">
                <ul class="page-list clearfix text-xs-center">

                    @if ($paginator->onFirstPage())
                        <li>
                            <a class="next js-search-link"> <i class="arrow right-arrow"></i> </a>
                        </li>
                    @else
                        <li>
                            <a rel="next" href="{{ $paginator->previousPageUrl()}}" class="next js-search-link">
                                <i class="arrow right-arrow"></i> </a>
                        </li>
                    @endif



                    @foreach ($elements as $element)

                        @if (is_array($element))

                            @foreach ($element as $page => $url)


                                @if ($paginator->currentPage() > 3 && $page === 2)
                                    <li class="disabled"><span>...</span></li>
                                @endif

                                @if ($page == $paginator->currentPage())
{{--                                    <li>--}}
{{--                                        <button class="activePaginate">{{ $page }}</button>--}}
{{--                                    </li>--}}
                                    <li class="current">
                                        <a  href="{{ $url }}" class="disabled"> {{ $page }}</a>
                                    </li>
                                @elseif ($page === $paginator->currentPage() + 1 || $page === $paginator->currentPage() + 2 || $page === $paginator->currentPage() - 1 || $page === $paginator->currentPage() - 2 || $page === $paginator->lastPage() || $page === 1)
                                    {{--						@elseif ($page === $paginator->currentPage() + 1 || $page === $paginator->currentPage() - 1 || $page === $paginator->currentPage() - 2 || $page === $paginator->lastPage() || $page === 1)--}}
{{--                                    <li>--}}
{{--                                        <a href="{{ $url }}">--}}
{{--                                            <button>{{ $page }}</button>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
                                    <li class="current">
                                        <a href="{{ $url }}" class="disabled"> {{ $page }}</a>
                                    </li>
                                @endif

                                {{--                                    <li class="current">--}}
                                {{--                                        <a rel="nofollow" href="4-kitchen-tools-order=product.name.asc.html" class="disabled js-search-link"> {{ $page }}</a>--}}
                                {{--                                    </li>--}}

                                @if ($paginator->currentPage() < $paginator->lastPage() - 3 && $page === $paginator->lastPage() - 1)
                                    <li class="disabled"><span>...</span></li>
                                @endif

                            @endforeach


                        @endif
                    @endforeach






                    @if ($paginator->hasMorePages())
                        <li>
                            <a rel="next" href="{{ $paginator->nextPageUrl() }}" class="next js-search-link">
                                <i class="arrow left"></i> </a>
                        </li>
                    @else
                        <li>
                            <a class="next js-search-link"> <i class="arrow left"></i> </a>
                        </li>
                    @endif


                </ul>
            </div>
        </div>
    </div>
</nav>
