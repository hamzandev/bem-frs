<a href="{{ Auth::user() ? route('dashboard') : '/' }}" class="flex items-center space-x-3 rtl:space-x-reverse">
    <div class="flex items-center space-x-2">
        <img src="{{ asset('img/uts.png') }}" class="h-8 me-1" alt="logo-uts">
        <div class="h-8 border-r-2 border-gray-300"></div>
        <img src="{{ asset('img/bem-frs.png') }}" class="h-10 rounded-full" alt="Flowbite Logo" />
    </div>
    <span class="self-center text-2xl font-semibold whitespace-nowrap">BEM-FRS</span>
</a>
