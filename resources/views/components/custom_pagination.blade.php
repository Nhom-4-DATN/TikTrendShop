@if ($paginator->lastPage() > 1)
    <ul class="pagination rounded-none">
        @if ($paginator->currentPage() - 3 > 1)
            <li class="page-item ">
                <a class="page-link rounded-0 " href="{{ $paginator->url(1) }}">1</a>
            </li>
            <li class="page-item ">
                <a class="page-link">...</a>
            </li>
        @endif
        @for ($i = 1; $i <= $paginator->lastPage(); $i++)
            @if ($i < $paginator->currentPage() + 3 && $i > $paginator->currentPage() - 3)
                <li class="page-item {{ $paginator->currentPage() == $i ? 'active' : '' }}">
                    <a class="page-link rounded-0 " href="{{ $paginator->url($i) }}">{{ $i }}</a>
                </li>
            @endif
        @endfor
        @if ($paginator->currentPage() + 3 < $paginator->lastPage())
            <li class="page-item ">
                <a class="page-link rounded-0 ">...</a>
            </li>
            <li class="page-item ">
                <a class="page-link rounded-0 " href="{{ $paginator->url($paginator->lastPage()) }}">{{ $paginator->lastPage() }}</a>
            </li>
        @endif
    </ul>
@endif
