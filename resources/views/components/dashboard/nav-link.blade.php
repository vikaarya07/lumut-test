@props(['active' => false])

<a {{ $attributes }}
    class="{{ $active ? 'text-slate-900 bg-teal-100' : 'bg-transparent' }} flex items-center px-4 py-2 rounded-md text-black hover:text-hitam hover:bg-teal-100"
    aria-current="{{ $active ? 'page' : false }}">
    {{ $slot }}
</a>
