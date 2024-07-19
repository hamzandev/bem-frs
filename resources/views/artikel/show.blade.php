<x-app title="{{ $artikel?->judul }}">
    <div class="container md:mx-auto lg:px-10 px-5 min-h-screen">

        <div class="flex md:flex-row flex-col gap-8">
            <article
                class="lg:w-2/3 prose md:prose-lg 2xl:prose-xl bg-white rounded-xl md:p-10 mt-10 md:mt-0 md:max-h-[170vh] md:overflow-y-auto">
                <h1>{{ $artikel?->judul ?? 'Tidak Ditemukan' }}</h1>
                <x-artikel.artikel-info
                    user="{{ $artikel?->user->name }}"
                    :published="$artikel?->published_at">
                </x-artikel.artikel-info>
                @if($artikel->category == null)
                    <x-artikel.uncategorized-badge></x-artikel.uncategorized-badge>
                @else
                    <x-artikel.category-badge category="{{ $artikel->category->category }}"></x-artikel.category-badge>
                @endif

                <x-artikel.artikel-image src="{{ $artikel->gambar }}"></x-artikel.artikel-image>

                {{ Illuminate\Mail\Markdown::parse($artikel->konten) }}
            </article>
            {{-- aside artikel --}}
            <aside class="md:w-1/3 bg-transparent py-5">
                <x-page-heading>Artikel Lainnya</x-page-heading>
                <div class="grid gap-8 py-5">
                    @foreach ($latestArtikels as $item)
                        <x-artikel.artikel-card :artikel="$item"></x-artikel.artikel-card>
                    @endforeach
                </div>
            </aside>
        </div>

    </div>

    {{-- other artikel --}}
    <div class="container md:mx-auto md:px-0 px-5">
        <div class="bg-white py-10 my-10">
            <x-page-heading>Artikel Terdahulu</x-page-heading>

            <div class="grid lg:grid-cols-2 md:gap-x-8 md:gap-y-5 gap-y-12">
                @foreach ($otherArtikels as $item)
                    <x-artikel.artikel-card :artikel="$item"></x-artikel.artikel-card>
                @endforeach
            </div>
        </div>
    </div>
</x-app>
