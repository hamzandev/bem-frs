@php
    $images = [
        ['src' => asset('img/BEM FRS.png'), 'alt' => 'Bem FRS'],
        ['src' => asset('img/DPM.png'), 'alt' => 'DPM'],
        ['src' => asset('img/Logo-HMIT.png'), 'alt' => 'HMIT'],
        ['src' => asset('img/HMM.png'), 'alt' => 'HMM'],
        ['src' => asset('img/ASTRO.png'), 'alt' => 'Astro'],
        ['src' => asset('img/HMTI.png'), 'alt' => 'HMTI'],
        ['src' => asset('img/COSTING.png'), 'alt' => 'Costing'],
    ];
@endphp

{{-- Infinite Logo --}}
<div class="relative flex overflow-hidden space-x-10 my-10 2xl:container 2xl:mx-auto">
    {{-- Faded overlay --}}
    <div id="kiri" class="absolute left-0 inset-y-0 w-4/12 bg-gradient-to-r from-white z-10 to-transparent"></div>
    <div id="kanan" class="absolute right-0 inset-y-0 w-4/12 bg-gradient-to-l from-white z-10 to-transparent"></div>

    <div class="flex space-x-10 animate-loop-scroll group-hover:paused ">
        @foreach ($images as $i => $image)
            <div class="w-32 h-32 aspect-square" id="img-wrapper-{{ $i + 1 }}">
                <img loading="lazy" src="{{ $image['src'] }}" class="max-w-none w-full h-full  object-cover {{ in_array($image['alt'], ['Astro', 'HMTI', 'Costing']) ? 'p-[12px]' : ''  }}"
                    alt="{{ $image['alt'] }}" />
            </div>
        @endforeach
    </div>
    <div class="flex space-x-10 animate-loop-scroll group-hover:paused" aria-hidden="true">
        @foreach ($images as $i => $image)
            <div class="w-32 h-32 aspect-square" id="img-wrapper-{{ $i + 1 }}">
                <img loading="lazy" src="{{ $image['src'] }}" class="max-w-none w-full h-full  object-cover {{ in_array($image['alt'], ['Astro', 'HMTI', 'Costing']) ? 'p-[14px]' : ''  }}"
                    alt="{{ $image['alt'] }}" />
            </div>
        @endforeach
    </div>
</div>
