<form method="POST" class="space-y-6" action="{{ route('aspirasi.simpan') }}">
    @csrf
    <div class="grid gap-3 lg:grid-cols-2">
        <div>
            <x-input-with-label name="nama_mahasiswa" label="Nama Mahasiswa" required type="text" oldValue="{{ old('nama_mahasiswa') }}"></x-input-with-label>
            @error('nama_mahasiswa')
                <span class="text-sm text-red-500">{{ $errors->first('nama_mahasiswa') }}</span>
            @enderror
        </div>
        <div>
            <x-option-with-label required name="aspirasis_category_id" label="Pilih Kategori" :options="$categories">
            </x-option-with-label>
            @error('aspirasis_category_id')
                <span class="text-sm text-red-500">{{ $errors->first('aspirasis_category_id') }}</span>
            @enderror
        </div>
    </div>
    <div>
        <x-input-with-label name="telepon" label="Telepon" oldValue="{{ old('telepon') }}" type="tel" placeholder="Ex: 08xxxxxxxxxx">
            @error("telepon")
                <span class="text-sm text-red-500">{{ $errors->first('telepon') }}</span>
            @enderror
        </x-input-with-label>
    </div>
    <div>
        <x-input-with-label oldValue="{{ old('judul') }}" name="judul" label="Judul" type="text"
            placeholder="Ex: Pengaduan tentang fasilitas yang rusak" required>
        </x-input-with-label>
        @error('judul')
            <span class="text-sm text-red-500">{{ $errors->first('judul') }}</span>
        @enderror
    </div>
    <div>
        <x-input-with-label oldValue="{{ old('aspirasi') }}" name="aspirasi" label="Aspirasi" type="text" required isTextarea
            placeholder="Tuliskan aspirasi disini...">
        </x-input-with-label>
        @error('aspirasi')
            <span class="text-sm text-red-500">{{ $errors->first('aspirasi') }}</span>
        @enderror
    </div>
    <x-toggle name="is_anonimous" label="Kirim Sebagai Anonimous"></x-toggle>
    <div class="text-sm text-gray-500">
        <p>"Kirim Sebagai Anonimous" akan menyembunyikan identitas mu sebagai pelapor dari publik.</p>
    </div>
    <div class="flex justify-end">
        <x-button type="submit">Kirim</x-button>
    </div>
</form>
