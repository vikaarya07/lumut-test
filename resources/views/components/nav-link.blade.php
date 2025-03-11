@props(['active' => false])

<a {{ $attributes }}
    class="{{ $active ? 'text-hitam bg-putih' : 'bg-transparent' }} px-4 py-2 mt-2 text-sm font-semibold bg-putih rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-putih focus:bg-putih focus:outline-none focus:shadow-outline"
    aria-current="{{ $active ? 'page' : false }}">
    {{ $slot }}
</a>
