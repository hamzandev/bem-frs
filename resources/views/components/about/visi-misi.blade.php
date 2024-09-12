<section id="visi-misi" class="py-32 bg-white lg:px-10 rounded-b-2xl shadow-sm">
    <header id="heading" class="lg:flex grid lg:gap-10">
        <div id="ilustration" class="lg:w-1/4 w-1/2 lg:mx-0 mx-auto">
            <img src="../img/Logo Kabinet.png" alt="ilustration" class="mx-auto lg:mx-0 w-full h-auto">
        </div>

        <div id="typography" class="lg:w-2/3 pt-5 lg:flex justify-center flex-col md:text-start text-center">
            <h1 class="md:text-5xl text-3xl mb-3 lg:w-[80%] font-extrabold">Visi & Misi BEM-FRS</h1>
            <p class="md:text-xl text-lg text-gray-500">
                Pada bagian ini, kamu akan temukan Visi dan juga Misi terdepan Badan Eksekutif Mahasiswa Fakultas
                Rekayasa Sistem.
            </p>
        </div>
    </header>

    {{-- Tabs --}}
    <div class="mb-4 border-b border-gray-200 lg:mt-10 mt-5">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab"
            data-tabs-toggle="#default-tab-content" role="tablist">
            <li class="me-2" role="presentation">
                <button class="inline-block md:text-3xl font-bold p-4 border-b-2 rounded-t-lg" id="visi-tab"
                    data-tabs-target="#visi" type="button" role="tab" aria-controls="visi"
                    aria-selected="false">Visi</button>
            </li>
            <li class="me-2" role="presentation">
                <button
                    class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 md:text-3xl font-bold"
                    id="misi-tab" data-tabs-target="#misi" type="button" role="tab" aria-controls="misi"
                    aria-selected="false">Misi</button>
            </li>
            <li class="me-2" role="presentation">
                <button
                    class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 md:text-3xl font-bold"
                    id="program-unggulan-tab" data-tabs-target="#program-unggulan" type="button" role="tab"
                    aria-controls="program-unggulan" aria-selected="false">Program Unggulan</button>
            </li>
        </ul>
    </div>

    <div id="default-tab-content">
        <div class="p-4 rounded-lg bg-gray-50 grid lg:grid-cols-1 gap-5" id="visi" role="tabpanel"
            aria-labelledby="visi-tab">
            {{-- Card --}}
            <div class="block max-w-full p-7 bg-white border border-gray-200 rounded-lg shadow text-left">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                    Menjadikan BEM FRS sebagai wadah Kolaborasi Berdasarkan Kultur dan Budaya untuk Mahasiswa FRS di
                    Bidang Teknologi agar terwujudnya Mahasiswa yang berintegritas, Kritis, dan Inovatif.
                </h5>
            </div>
        </div>

        <div class="grid lg:grid-cols-3 gap-5 p-4 rounded-lg bg-gray-50" id="misi" role="tabpanel"
            aria-labelledby="misi-tab">
            {{-- Card --}}
            <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow text-left">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                    Membangun Kerja Sama Yang Harmonis Antara Lembaga Mahasiswa
                </h5>
            </div>
            {{-- Card --}}
            <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow text-left">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                    Mengadvokasi Kebutuhan Akademik, Minat dan Bakat Mahasiswa FRS
                </h5>
            </div>
            {{-- Card --}}
            <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow text-left">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                    Mengakselerasi Sumber Daya Mahasiswa Agar Membangung Jiwa Kritis dan Sosial
                </h5>
            </div>
        </div>

        <div class="grid lg:grid-cols-3 gap-5 p-4 rounded-lg bg-gray-50" id="program-unggulan"
            role="tabpanel" aria-labelledby="program-unggulan-tab">
            {{-- Card --}}
            <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow text-left">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                    Kompetisi Riset & Teknologi
                </h5>
                <p class="text-gray-700">Kreasi adalah sebuah kompetisi riset dan inovasi yang
                    bertujuan untuk mendorong orang-orang dalam mengembangkan ide-ide baru, solusi-solusi kreatif, atau
                    penemuan-penemuan di berbagai bidang seperti sains, teknologi, seni, atau bisnis.</p>
            </div>
            {{-- Card --}}
            <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow text-left">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                    Teropong FRS
                </h5>
                <p class="text-gray-700">
                    Podcast "Teropong FRS" menyajikan wawasan mendalam tentang Fakultas Rekayasa Sistem (FRS), dengan
                    fokus pada:
                </p>
                <ul class="list-disc list-inside text-gray-700 mt-4">
                    <li><strong>Pendidikan Teknologi</strong>: Metode dan inovasi terbaru dalam pengajaran teknologi.
                    </li>
                    <li><strong>Inovasi Riset Teknologi</strong>: Terobosan riset dan tren terkini dalam teknologi.</li>
                    <li><strong>Departemen PSDM</strong>: Strategi pengembangan keterampilan dan pelatihan profesional.
                    </li>
                    <li><strong>Pemberdayaan Perempuan</strong>: Kontribusi dan tantangan perempuan dalam teknologi
                        serta upaya kesetaraan gender.</li>
                    <li><strong>Advokastrat</strong>: Kebijakan dan strategi yang mempengaruhi pendidikan dan
                        penelitian.</li>
                    <li><strong>Pengabdian Masyarakat</strong>: Proyek dan dampak pengabdian masyarakat oleh fakultas
                        dan mahasiswa.</li>
                </ul>
                <p class="text-gray-700 mt-4">
                    Podcast ini menginspirasi dan mengedukasi pendengar mengenai berbagai aspek penting dalam rekayasa
                    sistem.
                </p>
            </div>
            {{-- Card --}}
            <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow text-left">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                    Lingkungan Terbentuknya Silaturahmi dan Harmonisasi (LITERASI)
                </h5>
                <p class="text-gray-700">Lingkungan Terbentuknya Silaturahmi dan Harmonisasi
                    (LITERASI) di Fakultas Rekayasa Sistem bertujuan untuk memperkuat hubungan dan menciptakan suasana
                    yang harmonis antara mahasiswa, dosen, staf, dan pihak rektorat. Program ini fokus pada peningkatan
                    komunikasi, kerja sama, dan integrasi melalui pertemuan rutin, acara sosial, dan program mentoring.
                    LITERASI juga melibatkan kolaborasi dengan rektorat dan penggunaan platform komunikasi untuk
                    memastikan informasi tetap terupdate dan partisipasi aktif. Melalui berbagai kegiatan ini, LITERASI
                    berupaya menciptakan lingkungan akademik yang suportif, positif, dan inklusif, serta mempererat
                    keterlibatan seluruh civitas akademika dalam berbagai aktivitas fakultas.</p>
            </div>
        </div>
    </div>
</section>
