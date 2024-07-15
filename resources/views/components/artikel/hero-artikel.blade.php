<div class="md:w-1/2 w-full md:h-full">
    <div id="image" class="w-full shadow aspect-video md:h-full rounded-xl overflow-hidden relative group">
        <img src="https://images.unsplash.com/photo-1533377437229-5ca96ecbcd78?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="hero-berita" class="w-full h-full object-cover group-hover:scale-105 duration-200">
        <div
            class="absolute bg-gradient-to-t from-black/90 to-transparent inset-x-0 bottom-0 md:h-3/5 h-4/5 flex flex-col justify-end md:text-start text-center">
            <div class="md:px-6 md:py-8 py-6 px-4 text-white lg:w-5/6">
                {{-- badges --}}
                <div class="flex space-x-2 md:justify-start justify-center">
                    <span class="bg-green-400 text-xs font-medium me-2 px-2.5 py-0.5 rounded">{{
                        $artikel->category->category ?? '' }}</span>
                </div>
                <h2 class="md:text-3xl text-xl font-extrabold">
                    <a href="{{ route('artikel.show', $artikel->id) }}"
                        class="hover:underline transition duration-200 md:line-clamp-3 line-clamp-2">
                        {{ $artikel->judul }}
                    </a>
                </h2>
                <x-artikel.artikel-info textColor="text-gray-100" user="{{ $artikel->user->name }}"
                    :published="$artikel->published_at"></x-artikel.artikel-info>
                <div class="block pt-5">
                    <x-button asLink :href="route('artikel.show', $artikel->id)">Baca Selengkapnya</x-button>
                </div>
            </div>
        </div>
    </div>
</div>
