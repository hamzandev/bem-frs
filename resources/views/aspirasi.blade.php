<x-app title="Aspirasi Mahasiswa">
    @php
        $categories = \App\Models\Category::all();
    @endphp
    <section class="container mx-auto items-center flex min-h-[80vh] py-10">
        <div class="lg:flex lg:px-0 px-5 grid gap-10 w-full h-[90%]">
            <div class="lg:w-1/2 flex flex-col">
                <div class="image aspect-square lg:mx-0 mx-auto w-2/3">
                    <img src="https://cdn.dribbble.com/users/5008689/screenshots/16998292/media/04e0ef5ceee04bbd1ab8ebb5b9486720.jpg" alt="form-ilustration">
                </div>
                <div class="grid gap-3">
                    <h1 class="lg:text-5xl text-3xl font-extrabold">Aspirasi Mahasiswa</h1>
                    <p class="text-lg text-gray-500">Berikan Aspirasi berupa kritik, saran, serta pengaduan kamu sebagai mahasiswa Fakultas Rekayasa Sistem ke pihak Badan Eksekutif Mahasiswa Fakultas Rekayasa Sistem supaya kamu sadari bahwa kami selalu ada bersamamu.</p>
                </div>
            </div>
            <div class="lg:w-1/2 p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
                <form class="space-y-6" action="{{ route('aspirasi.store') }}" method="POST">
                    @csrf
                    <div class="grid gap-3 lg:grid-cols-2">
                        <div>
                            <label for="nama_mahasiswa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap</label>
                            <input type="text" name="nama_mahasiswa" id="nama_mahasiswa" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Nama Mahasiswa" required />
                        </div>
                        <div>
                            <label for="category_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori Aspirasi</label>
                            <select id="category_id" name="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>-- Pilih Kategori --</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div>
                        <label for="telepon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No.HP</label>
                        <input type="tel" name="telepon" id="telepon" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Ex: 08xxxxxxxxxx" required />
                    </div>
                    <div>
                        <label for="judul" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul Aspirasi</label>
                        <input type="text" name="judul" id="judul" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Ex: Pengaduan tentang fasilitas yang rusak" required />
                    </div>
                    <div>
                        <label for="aspirasi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Aspirasi kamu</label>
                        <textarea id="aspirasi" name="aspirasi" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tuliskan aspirasi disini..." required></textarea>
                    </div>
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" value="1" name="is_anonimous" class="sr-only peer">
                        <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                        <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Kirim sebagai Anonimous</span>
                    </label>
                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kirim</button>
                </form>
                @if (session('success'))
                    <div class="mt-4 px-4 py-2 bg-green-100 text-green-800 rounded-lg">{{ session('success') }}</div>
                @endif
                @if ($errors->any())
                    <div class="mt-4 px-4 py-2 bg-red-100 text-red-800 rounded-lg">
                        <ul class="list-disc pl-4">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </section>
    <section class="container mx-auto my-20">
        <h2 class="text-3xl font-extrabold text-center mb-5">Aspirasi Para Mahasiswa FRS</h2>
        <p class="text-gray-500 text-lg text-center lg:w-3/4 lg:mx-auto mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eum facilis, dolorum architecto quaerat exercitationem et ipsam natus dolor, facere dignissimos voluptas. Labore perferendis pariatur error quia rem similique nesciunt!</p>
        <div class="grid mb-8 border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 md:mb-12 md:grid-cols-2 bg-white dark:bg-gray-800">
            <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 rounded-t-lg md:rounded-t-none md:rounded-ss-lg md:border-e dark:bg-gray-800 dark:border-gray-700">
                <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Very easy this was to integrate</h3>
                    <p class="my-4">If you care for your time, I hands down would go with this."</p>
                </blockquote>
                <figcaption class="flex items-center justify-center">
                    <img class="rounded-full w-9 h-9" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png" alt="profile picture">
                    <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                        <div>Bonnie Green</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">Developer at Open AI</div>
                    </div>
                </figcaption>
            </figure>
            <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 rounded-tr-lg dark:bg-gray-800 dark:border-gray-700">
                <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Solid foundation for any project</h3>
                    <p class="my-4">Designing with Figma components that can be easily translated to the utility classes of Tailwind CSS is a huge timesaver!"</p>
                </blockquote>
                <figcaption class="flex items-center justify-center">
                    <img class="rounded-full w-9 h-9" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png" alt="profile picture">
                    <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                        <div>Roberta Casas</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">Lead designer at Dropbox</div>
                    </div>
                </figcaption>
            </figure>
            <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 rounded-tr-lg dark:bg-gray-800 dark:border-gray-700">
                <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Solid foundation for any project</h3>
                    <p class="my-4">Designing with Figma components that can be easily translated to the utility classes of Tailwind CSS is a huge timesaver!"</p>
                </blockquote>
                <figcaption class="flex items-center justify-center">
                    <img class="rounded-full w-9 h-9" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png" alt="profile picture">
                    <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                        <div>Roberta Casas</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">Lead designer at Dropbox</div>
                    </div>
                </figcaption>
            </figure>
            <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-gray-200 rounded-tr-lg dark:bg-gray-800 dark:border-gray-700">
                <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Solid foundation for any project</h3>
                    <p class="my-4">Designing with Figma components that can be easily translated to the utility classes of Tailwind CSS is a huge timesaver!"</p>
                </blockquote>
                <figcaption class="flex items-center justify-center">
                    <img class="rounded-full w-9 h-9" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png" alt="profile picture">
                    <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                        <div>Roberta Casas</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">Lead designer at Dropbox</div>
                    </div>
                </figcaption>
            </figure>
        </div>
    </section>
</x-app>
