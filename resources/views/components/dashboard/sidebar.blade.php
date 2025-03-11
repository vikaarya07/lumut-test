<div x-data="{ showSidebar: false }" @click.away="open = false" class="relative flex w-full flex-col md:flex-row">

    <div x-cloak x-show="showSidebar" class="fixed inset-0 z-10 backdrop-blur-sm md:hidden" aria-hidden="true"
        x-on:click="showSidebar = false" x-transition.opacity></div>

    <nav x-cloak
        class="fixed left-0 z-20 flex h-svh w-60 shrink-0 flex-col border-r border-gray-300 transition-transform duration-300 md:w-64 md:translate-x-0 md:relative"
        x-bind:class="showSidebar ? 'translate-x-0' : '-translate-x-60'" aria-label="sidebar navigation">

        <div class="flex items-center justify-center h-16 bg-white">
            <span class="text-black font-bold uppercase">Admin Panel</span>
        </div>

        <div class="flex flex-col flex-1">
            <nav class="flex-1 p-4 bg-white space-y-2">
                <x-dashboard.nav-link href="{{ route('admin.dashboard.index') }}" :active="request()->is('admin')">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                    </svg>
                    Overview
                </x-dashboard.nav-link>
                <x-dashboard.nav-link href="{{ route('admin.posts.index') }}" :active="request()->is('admin/posts')">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                    </svg>
                    Posts
                </x-dashboard.nav-link>
                @if (auth()->check() && auth()->user()->is_admin)
                    <x-dashboard.nav-link href="{{ route('admin.account.index') }}" :active="request()->is('admin/account')">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
                        </svg>
                        Account
                    </x-dashboard.nav-link>
                @else

                @endif
            </nav>
        </div>
    </nav>

    <div class="h-svh w-full overflow-y-auto bg-white">

        <nav
            class="sticky top-0 z-10 h-16 flex items-center justify-between md:justify-end border-b border-gray-300 bg-white px-4 py-1">

            <button class="z-20 rounded-full bg-white p-4 md:hidden text-gray-800"
                x-on:click="showSidebar = ! showSidebar">
                <svg x-show="showSidebar" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                    class="size-5" aria-hidden="true">
                    <path
                        d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                </svg>
                <svg x-show="! showSidebar" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                    class="size-5" aria-hidden="true">
                    <path
                        d="M0 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm5-1v12h9a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1zM4 2H2a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h2z" />
                </svg>
            </button>
            <div class="flex items-center py-3">
                <x-dashboard.logout>{{ auth()->user()->name }}</x-dashboard.logout>
            </div>
        </nav>

        {{ $slot }}

    </div>

</div>
