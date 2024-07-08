{{-- pengurus lists --}}
<div class="my-10 grid lg:grid-cols-4 gap-8 py-10">
    @php
        $arr = [1, 2, 3, 4, 5, 6, 7];
    @endphp

    @foreach ($arr as $item)
        <x-about.pengurus-card nama="Widarman {{ $item }}"></x-about.pengurus-card>
    @endforeach
</div>
