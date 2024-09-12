<section class="container mx-auto mt-20 py-10">
    <h2 class="text-3xl font-extrabold text-center mb-5">Aspirasi Para Mahasiswa FRS</h2>
    <p class="text-gray-500 text-lg text-center lg:w-3/4 lg:mx-auto mb-10">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eum facilis, dolorum architecto quaerat
        exercitationem et ipsam natus dolor, facere dignissimos voluptas. Labore perferendis pariatur error quia rem
        similique nesciunt!
    </p>
    <div
        class="grid mb-8 border border-gray-200 rounded-lg shadow-sm md:mb-12 md:grid-cols-2 bg-white">
        @foreach ($aspirasis as $aspirasi)
            <x-aspirasi.aspirasi-card :aspirasi="$aspirasi"></x-aspirasi.aspirasi-card>
        @endforeach
    </div>

    <x-pagination></x-pagination>
</section>
