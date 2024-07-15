<label for="catagory_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
    {{ $label ?? "Select Label" }}
    @isset($required)
        <span class="text-red-500">*</span>
    @endisset
</label>
<select name="{{ $name ?? "input_name" }}" id="{{ $name ?? "input_id" }}"
    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    <option selected>-- Pilih Kategori --</option>
    @isset($options)
        @foreach ($options as $option)
        <option value="{{ $option->id ?? "option_id" }}">{{ $option->category ?? "Option Label" }}</option>
        @endforeach
    @endisset
</select>
