<div class="md:flex grid items-center gap-3">
    {{-- artikel-img --}}
    <div class="md:w-1/2 group h-full">
        <a :href="route('artikel.show', $artikel->id)" id="image"
            class="w-full shadow h-full rounded-xl block overflow-hidden relative md:aspect-auto aspect-video">
            <img src="{{ $artikel->gambar ? asset('storage/' . $artikel->gambar) : asset('storage/default.png') }}"
                alt="other-berita" class="w-full h-full group-hover:scale-105 duration-200 object-cover">
        </a>
    </div>
    {{-- artikel meta --}}
    <div class="md:w-1/2 flex flex-col md:h-full space-y-1 aspect-video">
        {{-- badges --}}
        <x-artikel.category-badge></x-artikel.category-badge>
        <h2 class="text-xl font-bold line-clamp-3 leading-tight text-gray-800">
            <a href="{{ route('artikel.show', $artikel->id) }}" class="hover:underline">
                {{ $artikel->judul ??
                    "Lorem ipsum dolor sit amet consectetur adipisicing elit.Laboriosam asperiores officia nostrum. "
                }}
            </a>
        </h2>
        <x-artikel.artikel-info published="{{ $artikel->published_at }}" user="{{ $artikel->user->name }}"
            :small="true">
        </x-artikel.artikel-info>
        <div class="pt-3">
            <x-button asLink :href="route('artikel.show', $artikel->id)">Selengkapnya</x-button>
        </div>
    </div>
</div>
