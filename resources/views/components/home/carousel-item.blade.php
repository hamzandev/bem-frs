<!-- Item 1 -->
<div class="hidden duration-700 ease-in-out" data-carousel-item="active">
    <img src="{{ $artikel->gambar ? asset('storage/' . $artikel->gambar) : asset('storage/default.png') }}"
        class="relative block w-full object-cover h-full" alt="...">
    <div
        class="absolute h-full flex flex-col md:justify-end justify-center lg:gap-5 gap-3 bottom-0 px-6 lg:pb-24 pb-20 bg-gradient-to-t from-gray-900 to-transparent inset-x-0 lg:items-center">
        @if($artikel->category)
            <x-artikel.category-badge category="{{ $artikel->category->category }}"></x-artikel.category-badge>
        @endif
        <h1 class="text-white md:text-4xl text-2xl font-extrabold md:text-center line-clamp-3 lg:mx-auto lg:w-3/4">
            <a href="{{ route('artikel.show', $artikel->id) }}" class="hover:underline">
                {{ $artikel->judul }}
            </a>
        </h1>
        <x-artikel.artikel-info textColor="text-gray-200" :published="$artikel->published_at" user="{{ $artikel->user->name }}"></x-artikel.artikel-info>
        <x-button asLink href="{{ route('artikel.show', $artikel->id) }}">Baca Selengkapnya</x-button>

    </div>
</div>
