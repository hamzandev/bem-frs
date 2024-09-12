@php
    $socials = [
        [
            'name' => 'youtube',
            'url' => 'https://www.youtube.com/@KabinetAksiKolaborasi/videos',
            'icon' => '<svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
  <path fill-rule="evenodd" d="M21.7 8.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.839c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.839 4.225 4.225 0 0 0-.79 1.965 30.146 30.146 0 0 0-.2 3.206v1.5a30.12 30.12 0 0 0 .2 3.206c.094.712.364 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.151 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965 30.12 30.12 0 0 0 .2-3.206v-1.516a30.672 30.672 0 0 0-.202-3.206Zm-11.692 6.554v-5.62l5.4 2.819-5.4 2.801Z" clip-rule="evenodd"/>
</svg>',
        ],
        [
            'name' => 'instagram',
            'url' => 'https://www.instagram.com/bemfrs_uts/',
            'icon' => '<svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path fill="currentColor" fill-rule="evenodd" d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z" clip-rule="evenodd"/>
</svg>',
        ],
    ];
@endphp

<div id="socials-card" class="md:w-4/12 p-6 bg-white border border-gray-200 rounded-xl shadow">
    <h5 class="mb-5 text-xl font-semibold tracking-tight text-gray-900">
        Terhubung dengan kami
    </h5>
    <div class="grid gap-y-4 mt-3">
        @foreach ($socials as $social)
            <a target="_blank" href="{{ $social['url'] }}" class="px-3 py-2 border border-slate-300 rounded-lg hover:outline hover:outline-blue-300 outline-offset-2 duration-200 transition flex items-center gap-3">
                {!! $social['icon'] !!}

                <span class="font-bold capitalize">{{ $social['name'] }}</span>
            </a>
        @endforeach

    </div>
</div>
