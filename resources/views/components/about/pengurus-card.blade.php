<div class="min-w-[280px] max-w-sm bg-white border border-gray-200 rounded-2xl shadow">
    <div class="flex flex-col items-center py-8">
        <img class="mb-3 rounded-full shadow-lg w-36 h-36"
            src="{{asset("/img/avatar-default.jpeg")}}" alt="ketua Bem" />
        <h5 class="mb-1 font-bold text-gray-900 text-2x">{{$nama ?? "Widarman"}}</h5>
        <span class="text-sm text-gray-500">{{$jabatan ?? "Ketua Bem"}}</span>
        <span class="mt-5 text-gray-500">{{$prodi ?? "Informatika 21"}}</span>
    </div>
</div>
