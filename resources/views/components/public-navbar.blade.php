<nav class="fixed w-full pt-2 shadow-md bg-white z-20">
    {{-- TOP --}}
    <div id="top" class="flex w-full border-b border-b-gray-200 pb-3">
        <div class="container mx-auto justify-between items-center flex">
            <div id="logo">
                <a href="/">
                    <img src="/img/logo-uts.png" alt="logo" class="w-1/3">
                </a>
            </div>
            <div class="flex items-center">
                <input type="text" placeholder="Search..."
                    class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none">
                <button type="submit"
                    class="ml-3 inline-flex justify-center rounded-md border border-transparent bg-blue-500 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Search</button>

                <div class="mx-2">
                    @auth
                        <a href="/admin">Go to Dashboard</a>
                    @else
                        <a href="/login">Login as Admin</a>
                    @endauth
                </div>
            </div>
        </div>
    </div>

    {{-- BOTTOM --}}
    <div id="bottom" class="py-3 border-b border-b-gray-200">
        <div class="container mx-auto flex justify-between items-center">
            <div id="menus" class="flex items-center gap-8 tex" style="gap: 2.5rem">
                @foreach ([1, 2, 3, 4, 5] as $key => $value)
                    <a href="/" class="text-gray-800 hover:text-gray-600">Menu {{ $value }}</a>
                @endforeach
            </div>
            <div id="socials" class="space-x-3">
                @foreach ([1, 2, 3] as $key => $value)
                    <button type="button"
                        class="text-blue-700 border border-blue-700 hover:bg-blue-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:focus:ring-blue-800 dark:hover:bg-blue-500">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 18 18">
                            <path
                                d="M3 7H1a1 1 0 0 0-1 1v8a2 2 0 0 0 4 0V8a1 1 0 0 0-1-1Zm12.954 0H12l1.558-4.5a1.778 1.778 0 0 0-3.331-1.06A24.859 24.859 0 0 1 6 6.8v9.586h.114C8.223 16.969 11.015 18 13.6 18c1.4 0 1.592-.526 1.88-1.317l2.354-7A2 2 0 0 0 15.954 7Z" />
                        </svg>
                        <span class="sr-only">Icon description</span>
                    </button>
                @endforeach
            </div>
        </div>
    </div>
</nav>
