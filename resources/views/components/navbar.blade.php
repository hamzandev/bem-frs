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
            'label' => 'Artikel & Berita',
            'route' => 'artikel.index',
        ],
        [
            'label' => 'Jurnal',
            'route' => 'jurnal',
        ],
    ]);
@endphp

<nav class="fixed z-50 w-screen bg-white/90 backdrop-blur ">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl p-4 mx-auto">
        <x-logo></x-logo>
        <x-search></x-search>
        <di class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
            <x-search-mobile></x-search-mobile>
            <ul id="navbar-links"
                class="flex flex-col p-4 mt-4 font-medium border border-gray-100 rounded-lg md:p-0 bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent">
                @foreach ($menus as $menu)
                    <x-navbar-link :link="$menu"></x-navbar-link>
                @endforeach
            </ul>
        </di>
    </div>
</nav>
