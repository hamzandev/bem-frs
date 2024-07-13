<section id="visi-misi" class="py-32 bg-white lg:px-10 rounded-b-2xl shadow-sm">
    <header id="heading" class="lg:flex grid lg:gap-10">
        <div id="ilustration" class="lg:w-2/5 w-3/4 lg:mx-0 mx-auto lg:aspect-square">
            <img src="https://cdn.dribbble.com/users/3005912/screenshots/7144474/media/2e6d66e19337166411cad87f1e223b65.jpg"
                alt="ilustration">
        </div>

        <div id="typography" class="lg:w-3/5 pt-5 lg:flex justify-center flex-col lg:text-start text-center">
            <h1 class="lg:text-5xl text-3xl mb-3 lg:w-[80%] font-extrabold">Visi & Misi BEM-FRS</h1>
            <p class="lg:text-xl text-lg text-gray-400">Pada bagian ini, kamu akan temukan
                Visi dan juga Misi terdepan Badan Eksekutif Mahasiswa Fakultas Rekayasa Sistem.</p>
        </div>
    </header>

    {{-- Tabs --}}
    <div class="mb-4 border-b border-gray-200 -mt-20 dark:border-gray-700">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab"
            data-tabs-toggle="#default-tab-content" role="tablist">
            <li class="me-2" role="presentation">
                <button class="inline-block text-3xl font-bold p-4 border-b-2 rounded-t-lg" id="visi-tab"
                    data-tabs-target="#visi" type="button" role="tab" aria-controls="visi"
                    aria-selected="false">Visi</button>
            </li>
            <li class="me-2" role="presentation">
                <button
                    class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 text-3xl font-bold"
                    id="misi-tab" data-tabs-target="#misi" type="button" role="tab" aria-controls="misi"
                    aria-selected="false">Misi</button>
            </li>
        </ul>
    </div>
    <div id="default-tab-content">
        <div class="p-4 rounded-lg bg-gray-50 dark:bg-gray-800 grid lg:grid-cols-1 gap-5" id="visi" role="tabpanel"
            aria-labelledby="visi-tab">
            {{-- Card --}}
            <div class="block max-w-full p-7 bg-white border border-gray-200 rounded-lg shadow">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Menjadikan BEM FRS sebagai wadah Kolaborasi Berdasarkan Kultur dan Budaya untuk Mahasiswa FRS di
                    Bidang Teknologi agar terwujudnya Mahasiswa yang berintergritas, Kritis, dan Inovatif.
                </h5>
            </div>
        </div>
        <div class="grid lg:grid-cols-3 gap-5 p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="misi" role="tabpanel"
            aria-labelledby="misi-tab">
            {{-- Card --}}
            <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Membangun Kerja Sama Yang Harmonis Antara Lembaga Mahasiswa
                </h5>
            </div>

            {{-- Card --}}
            <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Mengadvokasi Kebutuhan Akademik, Minat dan Bakat Mahasiswa FRS
                </h5>
            </div>
            {{-- Card --}}
            <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                   Mengakselerasi Sumber Daya Mahasiswa Agar Membangung Jiwa Kritis dan Sosial
                </h5>
            </div>
        </div>
    </div>

</section>
