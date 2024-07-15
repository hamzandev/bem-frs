<label for="nama_mahasiswa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
    {{ $label ?? 'Nama Lengkap' }}
    @isset($required)
        <span class="text-red-500">*</span>
    @endisset
</label>
@isset($isTextarea)
    <textarea value={{ $oldValue ?? '' }} id="{{ $name ?? 'textarea_id' }}" rows="4"
        name="{{ $name ?? 'textarea_name' }}"
        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        placeholder="Tuliskan aspirasi disini..."></textarea>
@else
    <input value="{{ $oldValue ?? '' }}" type="{{ $type ?? ' text' }}" name="{{ $name ?? ' input_name' }}" id="{{ $name ?? ' input_id' }}"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
        placeholder="{{ $placeholder ?? ' John Doe' }}" {{ isset($required) && 'required' }} />
@endisset
