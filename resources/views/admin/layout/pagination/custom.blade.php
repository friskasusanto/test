@if ($paginator->hasPages())
<div class="custom-pagination">
    <ul class="pagination">
        @if ($paginator->onFirstPage())
        <li class="page-item">
            <a class="page-link" href="#">Previous</a>
        </li>
        @else
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->previousPageUrl() }}">Previous</a>
        </li>
        @endif

        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="page-item"><span>{{ $element }}</span></li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                    <li class="page-item active"><span>{{ $page }}</span></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">Next →</a></li>
        @else
            <li class="disabled"><span>Next →</span></li>
        @endif
    </ul>
</div>
@endif