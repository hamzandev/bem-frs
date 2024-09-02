@php
    $biro = 'Bidang Ristek (Riset & Teknologi)';
    $pengurus = [
        'kepala-bidang' => [
            'nama' => 'Sahri Dian Suandy',
            'prodi' => 'Teknik Elektro',
            'angkatan' => '2021',
            'jabatan' => 'Kepala Bidang',
            'image' => '',
        ],
        'departemen-inovristek' => [
            [
                'jabatan' => 'Kepala Departemen Inovristek',
                'nama' => 'Bintang',
                'prodi' => 'Informatika',
                'angkatan' => '2022',
                'image' => '',
            ],
            [
                'jabatan' => 'Staff',
                'nama' => 'Khabirul Eza Al Qodri',
                'prodi' => 'Informatika',
                'angkatan' => '2023',
                'image' => '',
            ],
            [
                'jabatan' => 'Staff',
                'nama' => 'Dina Mayada',
                'prodi' => 'Informatika',
                'angkatan' => '2022',
                'image' => '',
            ],
            [
                'jabatan' => 'Staff',
                'nama' => 'Devi Indriani',
                'prodi' => 'Informatika',
                'angkatan' => '2022',
                'image' => '',
            ],
            [
                'jabatan' => 'Staff',
                'nama' => 'Hamzan Wahyudi',
                'prodi' => 'Informatika',
                'angkatan' => '2023',
                'image' => '',
            ],
        ],
        'departemen-pendidikan-teknologi' => [
            [
                'jabatan' => 'Kepala Departemen Pentek',
                'nama' => 'Rizki Nurhafizh Achmad',
                'prodi' => 'Informatika',
                'angkatan' => '2021',
                'image' => '',
            ],
            [
                'jabatan' => 'Staff',
                'nama' => 'Radit Eka S',
                'prodi' => '-',
                'angkatan' => '-',
                'image' => '',
            ],
            [
                'jabatan' => 'Staff',
                'nama' => 'Wahidah Januarti',
                'prodi' => '-',
                'angkatan' => '-',
                'image' => '',
            ],
            [
                'jabatan' => 'Staff',
                'nama' => 'Yofi Syafrudin',
                'prodi' => '-',
                'angkatan' => '-',
                'image' => '',
            ],
        ],
    ];
@endphp


{{-- Biro Medinfo --}}
<div class="spacepy-5 py-10">
    <h4 class="md:text-2xl text-xl px-3 border-s-4 border-s-blue-500 font-bold">
        {{ $biro }}
    </h4>
    <div class="flex gap-8 py-10 overflow-x-auto">
        {{-- Kepala Bidang --}}
        <x-about.pengurus-card nama="{{ $pengurus['kepala-bidang']['nama'] }}"
            jabatan="{{ $pengurus['kepala-bidang']['jabatan'] }}"
            prodi="{{ $pengurus['kepala-bidang']['prodi'] }} - {{ $pengurus['kepala-bidang']['angkatan'] }}"></x-about.pengurus-card>

        {{-- Departemen Inovristek --}}
        @foreach ($pengurus['departemen-inovristek'] as $i => $item)
            <x-about.pengurus-card nama="{{ $item['nama'] }}" jabatan="{{ $item['jabatan'] }}"
                prodi="{{ $item['prodi'] }} - {{ $item['angkatan'] }}"></x-about.pengurus-card>
        @endforeach

        {{-- Departemen Pentek Inovristek --}}
        @foreach ($pengurus['departemen-pendidikan-teknologi'] as $i => $item)
            <x-about.pengurus-card nama="{{ $item['nama'] }}" jabatan="{{ $item['jabatan'] }}"
                prodi="{{ $item['prodi'] }} - {{ $item['angkatan'] }}"></x-about.pengurus-card>
        @endforeach
    </div>
</div>
