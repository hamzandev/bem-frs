<x-app title="Berita & Rilis Kajian">
    <div class="container mx-auto md:px-0 px-4">
        <header id="heading-berita" class="py-10 space-y-3 text-center">
            <h1 class="text-3xl font-bold">Berita dan Rilis Kajian</h1>
            <p class="md:text-lg text-gray-500 lg:w-4/5 lg:mx-auto">Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Reiciendis, deleniti maiores eaque totam inventore error, recusandae et ipsa fuga nostrum soluta
                similique, doloremque ipsam nulla.</p>
        </header>

            @if($latestArtikel == null)
                <x-artikel.empty-artikel-state></x-artikel.empty-artikel-state>
            @else
                <div class="flex md:flex-row flex-col items-center md:h-[28rem] gap-5 md:w-full">
                    {{-- Hero --}}
                    <x-artikel.hero-artikel :artikel="$latestArtikel"></x-artikel.hero-artikel>
                    {{-- Beside hero --}}
                    <div class="md:w-1/2 md:h-full md:gap-5 gap-y-12 grid md:grid-rows-2">
                        @foreach ($twoOtherArtikels as $artikel)
                        <x-artikel.artikel-card :artikel="$artikel"></x-artikel.artikel-card>
                        @endforeach
                    </div>
                </div>
            @endif

    </div>
</x-app>
