<a href="{{ $url }}"
    class="flex items-center gap-3 hover:bg-blue-900 transition-colors duration-200 px-3 py-2 rounded-lg {{ request()->routeIs($routeIs) ? 'bg-blue-900' : '' }}">
    <img src="{{ asset($icons) }}" alt="">
    {{ $label }}
</a>
