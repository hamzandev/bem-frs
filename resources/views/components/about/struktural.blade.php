{{-- Strruktural --}}
<section class="min-h-screen pt-24 lg:px-10" id="struktural">
    <div class="container mx-auto">
        <header class="space-y-4 text-center">
            <h3 class="text-3xl font-extrabold">Struktural Pengurus</h3>
            <p class="text-gray-500 text-lg md:text-xl leading-relaxed lg:w-2/3 lg:mx-auto">Lorem ipsum dolor sit amet
                consectetur
                adipisicing elit. Illum quasi nesciunt quis cumque minus quaerat tenetur ab ullam officia
                voluptas voluptatem, harum aperiam iure unde fuga accusantium recusandae? Dolorem, ducimus.</p>
        </header>
        {{-- Diagram Struktural --}}
        <div class="my-10 h-[80vh] shadow w-full bg-gray-200 flex items-center justify-center rounded-2xl md:overflow-hidden overflow-x-scroll">
            <img src="{{ asset('img/struktural.png') }}" alt="strukural-bem" class="md:w-full md:h-full md:object-cover">
        </div>
        {{-- formatur --}}
        <div class="spacepy-5 py-10">
            <h4 class="text-2xl px-3 border-s-4 border-s-blue-500 font-bold">Formatur</h4>
            <div class="grid lg:grid-cols-4 gap-8 py-10">
                @php
                    $formatur = ["Ketua", "Wakil Ketua", "Sekretaris", "Bendahara"];
                @endphp
                @foreach ($formatur as $i => $item)
                    <x-about.pengurus-card nama="Person {{ $i + 1 }}" jabatan="{{ $item }}"></x-about.pengurus-card>
                @endforeach
            </div>
        </div>

        {{-- Biro --}}
        <div class="spacepy-5 py-10">
            <h4 class="text-2xl px-3 border-s-4 border-s-blue-500 font-bold">Biro Ekonomi Kreatif</h4>
            <div class="grid lg:grid-cols-4 gap-8 py-10">
                @php
                    $formatur = ["Ketua", "Wakil Ketua", "Sekretaris", "Bendahara"];
                @endphp
                @foreach ($formatur as $i => $item)
                    <x-about.pengurus-card nama="Person {{ $i + 1 }}" jabatan="{{ $item }}"></x-about.pengurus-card>
                @endforeach
            </div>
        </div>

        {{-- Bidang --}}
        <div class="spacepy-5 py-10">
            <h4 class="text-2xl px-3 border-s-4 border-s-blue-500 font-bold">Bidang Riset & Teknologi</h4>
            <div class="grid lg:grid-cols-4 gap-8 py-10">
                @php
                    $formatur = ["Ketua", "Wakil Ketua", "Sekretaris", "Bendahara"];
                @endphp
                @foreach ($formatur as $i => $item)
                    <x-about.pengurus-card nama="Person {{ $i + 1 }}" jabatan="{{ $item }}"></x-about.pengurus-card>
                @endforeach
            </div>
        </div>

    </div>
</section>
