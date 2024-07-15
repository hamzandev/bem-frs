<x-app title="Aspirasi Mahasiswa">
    <div class="container mx-auto  min-h-[80vh] py-10">
        {{-- Aspirasi Section --}}
        <section class="lg:flex items-center lg:px-0 px-5 grid gap-10 w-full h-[90%]">
            <header id="heading" class="lg:w-1/2 flex flex-col">
                <div
                    class="image aspect-square  flex items-center justify-center overflow-hidden lg:mx-0 mx-auto w-2/3 ">
                    <img src="https://cdn.dribbble.com/users/5008689/screenshots/16998292/media/04e0ef5ceee04bbd1ab8ebb5b9486720.jpg"
                        alt="form-ilustration" class="bg-blend-multiply">
                </div>
                <div class="grid  gap-3">
                    <h1 class="md:text-5xl text-3xl font-extrabold">Aspirasi Mahasiswa</h1>
                    <p class="text-lg text-gray-500">Berikan Aspirasi berupa kritik, saran, serta pengaduan kamu sebagai
                        mahasiswa Fakultas Rekayasa Sistem ke pihak Badan Eksekutif Mahasiswa Fakultas Rekayasa Sistem
                        supaya kamu sadari bahwa kami selalu ada bersamamu.</p>
                </div>
            </header>
            <div
                class="lg:w-1/2 p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
                <x-aspirasi.form-aspirasi :categories="$categories"></x-aspirasi.form-aspirasi>
            </div>

        </section>

        @if (session('message'))
        <div class="mt-10 pt-20" id="aspirasi-alert">
                <x-alert type="success">{{ session('message') }}</x-alert>
            </div>
        @endif

        {{-- Aspirasi lists --}}
        {{-- @dd($aspirasis) --}}

        @if ($aspirasis->isEmpty())
            <div class="flex items-center justify-center py-8 flex-col min-h-[60vh] bg-white rounded-xl mt-20 border border-gray-100">
                <h3 class="text-xl font-semibold">Aspirasi Belum Ditemukan</h3>
                <p class="ml-3 text-gray-500">Tidak ada aspirasi yang tersedia.</p>
            </div>
        @else
            <x-aspirasi.list-aspirasi :aspirasis="$aspirasis"></x-aspirasi.list-aspirasi>
        @endif
    </div>

</x-app>
