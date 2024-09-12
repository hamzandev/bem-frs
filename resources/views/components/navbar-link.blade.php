@if (array_key_exists('children', $link))
    <li>
        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
            class="flex items-center justify-between w-full py-2 px-3 {{ 'text-gray-900' . (request()->routeIs($link['route']) ? ' text-blue-700' : '') }} rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto">
            {{ $link['label'] ?? '' }}
            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 4 4 4-4" />
            </svg>
        </button>
        <!-- Dropdown menu -->
        <div id="dropdownNavbar"
            class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                @foreach ($link['children'] as $child)
                    <li>
                        <a href="{{ route($link['route'] ?? '', $child['section'] ?? '') }}"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{ $child['label'] ?? '' }}</a>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </li>
@else
    <li>
        <a href="{{ route($link['route']) }}"
            class="block py-2 px-3 {{ 'text-gray-900' . (request()->routeIs($link['route']) ? ' text-blue-700' : '') }} rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">{{ $link['label'] ?? '' }}</a>
    </li>
@endif
