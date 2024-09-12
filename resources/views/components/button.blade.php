@if (isset($asLink))
    <a href="{{ $href }}"
        class="px-5 w-max py-2.5 text-sm font-medium text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center block">
        {{ $slot }}
    </a>
@else
    <button
        class="px-5 w-max py-2.5 text-sm font-medium text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center block">
        {{ $slot }}
    </button>
@endif

