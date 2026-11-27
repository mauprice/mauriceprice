@php
    $editionLabel = $book->editionLabel();
@endphp
<a href="{{ $book->url }}" class="text-decoration-none text-dark w-100">
    <div class="book-card p-4 h-100 d-flex flex-column text-center">
        @if ($editionLabel)
            <span class="badge bg-success mb-2 mx-auto" style="width:fit-content;">{{ $editionLabel }}</span>
        @endif
        <picture>
            <source srcset="{{ $book->webpCoverImageUrl() }}" type="image/webp">
            <img
                src="{{ $book->coverImageUrl() }}"
                alt="{{ $book->title }} by Maurice Price — book cover"
                class="book-cover mb-3"
                loading="lazy"
                width="200"
                height="280"
            >
        </picture>
        <h3 class="h4 mt-1 mb-1">{{ $book->title }}</h3>
        @if ($book->subtitle)
            <p class="book-card-subtitle mb-2">{{ $book->subtitle }}</p>
        @endif
        @if ($book->tagline)
            <p class="small text-muted mb-3">{{ $book->tagline }}</p>
        @endif
        <div class="btn btn-primary mt-auto mx-auto">Learn More</div>
    </div>
</a>
