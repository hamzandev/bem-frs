@php

    $activeClass =
        'inline-flex items-center px-1 pt-1 md:border-b-2 md:border-indigo-400 text-sm font-medium text-indigo-600 leading-5 text-gray-900 md:focus:outline-none md:focus:border-indigo-700 transition duration-150 ease-in-out';

    $inactiveClass =
        'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';

    $dropdownButtonClass =
        'inline-flex items-center h-full px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out bg-white border border-transparent rounded-md hover:text-gray-700 focus:outline-none';

    $links = [
        [
            'name' => 'Dashboard',
            'href' => route('dashboard'),
            'active' => request()->routeIs('dashboard'),
            'children' => null,
        ],
        [
            'name' => 'Jurnalistik',
            'href' => null,
            'active' => request()->routeIs([
                'master-data.artikels.index',
                'master-data.artikels.create',
                'master-data.artikels.edit',
                'master-data.artikels.show',
                'master-data.aspirasi.index',
                'master-data.aspirasi.create',
                'master-data.aspirasi.edit',
                'master-data.aspirasi.show',
            ]),
            'children' => [
                [
                    'name' => 'Artikel Berita',
                    'href' => route('master-data.artikels.index'),
                    'active' => request()->routeIs(['master-data.artikels.index']),
                ],
                [
                    'name' => 'Aspirasi Mahasiswa',
                    'href' => route('master-data.aspirasi.index'),
                    'active' => request()->routeIs('master-data.aspirasi.index'),
                ],
                [
                    'name' => 'Unggah Jurnal',
                    'href' => route('dashboard'),
                    'active' => request()->routeIs('dashboard'),
                ],
            ],
        ],
        [
            'name' => 'Organisasi',
            'href' => null,
            'active' => false,
            'children' => [
                [
                    'name' => 'Formatur',
                    'href' => route('dashboard'),
                    'active' => request()->routeIs('dashboard'),
                ],
                [
                    'name' => 'Biro Organisasi',
                    'href' => route('dashboard'),
                    'active' => request()->routeIs('dashboard'),
                ],
                [
                    'name' => 'Bidang Organisasi',
                    'href' => route('dashboard'),
                    'active' => request()->routeIs('dashboard'),
                ],
                [
                    'name' => 'Departemen',
                    'href' => route('dashboard'),
                    'active' => request()->routeIs('dashboard'),
                ],
            ],
        ],
        [
            'name' => 'Kepengurusan',
            'href' => null,
            'active' => false,
            'children' => [
                [
                    'name' => 'Kepala Dekan',
                    'href' => route('dashboard'),
                    'active' => request()->routeIs('dashboard'),
                ],
                [
                    'name' => 'Data Pengurus',
                    'href' => route('dashboard'),
                    'active' => request()->routeIs('dashboard'),
                ],
            ],
        ],
        [
            'name' => 'Data Kategori',
            'href' => null,
            'active' => false,
            'children' => [
                [
                    'name' => 'Kategori Aspirasi',
                    'href' => route('dashboard'),
                    'active' => request()->routeIs('dashboard'),
                ],
                [
                    'name' => 'Kategori Artikel & Jurnal',
                    'href' => route('dashboard'),
                    'active' => request()->routeIs('dashboard'),
                ],
            ],
        ],
        [
            'name' => 'Administrator',
            'href' => null,
            'active' => false,
            'children' => [
                [
                    'name' => 'Akun Pengguna',
                    'href' => route('dashboard'),
                    'active' => request()->routeIs('dashboard'),
                ],
            ],
        ],
    ];
@endphp

@foreach ($links as $link)
    @if ($dropdown = $link['children'])
        <x-nav-link>
            <x-dropdown align="right" width="64">
                <x-slot name="trigger">
                    <button class={{ $dropdownButtonClass }}>
                        <span
                            class="{{ $link['active'] ? $activeClass : $inactiveClass }}">
                            {{ $link['name'] }}
                        </span>
                    </button>
                </x-slot>

                <x-slot name="content">
                    @foreach ($dropdown as $dropdownLink)
                        <x-dropdown-link href="{{ $dropdownLink['href'] }}">
                            {{ $dropdownLink['name'] }}
                        </x-dropdown-link>
                    @endforeach
                </x-slot>
            </x-dropdown>
        </x-nav-link>
    @else
        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            {{ __('Dashboard') }}
        </x-nav-link>
    @endif
@endforeach
