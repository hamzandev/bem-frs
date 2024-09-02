@php
    $biro = 'Biro Ekraf (Ekonomi Kreatif)';
    $pengurus = [
        [
            'jabatan' => 'Kepala Biro',
            'nama' => 'Santi Bulan',
            'prodi' => 'Informatika',
            'angkatan' => '2021',
            'image' => '',
        ],
        [
            'jabatan' => 'Staff',
            'nama' => 'Jihan Fadilah',
            'prodi' => 'Informatika',
            'angkatan' => '2021',
            'image' => '',
        ],
        [
            'jabatan' => 'Staff',
            'nama' => 'Andi Aprizal',
            'prodi' => 'Informatika',
            'angkatan' => '2021',
            'image' => '',
        ],
        [
            'jabatan' => 'Staff',
            'nama' => 'Maulana Bela S',
            'prodi' => 'Informatika',
            'angkatan' => '2021',
            'image' => '',
        ],
    ];
@endphp


{{-- Biro Medinfo --}}
<div class="spacepy-5 py-10">
    <h4 class="md:text-2xl text-xl px-3 border-s-4 border-s-blue-500 font-bold">
        {{ $biro }}
    </h4>
    <div class="flex gap-8 py-10 overflow-x-auto">
        @foreach ($pengurus as $i => $item)
            <x-about.pengurus-card nama="{{ $item['nama'] }}" jabatan="{{ $item['jabatan'] }}"
                prodi="{{ $item['prodi'] }} - {{ $item['angkatan'] }}"></x-about.pengurus-card>
        @endforeach
    </div>
</div>
