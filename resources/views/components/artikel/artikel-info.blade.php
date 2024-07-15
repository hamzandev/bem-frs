<div class="flex space-x-3 {{ $textColor ?? "text-gray-500" }} mb-3 {{ isset($small) ? 'text-xs' : '' }}">
    <span">
       {{isset($small) ? "" :" Di Terbitkan"}}
       {{ \Carbon\Carbon::parse($published ?? 'now')->locale('id')->format('d M Y') }}
        </span>
        <span> &#8226; </span>
        <span>{{ isset($small) ? '' : 'Oleh'  }} {{ $user ?? "Admin" }}</span>
</div>
