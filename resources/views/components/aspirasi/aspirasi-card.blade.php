<figure
    class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 rounded-t-lg md:rounded-t-none md:rounded-ss-lg md:border-e dark:bg-gray-800 dark:border-gray-700">
    <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
            {{ $aspirasi->judul ?? 'Very easy this was to integrate' }}
        </h3>
        <p class="my-4">
            {{
            $aspirasi->aspirasi ??
                "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique quisquam veritatis,
                        adipisci ab labore mollitia incidunt. Praesentium quidem sint harum?."
            }}
        </p>
    </blockquote>
    <figcaption class="flex items-center justify-center ">
        <img class="rounded-full w-9 h-9"
            src="{{ asset('img/blank-avatar.png') }}" alt="profile picture">
        <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
            <div>{{ $aspirasi->is_anonimous ? "Anonimous" : $aspirasi->nama_mahasiswa }}</div>
            <div class="text-sm text-gray-500 dark:text-gray-400 ">
                {{ $aspirasi->aspirasis_category->category }}
            </div>
        </div>
    </figcaption>
</figure>
