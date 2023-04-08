<a {{ $attributes->merge(['class' => 'text-sm border border-white/50 rounded-full pt-1 pb-1.5 px-3 opacity-80 hover:opacity-100 hover:border-white/75 transition']) }}
   href="{{ route($route) }}">
    {{ $slot }}
</a>