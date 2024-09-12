<div class="container flex flex-col-reverse gap-5 px-5 mx-auto md:items-start md:flex-row md:px-0">
   <x-home.socials-card></x-home.socials-card>


    <form method="POST" class="p-6 space-y-6 bg-white border border-gray-200 rounded-lg shadow md:w-8/12">
        <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900">
            Berikan kami saran dan kritik
        </h5>
        @csrf
        <div class="grid gap-3 lg:grid-cols-2">


            <div>
                <x-input-with-label name="nama"  label="Nama Kamu" required type="text" oldValue="{{ old('nama') }}"></x-input-with-label>
                @error('nama')
                <span class="text-sm text-red-500">{{ $errors->first('nama') }}</span>
                @enderror
            </div>
            <div>
                <x-input-with-label name="email" label="Alamat Email" placeholder="email@example.com" required type="email" oldValue="{{ old('email') }}"></x-input-with-label>
                @error('email')
                <span class="text-sm text-red-500">{{ $errors->first('email') }}</span>
                @enderror
            </div>
        </div>

        <div>
            <x-input-with-label oldValue="{{ old('Pesan') }}" name="Pesan" label="Pesan" required isTextarea placeholder="Tuliskan Pesan disini...">
            </x-input-with-label>
            @error('Pesan')
            <span class="text-sm text-red-500">{{ $errors->first('Pesan') }}</span>
            @enderror
        </div>
        <div class="flex justify-end">
            <x-button type="submit">Kirim</x-button>
        </div>
    </form>
</div>
