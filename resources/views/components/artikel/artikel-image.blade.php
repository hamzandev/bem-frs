<figure class="h-96 overflow-hidden w-full aspect-video my-5">
    <img src="{{ $src ?? "https://images.unsplash.com/photo-1506079334139-58105ce48c5b?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"}}"
        alt="artikel-image" class="w-full h-full object-cover" aria-labelledby="artikel-image-caption">
    <figcaption class="caption">
        <span id="artikel-image-caption">Foto: {{ $src ?? "Artikel" }}</span>
    </figcaption>
</figure>
