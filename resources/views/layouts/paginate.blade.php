@if ($paginator->hasPages())
<nav aria-label="Page navigation example">
    <ul class="d-flex m-10 gap-10">
        @if ($paginator->onFirstPage())
            <li class="page-item disabled">
                <a wire:navigate.hover class="page-link" tabindex="-1">{{__('pagination.previous')}}</a>
            </li>
        @else
            <li class="page-item"><a wire:navigate.hover class="page-link" href="{{ $paginator->previousPageUrl() }}#projects">{{__('pagination.previous')}}</a></li>
        @endif
      
        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="page-item disabled">{{ $element }}</li>
            @endif
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active">
                            <a wire:navigate.hover class="page-link">{{ $page }}</a>
                        </li>
                    @else
                        <li class="page-item">
                            <a wire:navigate.hover class="page-link" href="{{ $url }}#projects">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach
        
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a wire:navigate.hover class="page-link" href="{{ $paginator->nextPageUrl() }}#projects" rel="next">{{__('pagination.next')}}</a>
            </li>
        @else
            <li class="page-item disabled">
                <a wire:navigate.hover class="page-link">{{__('pagination.next')}}</a>
            </li>
        @endif
    </ul>
@endif