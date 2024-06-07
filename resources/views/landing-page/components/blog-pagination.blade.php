@if($paginator->hasPages())
    <div role="navigation" aria-label="List" class="w-pagination-wrapper pagination">
        @if(!$paginator->onFirstPage())
            <a href="{{ $paginator->previousPageUrl() }}" aria-label="Previous Page" class="w-pagination-previous outline-button"><svg
                    class="w-pagination-previous-icon" height="12px" width="12px"
                    xmlns="http://www.w3.org/2000/svg" viewbox="0 0 12 12" transform="translate(0, 1)">
                    <path fill="none" stroke="currentColor" fill-rule="evenodd" d="M8 10L4 6l4-4"></path>
                </svg>
                <div class="w-inline-block">Previous</div>
            </a>
        @endif

        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" aria-label="Next Page" class="w-pagination-next button">
                <div class="w-inline-block">Next</div><svg class="w-pagination-next-icon" height="12px"
                    width="12px" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 12 12"
                    transform="translate(0, 1)">
                    <path fill="none" stroke="currentColor" fill-rule="evenodd" d="M4 2l4 4-4 4"></path>
                </svg>
            </a>
        @endif
    </div>
@endif