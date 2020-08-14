<div class="pagination-wrapper">


    @foreach ($elements as $element)

        @if (is_array($element))

            @foreach ($element as $page => $url)
    <div class="ui pagination menu" role="navigation">
        @if ($page == $paginator->currentPage())
        <a class="item active" href="{{ $url }}" aria-current="page">{{ $page }}</a>
        @elseif ($page === $paginator->currentPage() + 1 || $page === $paginator->currentPage() + 2 || $page === $paginator->currentPage() - 1 || $page === $paginator->currentPage() - 2 || $page === $paginator->lastPage() || $page === 1)

        <a class="item" href="{{ $url }}">{{ $page }}</a>
        @endif

            @if ($paginator->hasMorePages())
        <a class="icon item next" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="بعدی"> بعدی</a>

            @else
                    <a class="next js-search-link"> <i class="arrow left"></i> </a>
            @endif
    </div>




            @endforeach


        @endif
    @endforeach


</div>
