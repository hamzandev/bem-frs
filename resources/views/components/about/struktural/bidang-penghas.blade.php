@php
    $biro = 'Bidang Penghas';
    $pengurus = [
        'kepala-bidang' => [
            'nama' => 'Putry Chaerunnisa M',
            'prodi' => '-',
            'jabatan' => 'Kepala Bidang',
            'angkatan' => '-',
            'image' => '',
        ],
        'departemen-psdm' => [
            [
                'jabatan' => 'Kepala Departemen',
                'nama' => 'Detha Putri Saifunnida',
                'prodi' => 'Informatika',
                'angkatan' => '2022',
                'image' => '',
            ],
            [
                'jabatan' => 'Staff',
                'nama' => 'Oby Rizki R',
                'prodi' => '-',
                'angkatan' => '-',
                'image' => '',
            ],
            [
                'jabatan' => 'Staff',
                'nama' => 'Dwi Maryani',
                'prodi' => 'Informatika',
                'angkatan' => '2022',
                'image' => '',
            ],
            [
                'jabatan' => 'Staff',
                'nama' => 'Sukarti',
                'prodi' => 'Informatika',
                'angkatan' => '2022',
                'image' => '',
            ],
            [
                'jabatan' => 'Staff',
                'nama' => 'Hikmah S',
                'prodi' => '-',
                'angkatan' => '-',
                'image' => '',
            ],
            [
                'jabatan' => 'Staff',
                'nama' => 'Magfiratul J',
                'prodi' => 'Informatika',
                'angkatan' => '2022',
                'image' => '',
            ],
            [
                'jabatan' => 'Staff',
                'nama' => 'Aditya Rizaldy',
                'prodi' => 'Informatika',
                'angkatan' => '-',
                'image' => '',
            ],
        ],
        'departemen-kekeluargaan' => [
            [
                'jabatan' => 'Kepala Departemen',
                'nama' => 'Wahyu Librian Saputra',
                'prodi' => '-',
                'angkatan' => '-',
                'image' => '',
            ],
            [
                'jabatan' => 'Staff',
                'nama' => 'Zaitun',
                'prodi' => 'Informatika',
                'angkatan' => '2022',
                'image' => '',
            ],
            [
                'jabatan' => 'Staff',
                'nama' => 'Marliana',
                'prodi' => '-',
                'angkatan' => '-',
                'image' => '',
            ],
            [
                'jabatan' => 'Staff',
                'nama' => 'Nilam',
                'prodi' => 'Informatika',
                'angkatan' => '2022',
                'image' => '',
            ],
        ],
        'departemen-pemberdayaan-perempuan' => [
            [
                'jabatan' => 'Kepala Departemen',
                'nama' => 'Maemun Haniati',
                'prodi' => 'Informatika',
                'angkatan' => '2022',
                'image' => '',
            ],
            [
                'jabatan' => 'Staff',
                'nama' => 'Riska',
                'prodi' => '-',
                'angkatan' => '-',
                'image' => '',
            ],
            [
                'jabatan' => 'Staff',
                'nama' => 'Nur Fauziah',
                'prodi' => 'Informatika',
                'angkatan' => '2022',
                'image' => '',
            ],
            [
                'jabatan' => 'Staff',
                'nama' => 'Rizka Margariatul J',
                'prodi' => 'Informatika',
                'angkatan' => '2022',
                'image' => '',
            ],
            [
                'jabatan' => 'Staff',
                'nama' => 'Dinar Riyati',
                'prodi' => 'Informatika',
                'angkatan' => '2022',
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
        @foreach ($pengurus['departemen-psdm'] as $i => $item)
            <x-about.pengurus-card nama="{{ $item['nama'] }}" jabatan="{{ $item['jabatan'] }}"
                prodi="{{ $item['prodi'] }} - {{ $item['angkatan'] }}"></x-about.pengurus-card>
        @endforeach

        {{-- Departemen kekeluargaan --}}
        @foreach ($pengurus['departemen-kekeluargaan'] as $i => $item)
            <x-about.pengurus-card nama="{{ $item['nama'] }}" jabatan="{{ $item['jabatan'] }}"
                prodi="{{ $item['prodi'] }} - {{ $item['angkatan'] }}"></x-about.pengurus-card>
        @endforeach

        {{-- Departemen pemberdayaan perempuan --}}
        @foreach ($pengurus['departemen-pemberdayaan-perempuan'] as $i => $item)
            <x-about.pengurus-card nama="{{ $item['nama'] }}" jabatan="{{ $item['jabatan'] }}"
                prodi="{{ $item['prodi'] }} - {{ $item['angkatan'] }}"></x-about.pengurus-card>
        @endforeach
    </div>
</div>
