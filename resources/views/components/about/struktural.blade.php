{{-- Strruktural --}}
<section class="min-h-screen pt-24 lg:px-10" id="struktural">
    <div class="container mx-auto">
        <header class="space-y-4 text-center">
            <h3 class="text-3xl font-extrabold">Struktural Pengurus</h3>
            <p class="text-gray-500 text-lg md:text-xl leading-relaxed lg:w-2/3 lg:mx-auto text-justify">Struktur
                organisasi di bawah ini menggambarkan hierarki dan pembagian tanggung jawab dalam organisasi mahasiswa
                BEM FRS. Posisi Ketua Badan Eksekutif Mahasiswa sebagai pimpinan tertinggi, diikuti oleh Wakil Ketua,
                dan selanjutnya terdapat beberapa divisi fungsional seperti Sekretaris, Bendahara, Kepala Biro, dan
                Kepala Bidang untuk menjalankan kegiatan organisasi secara terstruktur.</p>
        </header>
        {{-- Diagram Struktural --}}
        <div
            class="my-10 h-[80vh] shadow w-full bg-gray-200 flex items-center justify-center rounded-2xl md:overflow-hidden overflow-x-scroll">
            <img src="{{ asset('img/struktural.png') }}" alt="strukural-bem" class="md:w-full md:h-full md:object-cover">
        </div>

        <div class="my-5 flex flex-col gap-2 py-3 border-b-2 md:text-start text-center">
            <h3 class="text-2xl font-bold">
                Kabinet <span class="text-blue-500">Aksi Kolaborasi</span>
            </h3>
            <p class="text-gray-500">
                Struktur Badan Eksekutif Mahasiswa Fakultas Rekayasa Sistem Periode 2024 - 2025.
            </p>
        </div>

       {{-- Formatur --}}
       <x-about.struktural.formatur></x-about.struktural.formatur>

       {{-- Biro Medinfo --}}
       <x-about.struktural.biro-medinfo></x-about.struktural.biro-medinfo>

       {{-- Biro BJMO --}}
       <x-about.struktural.biro-bjmo></x-about.struktural.biro-bjmo>

       {{-- Biro Ekraf --}}
       <x-about.struktural.biro-ekraf></x-about.struktural.biro-ekraf>

       {{-- Bidang Ristek --}}
       <x-about.struktural.bidang-ristek></x-about.struktural.bidang-ristek>

       {{-- Bidang Penghas --}}
       <x-about.struktural.bidang-penghas></x-about.struktural.bidang-penghas>

       {{-- Bidang Sospol --}}
       <x-about.struktural.bidang-sospol></x-about.struktural.bidang-sospol>

    </div>
</section>
