<div class="flex flex-col justify-items-center gap-3 pb-16 w-1/3">
    <img class="object-contain h-12" src="{{ asset($path) }}" alt="header" width="48" height="48">
    <h2 class="text-lg leading-[23.4px] font-medium text-[#222]">{{ $title }}</h2>
    <p class="leading-[23px] text-sm text-[#555]">
        {{ $slot }}
    </p>
</div>