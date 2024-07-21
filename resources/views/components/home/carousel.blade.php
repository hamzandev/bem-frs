@if ($artikels->isEmpty())
    <x-artikel.empty-artikel-state></x-artikel.empty-artikel-state>
@else
    <div id="indicators-carousel" class="relative w-full 2xl:container 2xl:rounded-xl 2xl:overflow-hidden 2xl:mx-auto" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative lg:h-[73vh] h-[70vh] overflow-hidden">
            @foreach ($artikels as $artikel)
                <x-home.carousel-item :artikel="$artikel"></x-home.carousel-item>
            @endforeach
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
            @foreach (range(1, 5) as $indicator)
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="{{ $indicator - 1 }}"></button>
            @endforeach
        </div>
        <!-- Slider controls -->
        <x-home.carousel-control type="prev"></x-home.carousel-control>
        <x-home.carousel-control type="next"></x-home.carousel-control>
    </div>


@endif
