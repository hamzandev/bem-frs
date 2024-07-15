@php
    $menus = collect([
        [
            'label' => 'Beranda',
            'route' => 'home',
        ],
        [
            'label' => 'Profil',
            'route' => 'about',
            'children' => [
                [
                    'label' => 'Tentang Kami ',
                    'section' => '#latar-belakang',
                ],
                [
                    'label' => 'Visi & Misi',
                    'section' => '#visi-misi',
                ],
                [
                    'label' => 'Struktural',
                    'section' => '#struktural',
                ],
                [
                    'label' => 'Program Studi',
                    'section' => '#program-studi',
                ],
            ],
        ],
        [
            'label' => 'Aspirasi',
            'route' => 'aspirasi',
        ],
        [
            'label' => 'Artikel',
            'route' => 'artikel.index',
        ],
        [
            'label' => 'Kontak',
            'route' => 'kontak',
        ],
    ]);
@endphp

<nav class="bg-white/90 backdrop-blur dark:bg-gray-900 fixed w-screen z-50 ">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <x-logo></x-logo>
        <x-search></x-search>
        <di class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
            <x-search-mobile></x-search-mobile>
            <ul id="navbar-links"
                class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                @foreach ($menus as $menu)
                    <x-nav-link :link="$menu"></x-nav-link>
                @endforeach
            </ul>
        </di>
    </div>
</nav>
