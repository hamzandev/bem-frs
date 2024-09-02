@php
    $biro = "Biro Medinfo (Media & Informasi)";
    $pengurus = [
        [
            'jabatan' => 'Kepala Biro',
            'nama' => 'Titha Artha Tandahyu',
            'prodi' => 'Informatika',
            'angkatan' => '2022',
            'image' => '',
        ],
        [
            'jabatan' => 'Staff',
            'nama' => 'Sherly Novia',
            'prodi' => 'Informatika',
            'angkatan' => '2023',
            'image' => '',
        ],
        [
            'jabatan' => 'Staff',
            'nama' => 'Rudi Anggara',
            'prodi' => 'Informatika',
            'angkatan' => '2022',
            'image' => '',
        ],
    ];
@endphp


{{-- Biro Medinfo --}}
<div class="spacepy-5 py-10">
    <h4 class="md:text-2xl text-xl px-3 border-s-4 border-s-blue-500 font-bold">
        {{$biro}}
    </h4>
    <div class="flex gap-8 py-10 overflow-x-auto">
        @foreach ($pengurus as $i => $item)
            <x-about.pengurus-card nama="{{ $item['nama'] }}"
                jabatan="{{ $item['jabatan'] }}" prodi="{{ $item['prodi'] }} - {{$item['angkatan']}}"></x-about.pengurus-card>
        @endforeach
    </div>
</div>
