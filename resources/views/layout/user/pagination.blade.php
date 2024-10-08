@if ($paginator->hasPages())
    <div class="flex items-center">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span
                class="rounded-l rounded-sm border border-primary px-3 py-2 cursor-not-allowed no-underline">&laquo;</span>
        @else
            <a class="rounded-l rounded-sm border-t border-b border-l border-primary px-3 py-2 text-dark hover:bg-primary hover:text-white transition-all duration-500 no-underline"
                href="{{ $paginator->previousPageUrl() . '#' . $topic }}" rel="prev">
                &laquo;
            </a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span
                    class="border-t border-b border-l border-primary px-3 py-2 cursor-not-allowed no-underline">{{ $element }}</span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span
                            class="border-t border-b border-l border-primary px-3 py-2 bg-primary text-white no-underline">{{ $page }}</span>
                    @else
                        <a class="border-t border-b border-l border-primary px-3 py-2 hover:bg-primary hover:text-white transition-all duration-500 text-dark no-underline"
                            href="{{ $url . '#' . $topic }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="rounded-r rounded-sm border border-primary px-3 py-2 hover:bg-primary text-dark no-underline"
                href="{{ $paginator->nextPageUrl() . '#' . $topic }}" rel="next">&raquo;</a>
        @else
            <span
                class="rounded-r rounded-sm border border-primary px-3 py-2 hover:bg-primary hover:text-white transition-all duration-500  text-dark no-underline cursor-not-allowed">&raquo;</span>
        @endif
    </div>
@endif
