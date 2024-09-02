@php
    $biro = 'BJMO (Media & Informasi)';
    $bjmo = [
        [
            'jabatan' => 'Kepala Biro',
            'nama' => 'Fachrurrozy A. S. Madilao',
            'prodi' => 'Informatika',
            'angkatan' => '2021',
            'image' => '',
        ],
        [
            'jabatan' => 'Staff',
            'nama' => 'Julianingsih',
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
        @foreach ($bjmo as $i => $item)
            <x-about.pengurus-card nama="{{ $item['nama'] }}" jabatan="{{ $item['jabatan'] }}"
                prodi="{{ $item['prodi'] }} - {{ $item['angkatan'] }}"></x-about.pengurus-card>
        @endforeach
    </div>
</div>
