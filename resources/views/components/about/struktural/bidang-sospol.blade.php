@php
    $biro = 'Bidang Sospol (Sosial Politik)';
    $pengurus = [
        'kepala-bidang' => [
            'nama' => 'Sapri Daulany',
            'prodi' => 'Teknik Elektro',
            'angkatan' => '2021',
            'jabatan' => 'Kepala Bidang',
            'image' => '',
        ],
        'departemen-advokastrat' => [
            [
                'jabatan' => 'Kepala Departemen Advokastrat',
                'nama' => 'Muhammad Sadam',
                'prodi' => 'Teknik Industri',
                'angkatan' => '2021',
                'image' => '',
            ],
            [
                'jabatan' => 'Staff',
                'nama' => 'Ikbal',
                'prodi' => 'Teknik Sistem Energi',
                'angkatan' => '2023',
                'image' => '',
            ],
            [
                'jabatan' => 'Staff',
                'nama' => 'Nur Fitria Ningsih',
                'prodi' => 'Teknik Elektro',
                'angkatan' => '2021',
                'image' => '',
            ],
            [
                'jabatan' => 'Staff',
                'nama' => 'Nandi Saputra',
                'prodi' => 'Teknik Mesin',
                'angkatan' => '2023',
                'image' => '',
            ],
        ],
        'departemen-penmas' => [
            [
                'jabatan' => 'Kepala Departemen Penmas',
                'nama' => 'Nanda Pasolingi',
                'prodi' => 'Informatika',
                'angkatan' => '2022',
                'image' => '',
            ],
            [
                'jabatan' => 'Staff',
                'nama' => 'Idhar',
                'prodi' => 'Informatika',
                'angkatan' => '2021',
                'image' => '',
            ],
            [
                'jabatan' => 'Staff',
                'nama' => 'Fatimah Damayanti',
                'prodi' => '-',
                'angkatan' => '-',
                'image' => '',
            ],
            [
                'jabatan' => 'Staff',
                'nama' => 'Reny Wahyuni',
                'prodi' => '-',
                'angkatan' => '-',
                'image' => '',
            ],
            [
                'jabatan' => 'Staff',
                'nama' => 'Hasriani',
                'prodi' => 'Informatika',
                'angkatan' => '2023',
                'image' => '',
            ],
            [
                'jabatan' => 'Staff',
                'nama' => 'Suan Seplara',
                'prodi' => 'Informatika',
                'angkatan' => '-',
                'image' => '',
            ],
            [
                'jabatan' => 'Staff',
                'nama' => 'Kinanti Ayuningtias',
                'prodi' => 'Informatika',
                'angkatan' => '2023',
                'image' => '',
            ],
        ],
        'departemen-relasi' => [
            [
                'jabatan' => 'Kepala Departemen Relasi',
                'nama' => 'Ananda Inggadisah',
                'prodi' => '-',
                'angkatan' => '-',
                'image' => '',
            ],
            [
                'jabatan' => 'Staff',
                'nama' => 'Bayu Pranata',
                'prodi' => '-',
                'angkatan' => '-',
                'image' => '',
            ],
            [
                'jabatan' => 'Staff',
                'nama' => 'Maulana Yusuf',
                'prodi' => 'Informatika',
                'angkatan' => '2022',
                'image' => '',
            ],
            [
                'jabatan' => 'Staff',
                'nama' => 'Basri',
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

        {{-- Departemen psdm --}}
        @foreach ($pengurus['departemen-advokastrat'] as $i => $item)
            <x-about.pengurus-card nama="{{ $item['nama'] }}" jabatan="{{ $item['jabatan'] }}"
                prodi="{{ $item['prodi'] }} - {{ $item['angkatan'] }}"></x-about.pengurus-card>
        @endforeach

        {{-- Departemen kekeluargaan --}}
        @foreach ($pengurus['departemen-penmas'] as $i => $item)
            <x-about.pengurus-card nama="{{ $item['nama'] }}" jabatan="{{ $item['jabatan'] }}"
                prodi="{{ $item['prodi'] }} - {{ $item['angkatan'] }}"></x-about.pengurus-card>
        @endforeach

        {{-- Departemen pemberdayaan perempuan --}}
        @foreach ($pengurus['departemen-relasi'] as $i => $item)
            <x-about.pengurus-card nama="{{ $item['nama'] }}" jabatan="{{ $item['jabatan'] }}"
                prodi="{{ $item['prodi'] }} - {{ $item['angkatan'] }}"></x-about.pengurus-card>
        @endforeach
    </div>
</div>
