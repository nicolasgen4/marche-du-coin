@if ($paginator->hasPages())
<nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="pagination row-btw">

    <p>
        {{-- Somme des pages --}}
        {!! __('Annonces') !!}
        @if ($paginator->firstItem())
        {{ $paginator->firstItem() }}
        {!! __('à') !!}
        {{ $paginator->lastItem() }}
        @else
        {{ $paginator->count() }}
        @endif
        {!! __('sur') !!}
        {{ $paginator->total() }}
    </p>

    <ul class="pagination-links row-center">
        {{-- Lien page précédente --}}
        @if (!$paginator->onFirstPage())
        <li>
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="{{ __('Pagination Précédente') }}">
                <svg fill="currentColor" viewBox="0 0 20 20" class="btn-pagination">
                    <path fill-rule="evenodd"
                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                        clip-rule="evenodd" />
                </svg>
                <span class="screen-reader screen-reader-focus">Page précédente</span>
            </a>
        </li>
        @endif

        {{-- Liens de pagination --}}
        @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
        <li aria-disabled="true">
            <span>{{ $element }}</span>
        </li>
        @endif
        @if (is_array($element))
        @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
        <li aria-current="page">
            <span id="current-page">{{ $page }}</span>
        </li>
        @else
        <li>
            <a href="{{ $url }}" aria-label="{{ __('Aller à la page :page', ['page' => $page]) }}">
                {{ $page }}
            </a>
        </li>
        @endif
        @endforeach
        @endif
        @endforeach

        {{-- Lien page suivante --}}
        @if ($paginator->hasMorePages())
        <li>
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="{{ __('Pagination Suivante') }}">
                <svg fill="currentColor" viewBox="0 0 20 20" class="btn-pagination">
                    <path fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd" />
                </svg>
                <span class="screen-reader screen-reader-focus">Page suivante</span>
            </a>
        </li>
        @endif
    </ul>

</nav>
@endif
