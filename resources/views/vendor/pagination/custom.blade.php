@if ($paginator->hasPages())
{{--<nav>--}}
{{--    <ul class="pagination">--}}
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a href="#"><i class="icon icon-Arrow rotateHorizonaly"></i></a>
{{--        <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">--}}
{{--            <span aria-hidden="true">&lsaquo;</span>--}}
{{--            <i class="icon icon-Arrow rotateHorizonaly"></i>--}}
{{--        </li>--}}
        @else
{{--        <li>--}}
{{--            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>--}}
            <a href="{{ $paginator->previousPageUrl() }}"><i class="icon icon-Arrow rotateHorizonaly"></i></a>
{{--        </li>--}}
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
{{--        <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>--}}
{{--                <span class="current">{{ $element }}</span>--}}
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
        @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
{{--        <li class="active" aria-current="page"><span>{{ $page }}</span></li>--}}
<span class="current">{{ $page }}</span>
        @else
{{--        <li><a href="{{ $url }}">{{ $page }}</a></li>--}}
<a href="{{ $url }}">{{ $page }}</a>
        @endif
        @endforeach
        @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
{{--        <li>--}}
{{--            <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>--}}
{{--        </li>--}}
<a href="{{ $paginator->nextPageUrl() }}"><i class="icon icon-Arrow"></i></a>
        @else
{{--        <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">--}}
{{--            <span aria-hidden="true">&rsaquo;</span>--}}
{{--        </li>--}}
<a href="#"><i class="icon icon-Arrow"></i></a>
        @endif
{{--    </ul>--}}
{{--</nav>--}}
@endif
