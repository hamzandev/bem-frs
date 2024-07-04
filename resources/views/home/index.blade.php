<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | BEM-FRS</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <x-public-navbar></x-public-navbar>
    <main class="py-36">
        <div id="default-carousel" class="relative w-full -z-10" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 min-h-[90vh] overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://frs.uts.ac.id/wp-content/uploads/2024/03/2.png"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://frs.uts.ac.id/wp-content/uploads/2024/03/1.png"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://frs.uts.ac.id/wp-content/uploads/2024/03/2.png"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://frs.uts.ac.id/wp-content/uploads/2024/03/1.png"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://frs.uts.ac.id/wp-content/uploads/2024/03/2.png"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                    data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                    data-carousel-slide-to="4"></button>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>

        <div class="container mx-auto py-10">
            <div class="grid grid-cols-3 gap-4 lg:grid-cols-4">
                <div class="p-4 bg-white shadow rounded-lg">
                    <h3 class="text-lg font-semibold">Column 1</h3>
                    <p>This is the first column. This is the first column. This is the first column. This is the first
                        column. This is the first column.</p>
                </div>
                <div class="p-4 bg-white shadow rounded-lg">
                    <h3 class="text-lg font-semibold">Column 2</h3>
                    <p>This is the second column. This is the second column. This is the second column. This is the
                        second column. This is the second column.</p>
                </div>
                <div class="p-4 bg-white shadow rounded-lg">
                    <h3 class="text-lg font-semibold">Column 3</h3>
                    <p>This is the third column. This is the third column. This is the third column. This is the third
                        column. This is the third column.</p>
                </div>
                <div class="p-4 bg-white shadow rounded-lg lg:col-span-1">
                    <h3 class="text-lg font-semibold">Column 4</h3>
                    <p>This is the fourth column. This is the fourth column. This is the fourth column. This is the
                        fourth column. This is the fourth column.</p>
                </div>
            </div>
        </div>

        <div class="container mx-auto">
            <h2 class="text-3xl font-extrabold uppercase">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
            <div class="grid grid-cols-2 gap-8 py-8">
                <p class="text-xl text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam
                    mollitia voluptas eum, officiis facere a adipisci reprehenderit. Non facere voluptate unde,
                    molestiae asperiores qui sapiente error nemo debitis cum culpa.</p>
                <p class="text-xl text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam
                    mollitia voluptas eum, officiis facere a adipisci reprehenderit. Non facere voluptate unde,
                    molestiae asperiores qui sapiente error nemo debitis cum culpa.</p>
            </div>
        </div>

        <div class="container mx-auto py-10">
            <div class="grid  gap-4 grid-cols-5">
                <div class="p-4 bg-white shadow rounded-lg">
                    <h3 class="text-lg font-semibold">Column 1</h3>
                    <p>This is the first column. This is the first column. This is the first column. This is the first
                        column. This is the first column.</p>
                </div>
                <div class="p-4 bg-white shadow rounded-lg">
                    <h3 class="text-lg font-semibold">Column 2</h3>
                    <p>This is the second column. This is the second column. This is the second column. This is the
                        second column. This is the second column.</p>
                </div>
                <div class="p-4 bg-white shadow rounded-lg">
                    <h3 class="text-lg font-semibold">Column 3</h3>
                    <p>This is the third column. This is the third column. This is the third column. This is the third
                        column. This is the third column.</p>
                </div>
                <div class="p-4 bg-white shadow rounded-lg lg:col-span-1">
                    <h3 class="text-lg font-semibold">Column 4</h3>
                    <p>This is the fourth column. This is the fourth column. This is the fourth column. This is the
                        fourth column. This is the fourth column.</p>
                </div>
                <div class="p-4 bg-white shadow rounded-lg lg:col-span-1">
                    <h3 class="text-lg font-semibold">Column 5</h3>
                    <p>This is the fourth column. This is the fourth column. This is the fourth column. This is the
                        fourth column. This is the fourth column.</p>
                </div>
            </div>
        </div>


    </main>



</body>

</html>
