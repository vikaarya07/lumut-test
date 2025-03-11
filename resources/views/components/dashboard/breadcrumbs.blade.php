<div class="bg-white mx-6 mt-2 mb-8">
    <div class="max-w-7xl">
        <nav class="hidden md:inline-block text-sm font-medium" aria-label="breadcrumb">
            <ol class="flex flex-wrap items-center gap-1">
                <li class="flex items-center gap-1">
                    <a href="/admin/" class="text-base font-semibold text-teal-500 hover:text-gray-800">Dashboard</a>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none"
                        stroke-width="3" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </li>
                <li class="flex items-center text-base font-semibold text-gray-800" aria-current="page">
                    {{ $title }}
                </li>
            </ol>
        </nav>

        {{ $slot }}

    </div>
</div>
