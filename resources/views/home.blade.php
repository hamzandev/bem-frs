<x-app title="Beranda">
    <x-home.carousel :artikels="$artikels"></x-home.carousel>
    <x-home.infinite-brand></x-home.infinite-brand>
    <x-home.kultur-frs></x-home.kultur-frs>
    <x-home.dekan></x-home.dekan>
    <x-home.ketua-bem></x-home.ketua-bem>
    <x-home.overview></x-home.overview>
    <x-home.kontak></x-home.kontak>
    {{-- <div class="py-20 bg-white">
        <div class="container mx-auto">
            <div class="flex justify-between items-center mb-10">
                <h2 class="text-3xl font-bold border-s-4 border-s-blue-500 px-3">Artikel Terbaru</h2>
                <a href="#" class="text-blue-500 px-5 py-2 rounded-xl focus-within:outline focus-within:outline-blue-300 text-lg">
                    Semua Artikel
                    <span class="fa-li">&raquo;</span>
                </a>
            </div>
            <div class="grid grid-cols-2 gap-5">
                @foreach (range(1,4) as $artikel)
                    <x-artikel.artikel-card></x-artikel.artikel-card>
                @endforeach
            </div>
            <div class="mt-10 flex justify-center">
                <a href="#" class="text-blue-500 px-5 py-2 rounded-xl focus-within:outline focus-within:outline-blue-300 text-lg">
                    Semua Artikel
                    <span class="fa-li">&raquo;</span>
                </a>
            </div>
        </div>
    </div> --}}
</x-app>
