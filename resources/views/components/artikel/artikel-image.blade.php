<figure class="h-96 overflow-hidden w-full aspect-video my-5">
    <img src="{{ $src ? asset('storage/' . $src) : asset('storage/default.png') }}" alt="artikel-image" class="w-full h-full object-cover"
        aria-labelledby="artikel-image-caption">
    <figcaption class="caption">
        <span id="artikel-image-caption">Foto: {{ $src ?? 'Artikel' }}</span>
    </figcaption>
</figure>
