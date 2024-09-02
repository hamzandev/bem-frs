@php
    $pengurus = [
        [
            'jabatan' => 'Ketua',
            'nama' => 'Widarman',
            'prodi' => 'Informatika',
            'angkatan' => '2021',
            'image' => '',
        ],
        [
            'jabatan' => 'Wakil Ketua',
            'nama' => 'Irfan Fajar Diansyah',
            'prodi' => 'Teknik Elektro',
            'angkatan' => '2021',
            'image' => '',
        ],
        [
            'jabatan' => 'Sekretaris',
            'nama' => 'Rahmawatillawati Karim',
            'prodi' => 'Informatika',
            'angkatan' => '2021',
            'image' => '',
        ],
        [
            'jabatan' => 'Bendahara',
            'nama' => 'Lilis S Amrullah',
            'prodi' => 'Teknik Elektro',
            'angkatan' => '2021',
            'image' => '',
        ],
    ];
@endphp


{{-- Formatur --}}
<div class="py-10">
    <h4 class="md:text-2xl text-xl px-3 border-s-4 border-s-blue-500 font-bold">Formatur</h4>
    <div class="flex gap-8 py-10 overflow-x-auto">
        @foreach ($pengurus as $i => $item)
            <x-about.pengurus-card nama="{{ $item['nama'] }}" jabatan="{{ $item['jabatan'] }}" prodi="{{ $item['prodi'] }} - {{ $item['angkatan'] }}"></x-about.pengurus-card>
        @endforeach
    </div>
</div>
